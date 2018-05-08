<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.usersList', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      User::create([
      'name' => $request->input('name'),
      'surname' => $request->input('surname'),
      'country' => $request->input('country'),
      'role' => $request->input('role'),
      'email' => $request->input('email'),
      'password' => $request->input('password'),
      'date_of_birth' => $request->input('date-of-birth'),
      'phone_number' => $request->input('phone-number'),
      'city' => $request->input('city'),
      'country' => $request->input('country'),
      'zip_code' => $request->input('zip-code'),

    ]);
    return redirect()->route ('usersList')->with ('ZINUTE','USER SAVED');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      return view ('users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user->update([
      'name' => $request->input('name'),
      'surname' => $request->input('surname'),
      'country' => $request->input('country'),
      'role' => $request->input('role'),
      'email' => $request->input('email'),
      'password' => $request->input('password'),
      'date_of_birth' => $request->input('date-of-birth'),
      'phone_number' => $request->input('phone-number'),
      'city' => $request->input('city'),
      'country' => $request->input('country'),
      'zip_code' => $request->input('zip-code'),
    ]);
    return redirect()->route('usersList')->with('ZINUTE',"USER UPDATED");
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect()->route('usersList')->with('ZINUTE','Sekmingai istrinta');
    }
}
