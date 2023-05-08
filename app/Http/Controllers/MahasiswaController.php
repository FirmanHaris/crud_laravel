<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.data')->with([
            'mahasiswa' => Mahasiswa::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa;
        $mhs->idmhs = $request->txtid;
        $mhs->nim = $request->txtnim;
        $mhs->nama_lengkap = $request->txtnama;
        $mhs->gender = $request->txtgender;
        $mhs->alamat = $request->txtalamat;
        $mhs->no_hp = $request->txtno_hp;
        $mhs->save();

        return redirect('mahasiswa')->with('msg', 'Tambah data Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($idmhs)
    {
        $data = Mahasiswa::all();
        $data_id = $idmhs;

        return view('mahasiswa.form_edit', [
            'data_idmhs' => $data_id,
            'data_mhs' => $data

        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // $validate = $request->validated();
        $mhs =  Mahasiswa::find($id);
        $mhs->nim = $request->txtnim;
        $mhs->nama_lengkap = $request->txtnama;
        $mhs->gender = $request->txtgender;
        $mhs->alamat = $request->txtalamat;
        $mhs->no_hp = $request->txtno_hp;
        $mhs->save();

        return redirect('mahasiswa')->with('msg', 'Edit data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('mahasiswa');
    }
}
