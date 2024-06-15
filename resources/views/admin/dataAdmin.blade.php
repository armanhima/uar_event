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

<div class="mx-4">
  <button type="button" class="btn btn-warning my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Admin</button>
  <table id="example1" class="table table-bordered table-striped" style="text-align:center">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Email</th>
      <th>Telp</th>
      <th>Alamat</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <?php $no=0 ;?>
    <tbody>
    @foreach ($admin as $d)
      @if ($d->level === 'admin')
      <tr>
        <td><?php echo ++$no ?></td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->username }}</td>
        <td>{{ $d->email }}</td>
        <td>{{ $d->telp }}</td>
        <td>{{ $d->alamat }}</td>
        <td class="flex justify-center">
          <form class="px-2" action="/admin/deleteUser/{{ $d->id }}" method="POST">
              @csrf
              @method('DELETE')
              @if(session('success'))
                  <script>
                      alert("{{ session('success') }}");
                  </script>
              @endif
              <button type="submit" class="my-1 btn btn-danger btn-icon-split" onclick="return confirm('Anda yakin untuk menghapus Data Ini?')">
                  <span class="icon text-white-50">
                      <i class="fa-solid fa-trash"></i>
                  </span>
              </button>
          </form>
        </td>
      </tr>
      @endif
    @endforeach
    </tbody>
  </table>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            @csrf
            <div class="floating">
              <label for="inputusername">Nama</label>
              <input class="form-control" id="inputusername" type="text" name="name" placeholder="Nama">
            </div>
            <div class="floating">
              <label for="inputusername">Email</label>
              <input class="form-control" id="inputusername" type="text" name="email" placeholder="Email">
            </div>
            <div class="floating">
              <label for="inputusername">Username</label>
              <input class="form-control" id="inputusername" type="text" name="username" placeholder="Username">
            </div>
            <div class="floating">
              <label for="inputusername">Password</label>
              <input class="form-control" id="inputusername" type="password" name="password" placeholder="Password">
            </div>
            <div class="floating">
              <label for="inputusername">No Telepon</label>
              <input class="form-control" id="inputusername" type="text" name="telp" placeholder="No Telepon">
            </div>
            <div class="floating">
              <label for="inputusername">Alamat</label>
              <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
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
</div>
@include('admin.layout.footer')