<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiketevent extends Controller
{
    public function show()
    {
        $ticket = Ticket::first(); // Ambil tiket pertama dari database
        return view('admin.tiket', compact('ticket'));
    }

    public function addTicket()
    {
        $ticket = Ticket::first();
        $ticket->quantity += 1; 
        $ticket->price = Harga ;
        $ticket->save();

        return redirect()->route('admin.tiket');
    }
}
