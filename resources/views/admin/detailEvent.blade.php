@include('admin.layout.header')
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="fs-4 fw-semibold">Aplikasi Event</div>
</nav>
<!-- End of Topbar -->

    <div class="container">
        <h1>{{ $event->namaEvent }}</h1>
        <p>{{ $event->deskripsi }}</p>
        
        <p>Tiket Terjual: {{ $jumlahTiketTerjual }}</p>
        <p>Tiket Tersisa: {{ $jumlahTiketTersisa }}</p>
    </div>
@include('admin.layout.footer')