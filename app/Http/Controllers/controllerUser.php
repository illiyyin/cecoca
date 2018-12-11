<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\ModelUser;

class controllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //namamodel
        $data = ModelUser::all();
        return view('user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
       
       $data = new ModelUser();
       $data ->id_user = rand(1000,9999);
        $data->username = $request->userUname;
        $data->email = $request->userEmail;
        $data->date = $request->userBirth;
        $data->phone_number = $request->userPnumber;
        $data->password = $request->userPw;
        $data->address = $request->userAddress;
        $data->save();
        return view('login');
   
    
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
        $data = ModelUser::where('id',$id)->first();
        return view('user_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = ModelUser::where('id',$id)->first();
        $data->username = $request->input('userUname');
        $data->save();
        return redirect()->route('user.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelUser::where('id',$id)->first();
        if($data->delete()){
            return redirect()->route('user.index')->with('alert-success','Data berhasi dihapus!');    }
    
        }
    }
