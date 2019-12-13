<?php

namespace App\Http\Controllers;
use App\ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $Tickes= ticket::all();
        return view('admin.Tickets',compact('Tickes'));
    }


  /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {       
      return view('DetailTicket',compact('ticket'));
    }


    public function ListeTikets()
    {
        $Tickets= ticket::all();
        return view('ListeTicket',compact('Tickets'));
    }

    public function create()
    {
        return view('admin.CreateTickets');
       
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $validatedData = request()->validate([
             'nom'=> ['required','min:'],
             'description'=> 'required',
             'prix'=> 'required',                
             'valeur'=> 'required',                
             'adresse'=> 'required',                
             'phone'=> 'required',                
             'date'=> 'required',                
             'Horaire'=> 'required',                
         ]);
    
     ticket::create($validatedData);
           return redirect('/TiketsManagements');
     }


 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
     public function edit(ticket $ticket)
     {
         return view('admin.EditTicket',compact('ticket'));
 
     }






 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, ticket $ticket)
     {
         $validatedData = request()->validate([
           'nom'=> ['required','min:'],
            'description'=> 'required',
            'prix'=> 'required',                
            'valeur'=> 'required',                
            'adresse'=> 'required',                
            'phone'=> 'required',   
            'date'=> 'required',   
            'Horaire'=> 'required',   
             ]);
        
         $ticket->update($validatedData);
         return redirect('/TiketsManagements');

     }









     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {       $ticket->delete();
            return redirect('/TiketsManagements');
        }

}



