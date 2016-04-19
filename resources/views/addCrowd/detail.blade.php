@extends('template')

@section('title', $employee->name)

@section('content')

    <div class="row">
        <ol class="breadcrumb">
            @can('show-dashboard')
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            @endcan
            @can('show-employee')
            <li><a href="{{ url('employees') }}">Person</a></li>
            @endcan
            <li class="active">Detail</li>
        </ol>
    </div>

    <div class="row">
        <div class="clearfix main-title">
            <h1>Detail Person</h1>

            @can('edit-employee')
            <div class="form-inline pull-right toolbar">
                <a class="toolbar-link" href="{{ url('employees/' . $employee->id . '/edit') }}">
                    <i class="fa fa-lg fa-pencil-square-o"></i>
                </a>
            </div>
            @endcan
        </div>
        <hr/>
    </div>

    <div class="row">
        <div class="col-md-3 element">
            <p>
                <strong>NIP</strong>
            </p>

            <p>{{ $employee->nip }}</p>
        </div>

        <div class="col-md-3 element">
            <p>
                <strong>User</strong>
            </p>

            <p>
                @if ($employee->user)
                    {{ $employee->user->username }}
                @else
                    -
                @endif
            </p>
        </div>

        <div class="col-md-6 element">
            <p>
                <strong>Nama</strong>
            </p>

            <p>{{ $employee->name }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 element">
            <p>
                <strong>Tanggal Lahir</strong>
            </p>

            <p>{{ $employee->birthdate }}</p>
        </div>

        <div class="col-md-3 element">
            <p>
                <strong>Jenis Kelamin</strong>
            </p>

            <p>
                @if ($employee->gender === 'F')
                    Perempuan
                @elseif ($employee->gender === 'M')
                    Laki-Laki
                @endif
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 element">
            <p>
                <strong>Instansi</strong>
            </p>

            <p>{{ $employee->instance }}</p>
        </div>

        <div class="col-md-3 element">
            <p>
                <strong>Posisi</strong>
            </p>

            <p>{{ $employee->position }}</p>
        </div>

        <div class="col-md-3 element">
            <p>
                <strong>Keahlian</strong>
            </p>

            <p>{{ $employee->professional_status }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 element">
            <p>
                <strong>Telepon</strong>
            </p>

            <p>{{ $employee->phone_number }}</p>
        </div>

        <div class="col-md-6 element">
            <p>
                <strong>Email</strong>
            </p>

            <p>{{ $employee->email }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 element">
            <p>
                <strong>Alamat</strong>
            </p>

            <p>{{ $employee->address }}</p>
        </div>

        <div class="col-md-6 element">
            <p>
                <strong>Catatan</strong>
            </p>

            <p>{{ $employee->note }}</p>
        </div>
    </div>

@endsection
