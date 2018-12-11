<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPenyedia;

class controllerPenyedia extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //namamodel
        $data = ModelPenyedia::all();
        return view('penyedia', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyedia_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new ModelPenyedia();
       $data ->id_penyedia = rand(100000,1001238912);
        $data->nama_penyedia = $request->namaPenyedia;

        $data->save();
        return redirect()->route('penyedia.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelPenyedia::where('id',$id)->first();
        return view('penyedia_edit',compact('data'));
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
        $data = ModelPenyedia::where('id',$id)->first();
        $data->nama_penyedia = $request->input('namaPenyedia');
        $data->save();
        return redirect()->route('penyedia.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPenyedia::where('id',$id)->first();
        if($data->delete()){
            return redirect()->route('user.index')->with('alert-success','Data berhasi dihapus!');    }
    
        }}
