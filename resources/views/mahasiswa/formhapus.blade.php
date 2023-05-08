@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{url('mahasiswa'.$row->idmhs)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Hapus</button>
        </form>
    </div>
</div>
@endsection