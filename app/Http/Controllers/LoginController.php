<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

            $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();
            $request->session()->regenerate();


            if ($Data[0]->jabatan->name == "SuperAdmin") {
                return redirect()->intended('/admin')->with('success', 'Selamat Datang ' . $request->input("username"));
            } else {
                return redirect()->intended('/Dashboard')->with('success', 'Selamat Datang ' . $request->input("username"));
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

        $ValidateUser["password"] = hash::make($ValidateUser["password"]);

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

        dd('sucsess');
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
