<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class contohM extends Controller
{
    public function hapus($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('mahasiswa');
    }
}
