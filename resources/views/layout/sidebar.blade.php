<aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
            <img src="{{asset ('public/asset/dist/img/porasiti.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Porasiti</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="{{asset('public/asset/dist/img/husnul.jpg')}}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                  </div>
               </div>
               <nav class="mt-2">
   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
   <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
   <li class="nav-item">
      <a href="{{url('/riwayat_lahan')}}"  class="nav-link">
         <i class="nav-icon fas fa-table"></i>
         <p>
            Riwayat Lahan
         </p>
      </a>
   </li>
   <li class="nav-item">
   <a href="{{url('/notifikasi')}}" class="nav-link">
         <i class="nav-icon fas fa-bell"></i>
         <p>
            Notifikasi
         </p>
      </a>
   </li>
   <li class="nav-item">
      <a href="{{url('/profile')}}" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
         <p>
            Profil
         </p>
      </a>
   </li>
</nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>