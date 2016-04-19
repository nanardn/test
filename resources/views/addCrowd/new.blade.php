@extends('template')

@section('title', $new ? 'Person Baru' : 'Ubah Person')

@section('content')

    <div class="row">
        <ol class="breadcrumb">
            @can('show-dashboard')
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            @endcan
            <li>Master Data</li>
            @can('show-employee')
            <li><a href="{{ url('employees') }}">Person</a></li>
            @endcan
            <li class="active">{{ $new ? 'Tambah' : 'Ubah' }}</li>
        </ol>
    </div>

    <div class="row">
        <div class="clearfix main-title">
            <h1>{{ $new ? 'Person Baru' : 'Ubah Person' }}</h1>
        </div>
    </div>

    <div class="element row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['class' => 'form-horizontal']) !!}

        <div class="form-group">
            {!! Form::label('nip', 'NIP', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('nip', old('nip', $new ? '' : $employee->nip), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'NIP']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('name', 'Nama', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('name', old('name', $new ? '' : $employee->name), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Nama', 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('instance', 'Instansi', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('instance', old('instance', $new ? '' : $employee->instance), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Instansi']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('birthdate', 'Tanggal Lahir', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('birthdate', old('birthdate', $new ? '' : $employee->birthdate), ['class' => 'date form-control', 'placeholder' => 'Tanggal Lahir']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Jenis Kelamin', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                <div class="radio">
                    <label>
                        {!! Form::radio('gender', 'F', $new ? 1 : $employee->gender == 'F') !!}

                        Perempuan
                    </label>
                </div>
                <div class="radio">
                    <label>
                        {!! Form::radio('gender', 'M', $new ? 0 : $employee->gender == 'M') !!}

                        Laki-Laki
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('position', 'Posisi', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('position', old('nip', $new ? '' : $employee->position), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Posisi']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('professional_status', 'Keahlian', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('professional_status', old('professional_status', $new ? '' : $employee->professional_status), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Keahlian']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Alamat', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('address', old('address', $new ? '' : $employee->address), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Alamat']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('note', 'Catatan', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('note', old('note', $new ? '' : $employee->note), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Catatan']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('phone_number', 'Telepon', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::text('phone_number', old('phone_number', $new ? '' : $employee->phone_number), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Telepon']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::email('email', old('email', $new ? '' : $employee->email), ['class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Email']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('user_id', 'User', ['class' => 'col-md-3 control-label']) !!}

            <div class="col-md-9">
                {!! Form::select('user_id', $users, old('user_id', $new ? '' : $employee->user_id), ['placeholder' => 'Pilih User']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                <button class="btn btn-md btn-success" type="submit">{{ $new ? 'Tambah' : 'Ubah' }}</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection
