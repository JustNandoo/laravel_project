@extends('dashboard.views.layouts.main')

@section('container')

<div class="container mt-5">
    <h1 class="mb-4">Tambah Data Kelas</h1>

    <div class="card shadow p-3 mb-5 bg-white rounded">
        <form method="post" action="/kelas/add" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                <div class="invalid-feedback">
                    Please provide a valid nama.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

@endsection
