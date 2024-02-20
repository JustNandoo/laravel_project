@extends('dashboard.views.layouts.main')

@section('container')
<div class="container mt-3">
    <h1 class="text-center">Daftar Kelas</h1>

    <a type="button" class="btn btn-dark mt-5 mb-5" href="/kelas/create">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
        </svg>
        Add New Data
    </a>
    @if (session()->has('successAdd'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('successAdd') }}
        </div>
    @endif

    @if (session()->has('successDelete'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('successDelete') }}
        </div>
    @endif

    <table class="table table-bordered table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listKelas as $kelas)
            <tr>
                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                <td class="text-center">{{ $kelas->nama }}</td>
                <td class="text-center">
                    <a type="button" class="btn btn-warning btn-sm mx-1" href="/kelas/edit/{{ $kelas->id }}">Edit</a>

                    <a type="button" class="btn btn-danger btn-sm mx-1" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $kelas->id }}">Delete</a>
                    <div class="modal fade" id="deleteModal{{ $kelas->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel{{ $kelas->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel{{ $kelas->id }}">Delete Confirmation</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center">Are you sure you want to delete this data ?
                                        <b>{{ $kelas->nama }}</b>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="/kelas/delete/{{$kelas->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
