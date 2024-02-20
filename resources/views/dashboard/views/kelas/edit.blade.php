@extends('dashboard.views.layouts.main')

@section('container')

<h1>Edit data</h1>

<div class="container">
  <form method="post" action="/kelas/update/{{ $kelas->id }}" class="needs-validation mx-auto" novalidate>
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kelas->nama) }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection