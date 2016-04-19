@extends('template')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="animated box col-lg-4 fadeInDown">
            <p class="box-title">
                Permohonan Sertifikasi
            </p>

            <div class="box-line"></div>

            <div class="box-number">
                <p>{{ $total_requests }}</p><span>Data</span>
            </div>

            <div class="box-line"></div>

            <p class="box-text">
                Ada total <span class="blue-text">{{ $total_requests }}</span> data permohonan sertifikasi.
            </p>
        </div>
    </div>

@endsection
