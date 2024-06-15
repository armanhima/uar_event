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
    @foreach ($user as $d)
      @if ($d->level === 'user')
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
</div>
@include('admin.layout.footer')