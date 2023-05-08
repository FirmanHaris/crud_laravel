@extends('layout.main')
@section('content')
<h3>Tambah Data Mahasiswa</h3>
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" onclick="window.location=`{{url('mahasiswa')}}`">
            Kembali
        </button>
    </div>
    <div class="card-body">
        <form action="{{url('mahasiswa')}}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">ID Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('txtid') is-invalid @enderror" id="txtid" name="txtid" value="{{old('txtid')}}">
                    @error('txtid')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtnim" class="col-sm-2 col-form-label">Nim</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('txtnim') is-invalid @enderror" id="txtnim" name="txtnim" value="{{old('txtnim')}}">
                    @error('txtnim')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtnama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('txtnama') is-invalid @enderror" id="txtnama" name="txtnama" value="{{old('txtnama')}}">
                    @error('txtnama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtgender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                        <option value="" selected>--pilih--</option>
                        <option value="L" {{(old('txtgender')=='L')?'selected':''}}>Laki-Laki</option>
                        <option value="P" {{(old('txtgender')=='P')?'selected':''}}>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control @error('txtalamat') is-invalid @enderror" name="txtalamat" id="txtalamat" cols="30" rows="10">{{old('txtalamat')}}</textarea>
                    @error('txtalamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtno_hp" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('txtno_hp') is-invalid @enderror" id="txtno_hp" name="txtno_hp" value="{{old('txtno_hp')}}">
                    @error('txtno_hp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="row mb-3 mt-3">
                    <label for="#" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection