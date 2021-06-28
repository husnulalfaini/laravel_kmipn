@extends('layout.master')

@section('header')
    Daftar Petani
@endsection

@section('content')
<section class="content">
<div class="container-fluid">
                  <section class="content">
                     <div class="container-fluid">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="card card-outline card-warning">
                              <div class="card-header">
                                 <h3 class="card-title">Riwayat Lahan</h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                 <table id="example2" class="table table-bordered table-hover">
                                 <thead><tr>
                                                               <th>Tanggal</th>
                                                               <th>kelembapan</th>
                                                               <th>PH</th>
                                                               <th colspan="2">Keterangan</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                         
                                                      @foreach ($riwayat as $ri)
                                                            <tr>
                                                               <td>{{$ri->created_at}}</td>
                                                               <td>{{$ri->kelembapan}} %</td>
                                                               <td>{{$ri->ph}}</td>

                                                               <?php 
                                                                  $kelembapan = $ri->kelembapan;
                                                                  $ph = $ri->ph;
                                                               ?>


                                                               @if ($kelembapan<40) 
                                                                  <td>Kelembapan Rendah</td>
                                                               @elseif ($kelembapan>60) 
                                                                  <td>Kelembapan Rendah</td>
                                                               @else 
                                                                  <td>Kelembapan Normal</td>
                                                               @endif

                                                               @if ($ph < 6)
                                                                  <td>PH asam</td>    
                                                               @elseif ($ph > 7) 
                                                                  <td>PH Basa</td> 
                                                               @else 
                                                                  <td>PH Normal</td>
                                                               @endif
                                                   @endforeach
                                                         </tbody>
                                                         <tfoot>
                                                            <tr>
                                                            <th>Tanggal</th>
                                                               <th>kelembapan</th>
                                                               <th>PH</th>
                                                               <th colspan="2">Keterangan</th>
                                                            </tr>
                                                         </tfoot>
                                 </table>
                              </div>
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                     </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.container-fluid -->
                     </section>
                  </section>
                  <!-- /.content -->
                   <!-- jQuery -->

<!-- jQuery -->
<script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('public/asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- js dari data table -->
<script>
   $('#example2').DataTable({
     "paging": true,
     "lengthChange": false,
     "searching": true,
     "ordering": true,
     "info": true,
     "autoWidth": false,
     "responsive": true,
   });
</script>

@endsection