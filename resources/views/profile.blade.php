

@extends('layout.master')
@section('header')
Monitoring Petani
@endsection
@section('content')
<section class="content">
   <div class="container-fluid">
      <div class="col-md-12">
      @foreach($profil as $item)
         <!-- Widget: user widget style 1 -->
         <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info"
               style="background: url('public/asset/dist/img/view.jpg') center center;">
            </div>
            <div class="widget-user-image" >
               <img class="img-circle elevation-2" style="width: 110px;" src="{{asset('public/asset/dist/img/husnul.jpg')}}" alt="User Avatar">
            </div>
            <div class="card-footer">
               <div class="row">
               </div>
            </div>
            <!-- /.widget-user -->
         </div>
      </div>
         <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
               <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="card-footer">
                  <div class="row">
                     <div class="col-sm-2 border-right">
                        <div class="description-block">
                           <h5 class="description-header">Kelompok Tani</h5>
                           <span class="description-text">{{$item->kelompok}}</span>
                        </div>
                        <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-2 border-right">
                        <div class="description-block">
                           <h5 class="description-header">Alamat</h5>
                           <span class="description-text">{{$item->alamat}}</span>
                        </div>
                        <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-4">
                        <div class="description-block">
                           <h5 class="description-header">Nama</h5>
                           <span class="description-text">{{$item->name}}</span>
                        </div>
                        <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-2 border-left">
                        <div class="description-block">
                           <h5 class="description-header">Email</h5>
                           <span class="description-text">{{$item->email}}</span>
                        </div>
                        <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-2 border-left">
                        <div class="description-block">
                           <h5 class="description-header">Telepon</h5>
                           <span class="description-text">{{$item->telepon}}</span>
                        </div>
                        <!-- /.description-block -->
                     </div>
                  </div>
                  <!-- /.row -->
               </div>
            </div>
            <!-- /.widget-user -->
            
            @endforeach
         </div>  
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            </div>
            </div>         
   </section>
<script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@endsection

