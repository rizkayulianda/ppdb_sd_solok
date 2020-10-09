<!DOCTYPE html>
<html>
<head>
    @include('header')
    <title>PPDB SD Solok - Beranda</title>
</head>
<body id="page-top">
  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="@auth{{ url('/home') }}@else#page-top @endauth">
          <img src="/img-home/tuwh.png" width="30" height="30" class="mr-2">
          PPDB SD Solok
        </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#siswa">Siswa</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#ortu">Orang Tua</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sekolah">Sekolah</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#pengumuman">Pengumuman</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ Route('logout') }}">Logout</a></li>
            @else
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('login') }}">Login</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('register') }}">Register</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('loginop') }}">Operator</a></li>
            @endauth
            <ul>
        </div>
    </div>
  </nav>
  {{-- /navbar --}}
  <section class="page-section mt-4 bg-primary" >
    <div class="container bg-white p-5 rounded-lg" id="siswa">
      <div class="row align-items-center mb-5 p-3" >
        <div class="col-lg-7">
          <h1 class="font-weight-light">Data siswa</h1>
          <p> Daftarkan calon siswa, data kesehatan calon siswa dan pilih sekolah untuk mandaftarkan calon siswa</p>
          <a href="{{url('/calon_siswa')}}" class="btn btn-primary btn-xl"> Selengkapnya</a>
          </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-5">
          <img class="img-fluid" src="/assets/img/siswa.svg" >
        </div>
        <!-- /.col-md-6 -->
      </div>
      <div class="row align-items-center mb-75 p-3" id="ortu">
        <div class="col-lg-5">
          <img class="img-fluid" src="/assets/img/backtoschool.svg" >
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-7">
          <h2 class="font-weight-light">Data Orang Tua/Wali siswa</h2>
          <p> Personalisasi data orang tua calon siswa disini</p>
          <a href="{{url('/ortu/detail')}}" class="btn btn-primary btn-xl"> Selengkapnya</a>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <div class="row align-items-center mb-5 p-3" id="sekolah">
        <div class="col-lg-7">
          <h1 class="font-weight-light">Data Sekolah</h1>
          <p> List daftar sekolah dasar negeri kabupaten solok</p>
          <a href="{{url('/sekolah')}}" class="btn btn-primary btn-xl"> Selengkapnya</a>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-5">
          <img class="img-fluid" src="/assets/img/gedung.svg" >
        </div>
        <!-- /.col-md-6 -->
      </div>
      <div class="row align-items-center mb-5 p-3" id="pengumuman">
        <div class="col-lg-5">
          <img class="img-fluid" src="/assets/img/info.svg" >
          </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-7">
          <h1 class="font-weight-light">Pengumuman</h1>
          <p> Daftarkan data calon siswa, kesehatan calon siswa dan pilih sekolah untuk calon siswa</p>
          <a href="{{url('/pengumuman/cari')}}" class="btn btn-primary btn-xl"> Selengkapnya</a>
        </div>
        <!-- /.col-md-6 -->
      </div>
      
    </div>
	</section>
	@include('footer')
</body>
</html>