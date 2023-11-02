@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Total Penghargaan Mahasiswa</h1>
        </div>
        <p>Capaian unggulan penghargaan merupakan wujud capaian atas dedikasi atau keberhasilan berinovasi yang memberikan dampak positif bagi lingkungan serta diberikan oleh lembaga resmi (misalnya penghargaan berupa HaKI) atau masyarakat.</p>
        <div class="card-body">
                        <div class='section-header2'>
                            <h4>Daftar Penghargaan Mahasiswa</h4>
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
                                   
                                    <tr>
                                        <td>1</td>
                                        <td>Rossa Dwi Sukmawati</td>
                                        <td>Juara LKTI</td>
                                        <td>2</td>
                                        <td>Nasional</td>
                                        <td>HMP UNUSA</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
    </section>
@endsection
