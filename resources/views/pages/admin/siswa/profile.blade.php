@extends('layouts.main')
@section('title', 'Profile Siswa')

@section('content')
    <div class="section">
        <div class="section-body">
        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ url(Storage::url($siswa->foto)) }}" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">NIM</div>
                                <div class="profile-widget-item-value">{{ $siswa->nis }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Telp</div>
                                <div class="profile-widget-item-value">{{ $siswa->telp }}</div>
                            </div>
                            </div>
                        </div>
                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">{{ $siswa->nama }}
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Mahasiswa
                                </div>
                            </div>
                            <label for="alamat">Alamat : {{ $siswa->alamat }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
