<?php

namespace App\Http\Controllers;
use App\Deal;
use Illuminate\Http\Request;


class dealsController extends Controller
{
        public function index()
    {
        $Deals= Deal::all();
        return view('admin.Deals',compact('Deals'));
    }


    public function index2()
    {
        $Deals= Deal::all();
        return view('Deals',compact('Deals'));
    }

    public function create()
    {
        return view('admin.CreateDeals');

        
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
         ]);
    
     Deal::create($validatedData);
           return redirect('/CreateDeal');
     }


 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
     public function edit(Deal $deal)
     {
         return view('admin.EditDeals',compact('deal'));
 
     }






 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Deal $deal)
     {
         $validatedData = request()->validate([
           'nom'=> ['required','min:'],
            'description'=> 'required',
            'prix'=> 'required',                
            'valeur'=> 'required',                
            'adresse'=> 'required',                
            'phone'=> 'required',   
             ]);
        
         $deal->update($validatedData);
         return redirect('/CreateDeal');

     }









     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {

            $deal->delete();
            return redirect('/DealsManagements');
        }

}
