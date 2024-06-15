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

<button type="button" class="btn btn-warning my-3 mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Event</button>

<div class="d-flex justify-content-center flex-wrap">
  @foreach ($event as $d)
  <a href="/admin/event/{{ $d->namaEvent }}">
    <div class="card shadow mb-4 mx-2" style="width: 18rem;">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{$d -> namaEvent}}</h6>
        </div>
        <!-- Card Body -->
          <div class="card-body">
              <img src="{{ asset('storage/image/' . $d->gambar) }}" alt="" class="w-100 rounded">
          </div>
        </div>
        @endforeach
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/tambahEvent" method="post" enctype="multipart/form-data">
            @csrf
            <div class="floating">
              <label for="inputusername">Nama Event</label>
              <input class="form-control" id="inputusername" type="text" name="namaEvent" placeholder="Nama Event">
            </div>
            <div class="floating">
              <label for="inputusername">Talent</label>
              <input class="form-control" id="inputusername" type="text" name="bintangTamu" placeholder="Talent">
            </div>
            <div class="floating">
              <label for="inputusername">Tanggal Event</label>
              <input class="form-control" id="inputusername" type="date" name="tgl" placeholder="Tanggal Event">
            </div>
            <div class="floating">
              <label for="inputusername">Venue</label>
              <input class="form-control" id="inputusername" type="text" name="tempat" placeholder="Venue">
            </div>
            <div class="floating">
              <label for="inputusername">Waktu</label>
              <input class="form-control" id="inputusername" type="text" name="waktu" placeholder="Waktu">
            </div>
            <div class="floating">
              <label for="inputusername">Jumlah Tiket</label>
              <input class="form-control" id="inputusername" type="text" name="jumlahTiket" placeholder="Jumlah Tiket">
            </div>
            <div class="floating">
              <label for="inputusername">Price</label>
              <input class="form-control" id="inputusername" type="text" name="harga" placeholder="Price">
            </div>
            <div class="floating">
              <label for="inputusername">Image</label>
              <input class="form-control" id="inputusername" type="file" name="gambar" placeholder="Image">
            </div>
            <div class="floating">
              <label for="inputusername">Description</label>
              <textarea class="form-control" id="inputusername" type="text" name="deskripsi" placeholder="Description"></textarea>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid"><input type="submit" class="bg-blue-500 btn btn-primary btn-block"></input></div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@include('admin.layout.footer')