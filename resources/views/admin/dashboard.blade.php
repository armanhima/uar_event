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

<div class="col-xl-4 col-lg-5">
  @foreach ($event as $d)
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{$d -> namaEvent}}</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <img src="" alt="cerita sialku">
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fw-bold text-primary">{{$tiket}}</i>Tiket Terjual
                </span>
                <span class="mr-2">
                    <i class="text-success">{{$d->jumlahTiket}} </i> Tiket Tersisa
                </span>
            </div>
        </div>
    </div>
  @endforeach
</div>
@include('admin.layout.footer')