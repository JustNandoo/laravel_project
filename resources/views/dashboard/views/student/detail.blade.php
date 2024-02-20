@extends("dashboard.views.layouts.main")

@section('container')
<div class="container mt-4">
    <h1 class="display-4 mb-4">Details of {{$student->nama}}</h1>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personal Information</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> {{ $student->nama }}</li>
                        <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->tgl_lahir }}</li>
                        <li class="list-group-item"><strong>NIS:</strong> {{ $student->nis }}</li>
                        <li class="list-group-item"><strong>Class:</strong> {{ $student->kelas -> nama ?? "Class Not Found"}}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $student->alamat }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Murid SMK RUS</h5>
                    
                    <p class="card-text">Berikut adalah data lengkap murid SMK RADEN UMAR SAID KUDUS yang berdasarkan dari tabel.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-4">
    <a href="/dashboard/all" class="btn btn-success">Back to Students List</a>

    </div>
</div>
@endsection
