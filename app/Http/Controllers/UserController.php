<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();

        return view('user.index', [
            "Data" => $Data[0]
        ]);
    }
}
