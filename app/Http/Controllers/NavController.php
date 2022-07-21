<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavController extends Controller
{
    //
    public function register()
    {
        return view('/register');
    }

    public function home()
    {
        // $exists = Storage::disk('local')->exists('a.png');
        // dd($exists);
        $cek = Pendaftaran::where('email', session('user')->email)->get()->first();
        if (is_null($cek)) {
            $telah_daftar = false;
        } else {
            $telah_daftar = true;
        }

        return view('/home', ['telah_daftar' => $telah_daftar]);
    }
}
