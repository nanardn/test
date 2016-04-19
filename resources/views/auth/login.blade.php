@extends('template')

@section('title', 'Login')

@section('body')

    <body class="login-page">

    <div class="container">
        <div class="login row">
            <div class="col-md-4 col-md-offset-4">
                <img alt="Sistem Informasi Sertifikasi Produk" class="animated fadeInDown" src="{{ url('images/logo.png') }}"/>

                <div class="login-top-base">
                    <h4>Login</h4>

                    <p>Silahkan masukan data otentikasi</p>
                </div>

                <div class="clearfix login-base">
                    {!! Form::open() !!}

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" placeholder="name@example.com" required type="email"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input class="form-control" id="password" name="password" placeholder="Kata Sandi" required type="password"/>
                        </div>
                        <button class="btn btn-primary custom pull-right" type="submit">Login</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <img alt="PPMB" class="pull-left" src="{{ url('images/ppmb.png') }}"/>

                    <p>
                        <strong>LSPro - PPMB Balai Sertifikasi</strong>
                        <br/>
                        Jalan Raya Bogor KM. 26 Ciracas, Jakarta Timur 13740 Tel. 021-87706835, Fax. 021-87704262
                        <br/>
                        Copyright &copy; 2016
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>

@endsection
