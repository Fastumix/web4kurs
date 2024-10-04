<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getTickets(){
        $ticket = Ticket::all();
        return response()->json($ticket);
    }


    public function getTicketById($id){
        $ticket = Ticket::findOrFail($id);
        return response()->json($ticket);
    }


    public function addTicket(Request $request){
        $validateData = $request->validate([
            'title' => 'required|string|max:30',
            'price' => 'required|numeric|min:0',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'event_id' => 'required|exists|event,event_id'
        ]);

        $ticket = Ticket::create();
        return response()->json($ticket, 201);
    }


    public function removeTicket(Request $request){
        $ticket = Ticket::remove($id);
        return response()->json($ticket, 204);
    }

    public function updateTicket(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required|string|max:30',
            'price' => 'required|numeric|min:0',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'event_id' => 'required|exists|event,event_id',
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($validateData);
        return response()->json($ticket, 200);
    }
}
