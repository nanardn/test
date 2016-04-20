@extends('template')
@section('title','Daftar Pendanaan')

@section('content')

        <div id="main-content">
                <!-- breadcrumb -->
                <div class="row" >
                    <ol class="breadcrumb">
                      <li><a href="{{URL::to('/home')}}">Dashboard</a></li>
                      
                      <li class="active">Pengajuan Dana</li>
                    </ol>
                </div>
                <!-- breadcrumb -->

                <div class="row" >
                    <div class="main-title clearfix">
                        <h1>Pengajuan Penggalangan Dana</h1>
                        <div class="toolbar form-inline pull-right">
                            <div class="form-group search">
                                <input type="text" class="form-control" id="filter" placeholder='Cari Laporan...'/>
                                <i class="fa fa-search icon"></i>
                            </div>
                            <a href="#laporan.html" type="button" class="btn custom2 table-button btn-success btn-xs form-control">Laporan Baru</a>
                        </div>
                    </div>

                    <div class="col-md-12 element">
                      <table id="example" class="datatable table table-bordered" >
                            <thead>
                                <tr>
                                    <th>Kepada</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bank BNI Syariah</td>
                                    <td>Menunggu Balasan</td>
                                    <td class="button-col">
                                        <a href="#" type="button" class="btn custom2 table-button btn-primary btn-xs ">Detail</a>
                                        <a href="ubah_perusahaan.html" type="button" class="btn custom2 table-button btn-grey btn-xs ">Ubah</a>
                                        <a href="#" type="button" class="btn custom2 table-button btn-danger btn-xs ">Hapus</a>
                                    </td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/datatable/js/jquery.dataTables.min.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    // DATATABLE
    $(document).ready(function() {
        oTable = $('#example').DataTable( {
            "dom": '<"toolbar">frtip',
             "bFilter": true
        } );

        $('#filter').keyup(function(){
            oTable.search($(this).val()).draw() ;
        });
    });
</script>
@endsection
