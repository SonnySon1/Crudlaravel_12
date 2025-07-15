<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //index view
    public function index() {
        $users = User::all();
        return view('siswa.index', compact('users'));
    }


    // create view
    public function create() {
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
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
        return redirect('/');
    }


    // delete siswa
    public function destroy($id) {
        User::find($id)->delete();
        return redirect('/');
    }


    // edit 
    public function edit($id) {
        $user = User::find($id);
        $clases = Clas::all();
        return view('siswa.edit', compact('user', 'clases'));
    }



    // update siswa
    public function update(Request $request, $id) {
        $request->validate([
            'photo'          => 'required',
            'name'           => 'required',
            'nisn'           => 'required|numeric',
            'alamat'         => 'required',
            'email'          => 'required',
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
        
        $data_user = User::find($id);
        if ($request->hasFile('photo')) {
            if ($data_user->photo && Storage::disk('public')->exists($data_user->photo)) {
                Storage::disk('public')->delete($data_user->photo);
            }

             $data_store['photo'] = $request->file('photo')->store('photosiswa', 'public');
        }

        
        $data_user->update($data_store);
        return redirect('/');
    }

}
