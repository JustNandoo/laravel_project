@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <img src="{{ asset($foto) }}" alt="Foto" class="img-fluid rounded-circle" style="max-width: 300px;">
            <h1 class="mt-3">About Me</h1>
            <h2>Nama saya adalah: {{$nama}}</h2>
            <h2>Kelas: {{$kelas}}</h2>
            <h2>Saya yang membuat website ini</h2>
        </div>
    </div>
</div>
@endsection
