<?php

namespace App\Http\Controllers;

use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        return view('content.ticket.table');
    }

    public function create()
    {
        return view('content.ticket.form', [
            'ticket' => new Ticket(),
        ]);
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);

        return view('content.ticket.form', [
            'ticket' => $ticket,
        ]);
    }
}
