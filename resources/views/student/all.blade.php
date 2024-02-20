@extends("layouts.main")

@section('content')

<div class="container mt-5">
    <h1 class="text-center">STUDENT TABLE</h1>
  

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
                            <td><a href="/student/detail/{{ $student->id }}" class="btn btn-info btn-sm">Info</a></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $students->links() }}
        </div>
    </div>
</div>



@endsection
