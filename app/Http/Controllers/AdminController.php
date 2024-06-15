<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\tiket;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        $event = event::get();
        $tiket = tiket::count();
        return view('admin.dashboard',compact('event','tiket'),['tiket' => $tiket]);
}
    function event(){
        $event = event::get();
        $tiket = tiket::count();
        return view('admin.event',compact('event','tiket'),['tiket' => $tiket]);
}
    function dataAdmin(){
        $admin = User::get();
        return view('admin.dataAdmin',compact('admin'));
    }

    function tambahEvent(Request $request): RedirectResponse {
        $this->validate($request, [
            'namaEvent' => 'required',
            'bintangTamu' => 'required',
            'tgl' => 'required',
            'tempat' => 'required',
            'waktu' => 'required',
            'jumlahTiket' => 'required',
            'harga' => 'required',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required'
        ]);
        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/image', $image->hashName());
        event::create([
            'namaEvent' => $request->namaEvent,
            'bintangTamu' => $request->bintangTamu,
            'tgl' => $request->tgl,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
            'jumlahTiket' => $request->jumlahTiket,
            'harga' => $request->harga,
            'gambar'     => $image->hashName(),
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/admin/event');
    }

    public function detailEvent(Request $request, $namaEvent)
    {
        // Cari event berdasarkan nama event
        $event = Event::where('namaEvent', $namaEvent)->first();
        
        // Jika event tidak ditemukan, kembalikan response atau redirect yang sesuai
        if (!$event) {
            return redirect()->route('event.list')->with('error', 'Event not found');
        }

        // Hitung jumlah tiket yang terjual berdasarkan nama event
        $jumlahTiketTerjual = Tiket::where('namaEvent', $namaEvent)->count(); // Hitung jumlah tiket terjual
        
        // Ambil jumlah tiket yang tersedia dari tabel event, jika disimpan di sana
        $jumlahTiketTersedia = $event->jumlahTiket; // Misalnya jumlah tiket tersedia disimpan di kolom jumlahTiket di tabel event
        $jumlahTiketTersisa = $jumlahTiketTersedia - $jumlahTiketTerjual; // Hitung tiket tersisa

        return view('admin.detailEvent', compact('event', 'jumlahTiketTerjual', 'jumlahTiketTersisa'));
    }
      // ini pak controller buat bikin pesanannya
    public function Tampil()
    {
        $ticket = \App\Models\event::first();
        return view('admin.tiket', compact('ticket'));
    }

    public function addTicket()
    {
        $ticket = Admin::firstOrFail();
        $ticket->quantity += 1; 
        $ticket->price = 10;
        $ticket->save();

        return redirect()->route('admin.tiket');
    }
    // ini pak controller buat bikin pesanannya viewnya di admin/tiket

}