
<h1>Tiket</h1>
<p>Harga: {{ $ticket->price }}</p>
<p>Jumlah:  {{ $ticket->quantity }}</p>

<form action="{{ route('admin.tiket') }}" method="post">
    @csrf
    <button type="submit">Tambah Tiket</button>
</form>
