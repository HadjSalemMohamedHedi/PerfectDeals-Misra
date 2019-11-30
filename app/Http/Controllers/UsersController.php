<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $Users= User::all();
        return view('admin.Users',compact('Users'));
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
                         
        ]);
   
    User::create($validatedData);
          return redirect('/UsersManagements');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.EditUsers',compact('user'));

    }





 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = request()->validate([
          'name'=> ['required','min:'],
           'email'=> 'required',
              ]);
       
        $user->update($validatedData);
        return redirect('/UsersManagements');
    }


/**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
            $user->delete();
            return redirect('/UsersManagements');
        }


}
