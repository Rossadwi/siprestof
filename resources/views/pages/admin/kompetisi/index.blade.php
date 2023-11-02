@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Total Kompetisi Mahasiswa</h1>
        </div>
        <p>Capaian unggulan kompetisi merupakan wujud capaian meraih gelar kejuaraan (dapat berupa lomba bidang penalaran, olahraga, kesenian, keagamaan, atau sejenisnya).</p>
        <div class="card-body">
                        <div class='section-header2'>
                            <h4>Daftar Kompetisi Mahasiswa</h4>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Nama Prestasi</th>
                                        <th>Juara</th>
                                        <th>Tingkat</th>
                                        <th>Instansi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($kompetisi as $result => $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_mhs }}</td>
                                        <td>{{ $data->nama_kompetisi }}</td>
                                        <td>{{ $data->juara }}</td>
                                        <td>{{ $data->tingkat }}</td>
                                        <td>{{ $data->instansi }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                                                <form method="POST" action="">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm show_confirm" data-toggle="tooltip" title='Delete' style="margin-left: 8px"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    </section>
@endsection
