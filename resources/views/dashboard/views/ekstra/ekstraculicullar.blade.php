@extends("dashboard.views.layouts.main")

@section('container')

<div class="row justify-content-center">
<h1 class="text-center">EKSTRACULICULLAR TABLE</h1>
    <div class="col-md-8">
        <table class="table table-striped">
            <!-- Table Header -->
            <thead>
                <tr>
                    <th scope="col" class="table-dark">No</th>
                    <th scope="col" class="table-dark">Nama</th>
                    <th scope="col" class="table-dark">Pembina</th>
                    <th scope="col" class="table-dark">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($Ekstra as $data)
                    <tr>
                        <th scope="row" class="table-danger"><?= $no++ ?></th>
                        <td class="table-danger">{{ $data['nama'] }}</td>
                        <td class="table-danger">{{ $data['pembina'] }}</td>
                        <td class="table-danger">{{ $data['deskripsi'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
        </div>
    </div>
</div>

@endsection
