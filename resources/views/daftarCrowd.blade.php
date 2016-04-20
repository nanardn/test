@extends('template')

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
                                <input type="text" class="form-control" id="filter" placeholder='Cari Buku Besar...'/>
                                <i class="fa fa-search icon"></i>
                            </div>
                            <a href="#laporan.html" type="button" class="btn custom2 table-button btn-success btn-xs form-control">Buku Besar Baru</a>
                        </div>
                    </div>

                    <div class="col-md-12 element">
                        <table id="example" class="datatable table table-bordered" >
                            <thead>
                                <tr>
                                    <th>Proyek</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Kategori</th>
                                    <th>Total Dana</th>
                                    <th>Terkumpul</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                     		 <?php
								$angka = "0";
								$jumlah_desimal ="2";
								$pemisah_desimal =",";
								$pemisah_ribuan =".";
								?>
                               <?php
                               		foreach ($dana as $row) {
                               ?> <tr>
                               	<td><?php echo $row->nama_proyek  ?></td>
                               	<td><?php echo $row->nama_pj ?></td>
                               	<td><?php echo $row->kategori ?></td>
                               	<td><?php 
                               		$angka=($row->total_dana);
                               		echo "Rp ".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan); ?></td>
                               	<td><?php $angka=($row->sementara_dana);
                               		echo "Rp ".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan); ?></td>
                               		<td><a href="<?php echo 'EditProduct/'.$row->id?>">Edit</a> | <a href="<?php echo '/DetailJe/'.$row->id?>">Detail</a></td>
                               </tr>

                               <?php } ?>
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
