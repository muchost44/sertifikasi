<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolRegister extends Controller
{
    //
    public function form()
    {
        $cek = Pendaftaran::where('email', session('user')->email)->get()->first();
        // dd($cek);
        if (is_null($cek)) {
            return view('SchoolRegist/form');
        } else {
            session()->put('flash', 'Anda sudah terdaftar');
            return view('SchoolRegist/form_registed', ['data' => $cek]);
        }
    }

    public function saveDataStu(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'place_born' => 'required',
            'date_born' => 'required',
            'email' => 'required',
            'photo' => '',
            'score_document' => '',
            'math' => 'required',
            'science' => 'required',
            'bahasa' => 'required',
            'english' => 'required',

        ]);
        $nama = $validatedData['name'];

        //ambil ekstensi file
        $extension = $request->file('score_document')->getClientOriginalExtension();
        //menggabungkan
        $filenameSimpan = $nama . '_' . time() . '.' . $extension;
        //menyimpan file
        $path = $request->file('score_document')->storeAs('public/document', $filenameSimpan);
        $validatedData['score_document'] = $filenameSimpan;


        // ambil nama file asli
        $filenameWithExt = $request->file('photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //ambil ekstensi file
        $extension = $request->file('photo')->getClientOriginalExtension();
        //menggabungkan
        $filenameSimpan = $nama . '_' . time() . '.' . $extension;
        //menyimpan file
        $path = $request->file('photo')->storeAs('public/image', $filenameSimpan);
        $validatedData['photo'] = $filenameSimpan;

        $hasil = Pendaftaran::create($validatedData);
        $request->session()->put('success', 'Pendaftaran berhasil');
        return redirect('/home');
    }

    public function userRegistStatus($email)
    {
        // dd('a');
        $data = Pendaftaran::where('email', $email)->get()->first();
        // dd($data);
        return view('SchoolRegist/userRegistStatus', ['data' => $data]);
    }

    public function adminRegistInfo()
    {
        // dd(Pendaftaran::all());
        return view('SchoolRegist/registInfo', ['data' => Pendaftaran::all()]);
    }
    public function adminUsersInfo()
    {

        return view('SchoolRegist/usersInfo', ['data' => User::all()]);
    }

    public function detail($id)
    {
        $data = Pendaftaran::where('id', $id)->get()->first();
        // dd($data);
        $url = Storage::url($data->photo);
        $temp = [
            'data' => $data,
            'url_foto' => $url
        ];
        return view('SchoolRegist/detail', $temp);
    }

    public function setuju($id, Request $request)
    {
        Pendaftaran::where('id', $id)->update(['status' => 1]);
        $request->session()->put('success', 'Anda berhasil menyetujui pendaftaran seorang peserta');
        return view('SchoolRegist/registInfo', ['data' => Pendaftaran::all()]);
    }
    public function tolak($id, Request $request)
    {
        Pendaftaran::where('id', $id)->update(['status' => 2]);
        $request->session()->put('success', 'Anda berhasil menolak pendaftaran seorang peserta');
        return view('SchoolRegist/registInfo', ['data' => Pendaftaran::all()]);
    }
    public function cadangan($id, Request $request)
    {
        Pendaftaran::where('id', $id)->update(['status' => 3]);
        $request->session()->put('success', 'Anda berhasil memasukan seorang perserta kedalam daftar cadangan');
        return view('SchoolRegist/registInfo', ['data' => Pendaftaran::all()]);
    }
}
