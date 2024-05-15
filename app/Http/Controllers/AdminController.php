<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();

        return view('admin.index', [
            "Data" => $Data[0]
        ]);
    }

    public function dataAdmin()
    {
        $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();
        $DataUser = DataUser::with('jabatan')->get();

        return view('admin.table_admin', [
            "Data" => $Data[0],
            "DataUser" => $DataUser
        ]);
    }

    public function dataJamaah()
    {
        $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();
        $DataUser = DataUser::with('bimbingan')->where('jabatan_id', 1)->get();

        return view('admin.table_jamaah', [
            "Data" => $Data[0],
            "DataUser" => $DataUser
        ]);
    }

    public function dataPengajar()
    {
        $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();
        $DataUser = DataUser::where('jabatan_id', 2)->get();;

        return view('admin.table_pengajar', [
            "Data" => $Data[0],
            "DataUser" => $DataUser
        ]);
    }
}
