@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <h1 class="text-center">Daftar Kelas</h1>

    <table class="table table-bordered table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nama</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($listKelas as $kelas)
            <tr>
                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                <td class="text-center">{{ $kelas->nama }}</td>
                
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
