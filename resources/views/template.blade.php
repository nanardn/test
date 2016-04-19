<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <link href="{{ url('images/favicon.png') }}" rel="icon shortcut" type="image/png"/>

    <title>@yield('title') | Sistem Pelaporan Usaha UMKM</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css" rel="stylesheet"/>

    <link href="{{ url('css/app.css') }}" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

@section('body')

    <body>

    <div id="wrapper">
        <div class="animated" id="sidebar-wrapper">
            <ul class="sidebar-group sidebar-nav">
                <li class="sidebar-brand"></li>
                <li class="sidebar-item sidebar-text">
                    <p>Navigasi</p>
                </li>

                    <li class="sidebar-item">
                        <a class="collapsed has-sub sidebar-link" data-parent=".sidebar-item" data-toggle="collapse" href="#data">
                            Penggalangan Dana
                        </a>
                        <ul class="collapse sublinks" id="data">
                            <li><a href="#">Daftar Penggalangan</a></li>
                            <li><a href="{{URL::to('/listCrowd')}}">List Penggalangan</a></li>
                            
                            
                        </ul>
                    </li>
                @if (Gate::check('show-report-certification') || Gate::check('show-report-document-type') || Gate::check('show-report-factory') || Gate::check('show-report-research'))
                    <li class="sidebar-item">
                        <a class="collapsed has-sub sidebar-link" data-parent=".sidebar-item" data-toggle="collapse" href="#report">
                            Laporan
                        </a>
                        <ul class="collapse sublinks" id="report">
                            @can('show-report-certification')
                            <li><a href="{{ url('report/certification') }}">Permohonan Pengajuan Sertifikasi</a></li>
                            @endcan
                            @can('show-report-document-type')
                            <li><a href="{{ url('report/document-type') }}">Tim Asesmen Kecukupan Dokumen</a></li>
                            @endcan
                            @can('show-report-factory')
                            <li><a href="{{ url('report/factory') }}">Tim Asesmen Pabrik</a></li>
                            @endcan
                            @can('show-report-research')
                            <li><a href="{{ url('report/research') }}">Tim Pengkaji</a></li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if (Gate::check('show-user') || Gate::check('show-role') || Gate::check('show-activity') || Gate::check('index-log-viewer'))
                    <li class="sidebar-item">
                        <a class="collapsed has-sub sidebar-link" data-parent=".sidebar-item" data-toggle="collapse" href="#system">
                            Administrasi Sistem
                        </a>
                        <ul class="collapse sublinks" id="system">
                            @can('show-user')
                            <li><a href="{{ url('users') }}">User</a></li>
                            @endcan
                            @can('show-role')
                            <li><a href="{{ url('roles') }}">Role</a></li>
                            @endcan
                            @can('show-activity')
                            <li><a href="{{ url('activities') }}">Audit Log</a></li>
                            @endcan
                            @can('index-log-viewer')
                            <li><a href="{{ url('logs') }}" target="_blank">Error Log</a></li>
                            @endcan
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

        <a class="btn btn-default" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div>
                    <nav class="navbar navbar-default navbar-fixed-top" id="top-menu-bar">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav navbar-right" id="top-menu-item">
                                       <ul class="nav navbar-nav navbar-right">
                                        <!-- Authentication Links -->
                                        @if (Auth::guest())
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                            <li><a href="{{ url('/register') }}">Register</a></li>
                                        @else
                                            
                                            <li class="pull-right"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                

                                                    
                                                
                                            </li>
                                            <li class="pull-right">
                                            <p class="navbar-text">
                                                    {{ Auth::user()->name }} 
                                                </p>
                                            </li>
                                        @endif
                                    </ul>
                                <li class="pull-right">
                                    <p class="navbar-text">
                                        @if (Auth::check())
                                            {{ 'Selamat datang, ' . Auth::user()->username }}
                                        @endif
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>

                <div id="main-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>

    <script src="{{ url('js/app.js') }}"></script>

    @yield('script')

    </body>

@show

</html>
