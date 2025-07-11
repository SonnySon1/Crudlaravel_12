<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //index view
    public function index() {
        return view('index');
    }


    // create view
    public function create() {
        $clases = Clas::all();
        return view('create', compact('clases'));
    }


    // store siswa
    public function store(Request $request) {
        $request->validate([
            'photo'          => 'required',
            'name'           => 'required',
            'nisn'           => 'required|numeric',
            'alamat'         => 'required',
            'email'          => 'required',
            'password'       => 'required',
            'no_handphone'   => 'required',
        ]);

        
        $data_store = [
            'clas_id'      => $request->clas_id,
            'name'         => $request->name,
            'nisn'         => $request->nisn,
            'alamat'       => $request->alamat,
            'email'        => $request->email,
            'password'     => bcrypt($request->password),
            'no_handphone' => $request->no_handphone,
        ];
        
        $data_store['photo'] = $request->file('photo')->store('photosiswa', 'public');

        User::create($data_store);
        return view('index');
    }
}
