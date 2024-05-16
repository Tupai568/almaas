<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\Register;
use App\Models\DataUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{

    public function login(Request $request)
    {

        $credentials = [
            "email" => $request->input('lgML'),
            "password" => $request->input('lgPW')
        ];

        $request->validate([
            'lgML' => 'required|email',
            'lgPW' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            if (auth()->user()->email_verified_at != NULL) {
                $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();
                $request->session()->regenerate();


                if ($Data[0]->jabatan->name == "SuperAdmin") {
                    return redirect()->intended('/admin')->with('success', 'Selamat Datang ' . $request->input("username"));
                } else {
                    return redirect()->intended('/Dashboard')->with('success', 'Selamat Datang ' . $request->input("username"));
                }
            } else {
                Auth::logout();
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                return back()->with('error', 'Please Confirmasi Email');
            }
        }

        return back()->with('error', 'Invalid Username Or Password');
    }



    public function store(Request $request)
    {

        $request->validate([
            "password" => "required|min:5|max:255",
            "confirm" => "required|same:password"
        ]);

        $ValidateUser = $request->validate(([
            "email" => "required|unique:users",
            "password" => "required|min:5|max:255"
        ]));

        $random = Str::random(100);

        $ValidateUser["password"] = hash::make($ValidateUser["password"]);
        $ValidateUser["email_verified_token"] = $random;

        $ValidateData = $request->validate(([
            "nama_lengkap" => "required",
            "nama_panggilan" => "required",
            "alamat_rumah" => "required",
            "tempat_lahir" => "required",
            "usia" => "required",
            "gender" => "required",
            "tahap" => "required",
            "whatsapp" => "required",
            "pekerjaan" => "required",
            "pendidikan" => "required",
            "bimbingan_id" => "required",
        ]));


        $newUser = User::create($ValidateUser);

        $ValidateData["program"] = 'infaq';
        $ValidateData["jabatan_id"] = 1;
        $ValidateData["user_id"] = $newUser->id;
        DataUser::create($ValidateData);

        $link = "http://127.0.0.1:8000/email/verify/" . $newUser->id . "/" . $random;
        Mail::to($ValidateUser['email'])->send(new Register($link));
    }



    public function verifyEmail($id, $hash)
    {
        $user = User::find($id);

        // Memeriksa apakah pengguna ditemukan
        if (!$user) {
            dd('Pengguna tidak ditemukan');
        }

        // Memeriksa apakah token verifikasi cocok
        if ($user->email_verified_token !== $hash) {
            dd('Token verifikasi tidak valid');
        }

        // Menandai email pengguna sebagai diverifikasi
        $user->email_verified_at = Carbon::now();
        $user->save();
        dd('Succses  Verivikasi');
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
