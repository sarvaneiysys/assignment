<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterUsers;
use Redirect;

class RegisterUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RegisterUsers::all();
        return view('/userlist')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registeruser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $registerUser = new RegisterUsers;
        $registerUser->name = $request->name;
        $registerUser->email = $request->email;

        if($request->file('photo') != ''){
            $image = $request->file('photo');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());

            $registerUser->photo = $image->getClientOriginalName();
        }
        $registerUser->save();
        return redirect('/listregisterusers');
        
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
    public function edit($id)
    {
        //
        $data = RegisterUsers::find($id);
        return view('/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = RegisterUsers::find($request->recordid);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('photo') != ''){
            $image = $request->file('photo');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());

            $data->photo = $image->getClientOriginalName();
        }
        $data->save();

        return redirect('/listregisterusers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = RegisterUsers::find($id)->delete();
        return redirect('/listregisterusers');
 

    }
}
