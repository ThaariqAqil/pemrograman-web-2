<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53aa5fd (Praktikum)
        return view('form');
    }

    // buat function yang di dalam nya mengambil inputan form
    // dengan menggunakan parameter $request
    // dan lakukan pengecekan apakah nama dll sudah di isi atau belum (required)

    public function hasil(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "ttl" => 'required',
            "jenis_kelamin" => 'required',
            "hobi" => 'required',
        ]);
        return view('hasil', ['data' => $request]);
<<<<<<< HEAD
=======
=======
        return view('tugasform');
    }

// buat function yang di dalam nya mengambil inputan form
// dengan menggunakan parameter $request
// dan Lakukan pengecekan apakah nama dll sudah di isi atau belum (required)

public function hasil(Request $request){
    $this->validate($request, [
        "nama" => 'required',
        "email" => 'required',
        "lokasi" => 'required',
        "jenis_kelamin" => 'required',
        "skill" => 'required',
    ]);
    return view('tugasform', ['data' => $request]);
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    }
}
