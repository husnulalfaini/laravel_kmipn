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
                           <div class="col-12">
                           <div class="card">
                                 <div class="card-header">
                                    <h3 class="card-title">Notifikasi</h3>
                                 </div>
                                 <?php 
                                    $kelembapan = $notif->kelembapan;
                                    $ph = $notif->ph;
                                 ?>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                       <tbody>
                                          <tr>
                                             <td>Tanggal</td>
                                             <td>{{$notif->created_at}}</td>
                                             </tr>
                                          <tr>
                                             <td>sensor kelembapan</td>
                                             <td>{{$notif->kelembapan}}</td>
                                             </tr>
                                          <tr>
                                             <td>sensor ph</td>
                                             <td>{{$notif->ph}}</td>
                                             </tr>
                                          <tr>
                                             <td>keterangan</td>

                                             @if ($kelembapan<40) 
                                                <td>Kelembapan Rendah</td>
                                             @elseif ($kelembapan>60) 
                                                <td>Kelembapan Tinggi</td>
                                             @else 
                                                <td>Kelembapan Normal</td>
                                             @endif
                                          </tr>
                                          <tr>
                                               <td></td>
                                               @if ($ph < 6)
                                                <td>PH asam</td>    
                                             @elseif ($ph > 7) 
                                                <td>PH Basa</td> 
                                             @else 
                                                <td> PH Normal</td>
                                             @endif
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                           </div>
                           <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                           <div class="col-md">
                              <div class="card card-outline card-warning">
                                 <div class="card-header">
                                    <h3 class="card-title">Rekomendasi Perawatan</h3>
                                    <div class="card-tools">
                                       <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                       <i class="fas fa-minus"></i>
                                       </button>
                                    </div>
                                    <!-- /.card-tools -->
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-sm-2">
                                          <div class="description-block">
                                             <div class="widget-user-image img-right" >
                                                <img style="width: 100px; border-radius: 8px;" src="{{asset('public/asset/dist/img/pupuk1.jpg')}}" alt="User Avatar">
                                             </div>
                                          </div>
                                          <!-- /.description-block -->
                                       </div>
                                       <!-- /.col -->
                                       <div class="col-sm-9">
                                          <div class="description-block">
                                             <h5 class="description-header text-left">PH Asam</h5>
                                             <p class="text-justify">Jika PH terlalu asam silahkan melakukan pengolahan lahan Seperti Pemberian Pupuk untuk penetralan lahan seperti pemberian dulumit/mextril dicampur dengan humigrow serta air dengan perbandingan 2 kilogram dulumit dan 100cc humigrow + 20 liter airs. Pupuk dapat ditempatkan ditengah tengah antar tanaman Porang dengan menggali lubang dan memberikan pupuk diantaranya</p>
                                          </div>
                                          <!-- /.description-block -->
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-2">
                                          <div class="description-block">
                                             <div class="widget-user-image img-right" >
                                                <img style="width: 100px; border-radius: 8px;" src="{{asset('public/asset/dist/img/pupuk.jpg')}}" alt="User Avatar">
                                             </div>
                                          </div>
                                          <!-- /.description-block -->
                                       </div>
                                       <!-- /.col -->
                                       <div class="col-sm-9">
                                          <div class="description-block">
                                             <h5 class="description-header text-left">PH Basa</h5>
                                             <p class="text-justify">Jika PH terlalu asam silahkan melakukan pengolahan lahan Seperti Pemberian Pupuk untuk penetralan lahan seperti pemberian dulumit/mextril dicampur dengan humigrow serta air dengan perbandingan 2 kilogram dulumit dan 100cc humigrow + 20 liter airs. Pupuk dapat ditempatkan ditengah tengah antar tanaman Porang dengan menggali lubang dan memberikan pupuk diantaranya</p>
                                          </div>
                                          <!-- /.description-block -->
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-2">
                                          <div class="description-block">
                                             <div class="widget-user-image img-right" >
                                                <img style="width: 100px; border-radius: 8px;" src="{{asset('public/asset/dist/img/irigasi.jpg')}}" alt="User Avatar">
                                             </div>
                                          </div>
                                          <!-- /.description-block -->
                                       </div>
                                       <!-- /.col -->
                                       <div class="col-sm-9">
                                          <div class="description-block">
                                             <h5 class="description-header text-left">Kelembapan Tinggi</h5>
                                             <p class="text-justify">Silahkan Kurangi Kelembapan Air dengan meninggikan area tanaman atau membuat irigasi air Agar lahan tidak tergenang air ketika musim hujan atau ketika terkena aliran air berlebih</p>
                                          </div>
                                          <!-- /.description-block -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                              <!-- /.col -->
                           </div>
                        </div>
                     </div>
                     <!-- /.container-fluid -->
                     </section>
                  </section>
                  <!-- /.content -->
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
           "searching": false,
           "ordering": true,
           "info": true,
           "autoWidth": false,
           "responsive": true,
         });
      </script>

@endsection