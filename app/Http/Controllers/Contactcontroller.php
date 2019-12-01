<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class Contactcontroller extends Controller
{

    
    public function index()
    {
        $Messages= Message::all();
        return view('admin.ListeMessages',compact('Messages'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {       
            // return $car;
      return view('admin.ShowMessage',compact('message'));
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
            'name'=> ['required','min:'],
            'email'=> 'required',
            'subject'=> 'required',                
            'message'=> 'required'             
                          
        ]);
   
   if( Message::create($validatedData))
          return redirect('/');
    else
    return redirect('/contactus');

    }
}
