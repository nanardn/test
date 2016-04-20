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
                        
                    </div>

                    <div class="col-md-12 element">
                      <form action="{{action('daftarCrowdController@save')}}" method="post"> 
                          <input type="hidden" name ="_token" value="<?=csrf_token(); ?>">
                          Nama Penanggung Jawab
                          <input type="text" name="nama_pj" class="form-control">
                          Nama Proyek
                          <input type="text" name="nama_proyek" class="form-control">
                          Kategori
                          <select class="form-control" name= ="kategori">
                                  <option>Zakat</option>
                                  <option>Infaq</option>
                                  <option>Sadaqah</option>
                                  <option>Wakaf</option>
                                </select>
                              <br/>
                          Dana yang Diajukan
                          <input type="text" name="total_dana" class="form-control">
                          Deskripsi Proyek
                          <input type="text" name="deskripsi" class="form-control">
                          Foto Proyek
                          <input type="file" name="foto_proyek" class="form-control">
                          Foto Penanggung Jawab
                          <input type="file" name="foto_pj" class="form-control">
                          <br/>
                          <input type="submit" value="Daftar" class="btn btn-primary"></input>
                      </form>
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
