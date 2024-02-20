@extends("dashboard.views.layouts.main")

@section('container')

<div class="container mt-5">
    <h1 class="text-center">STUDENT TABLE</h1>
    <a type="button" class="btn btn-dark mt-5 mb-5" href="/student/create"> + Add New Data</a>

    @if (session()->has('successadd'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('successadd') }}
        </div>
    @endif

    @if (session()->has('successdelete'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('successdelete') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ ($students->currentPage() - 1) * $students->perPage() + $loop->iteration }}</th>
                            <td>{{ $student->nis}}</td>
                            <td>{{ $student->nama }}</td>
                            <td>{{ $student->kelas->nama ?? "Class Not Found"}}</td>
                            <td>
                                <a href="/student/edit/{{ $student->id }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="/dashboard/student/detail/{{ $student->id }}" class="btn btn-info btn-sm">Info</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->id }}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $students->links() }}
        </div>
    </div>
</div>

@foreach($students as $student)
    <div class="modal fade" id="deleteModal{{ $student->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel{{ $student->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel{{ $student->id }}">Delete Confirmation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Are you sure want to delete this data? <b>{{ $student->nama }}</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="/student/delete/{{ $student->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
