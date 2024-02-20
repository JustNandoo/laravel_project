@extends('dashboard.views.layouts.main')
@section('container')
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Data Siswa</h2>

        <form method="post" action="student/ad/d">
            @csrf

            <div class="form-group mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" name="nis" id="nis" value="{{ old('nis')}}">
            </div>

            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama')}}">
            </div>

            <div class="form-group mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <!-- <input type="text" class="form-control" name="kelas" id="kelas" value="{{ old('kelas')}}"> -->
                <select name="kelas_id" class="form-select">
                    @foreach($kelas as $kelass)
                    <option name="kelas_id" value="{{$kelass->id}}">{{$kelass->nama}}</option>
                    @endforeach
</select>
            </div>

            <div class="form-group mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir')}}">
            </div>

            <div class="form-group mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat')}}">
            </div>

            <button type="submit" class="btn btn-dark mt-3">Add Data</button>
        </form>

    </div>
@endsection
