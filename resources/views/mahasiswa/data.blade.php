@extends('layout.main')
@section('content')
<h3>Data Mahasiswa</h3>
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" onclick="window.location=`{{url('mahasiswa/add')}}`">
            <i class="fas fa-plus-circle"></i> Add New Data
        </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil : </strong>{{session('msg')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Mahasiswa</th>
                    <th>Nim</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $row)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$row->idmhs}}</td>
                    <td>{{$row->nim}}</td>
                    <td>{{$row->nama_lengkap}}</td>
                    <td>{{($row->gender == 'L') ? 'Laki-Laki':'Perempuan'}}</td>
                    <td>{{$row->alamat}}</td>
                    <td>{{$row->no_hp}}</td>
                    <td>
                        <button onclick="window.location=`{{url('mahasiswa/'.$row->idmhs)}}`" type="button" class="btn btn-sm btn-warning" title="Edit">
                            <i class="fas fa-pen"></i>
                        </button>
                        <!-- <form method="post" action="{{url('mahasiswa/'.$row->idmhs)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </form> -->
                        <a href="hapusMahasiswa/{{$row->idmhs}}" class="btn btn-sm btn-danger">Hapus</a>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection