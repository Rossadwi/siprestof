@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Selamat datang {{ Auth::user()->name }}</h1>
    </div>

    <div class="section-body">
        <div class="row ">
            {{-- Jadwal --}}

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Prestasi</h4>
                        </div>
                        <div class="card-body">
                            {{ $materi }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Daftar Pengajuan</h4>
                        </div>
                        <div class="card-body">
                            {{ $tugas }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
