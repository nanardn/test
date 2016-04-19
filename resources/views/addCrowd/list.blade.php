@extends('template')

@section('title', 'Person')

@section('content')

    <div class="row">
        <ol class="breadcrumb">
            @can('show-dashboard')
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            @endcan
            <li>Master Data</li>
            <li class="active">Person</li>
        </ol>
    </div>

    <div class="row">
        <div class="clearfix main-title">
            <h1>Person</h1>

            <div class="form-inline pull-right toolbar">
                <div class="form-group search">
                    <input class="form-control" id="filter" placeholder="Cari Person..." type="text"/>
                    <i class="icon fa fa-search"></i>
                </div>
                @can('add-employee')
                <a class="btn btn-success btn-xs custom2" href="{{ url('employees/add') }}">
                    Person Baru
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="element row">
        <table class="dataTable table table-bordered">
            <thead>
            <tr>
                <th>Nama</th>
                @if (Gate::check('show-employee-detail') || Gate::check('edit-employee') || Gate::check('delete-employee'))
                    <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    @if (Gate::check('show-employee-detail') || Gate::check('edit-employee') || Gate::check('delete-employee'))
                        <td>
                            @can('show-employee-detail')
                            <a class="btn btn-primary btn-xs custom2" href="{{ url('employees/' . $employee->id) }}">Detail</a>
                            @endcan
                            @can('edit-employee')
                            <a class="btn btn-grey btn-xs custom2" href="{{ url('employees/' . $employee->id . '/edit') }}">Ubah</a>
                            @endcan
                            @can('delete-employee')
                            <a href="#" data-href="{{ url('employees/' . $employee->id . '/delete') }}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs custom2">Hapus</a>
                            @endcan
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Hapus data</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-danger btn-xs custom2 btn-ok">Hapus</a>
                </div>
            </div>
        </div>
    </div>
@endsection
