@extends('dashboard.views.layouts.main')
@section('container')
    <div class="container mt-5">
        <h2 class="mb-4">Edit Data Siswa</h2>

        <form method="post" action="/student/update/ {{ $student-> id}}">
            @csrf

            <div class="form-group mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" name="nis" id="nis" value="{{ old('nis',  $student->nis)}}">
            </div>

            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama',  $student->nama)}}">
            </div>

            <div class="form-group mb-3">
            <label for="kelas" class="form-label">Kelas</label>
                <!-- <input type="text" class="form-control" name="kelas" id="kelas" value="{{ old('kelas')}}"> -->
                <select name="kelas_id" class="form-select">
                    @foreach($kelas as $kelass)
                    <option value="{{ $kelass->id }}" {{ $kelass->id == $student->kelas_id ? 'selected' : '' }}>
                                    {{ $kelass->nama }}
                                </option>
                    @endforeach
</select>
            </div>

            <div class="form-group mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir',  $student->tgl_lahir)}}">
            </div>

            <div class="form-group mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat',  $student->alamat)}}">
            </div>

            <button type="submit" class="btn btn-dark mt-3">Save Data</button>
        </form>

    </div>
@endsection
