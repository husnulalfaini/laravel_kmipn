@extends('layout.master')
@section('content')
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md">
            <div class="card card-white">
               <div class="card-header ">
                  <h3 class="card-title">Tambah Ketua</h3>
               </div>
               <div class="card-body">
                  <!-- Nama -->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text "><i class="far fa-user"></i></span>
                        </div>
                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Email -->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Password -->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Re Password -->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Re Password">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- phone mask -->
                  <div class="form-group ">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="088xxxxxxx">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!--Ketua Kelompok -->
                  <div class="form-group ">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ketua Kelompok">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Alamat-->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                        <!-- /.input group -->
                     </div>
                  </div>
                  <!-- /.form group -->
                  <div class="col-md-2 offset-md-5 text-center">
                     <!-- small box -->
                     <a href="#" class="text-light">
                        <div class="small-box bg-success">
                           <div class="inner">
                              Tambah
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
      </div>
   </div>
</section>
<!-- /.content -->
<!-- jQuery -->
<script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@endsection

