<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelHarga;


class controllerHarga extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //namamodel
        $data = ModelHarga::all();
        return view('harga', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $hostname = "localhost";
        // $username = "root";
        // $password = "";
        // $databaseName = "cecoca";
        // $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        
        return view('harga_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new ModelHarga();
       $data ->id_harga = rand(100000,999999);
       $data ->nama_penyedia = $request->namaPenyedia;
        $data->nama_hotel = $request->namaHotel;
        $data->harga_hotel = $request->hargaHotel;
        $data->save();
        return redirect()->route('harga.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelHarga::where('id',$id)->first();
        return view('harga_edit',compact('data'));
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
        $data = ModelHarga::where('id',$id)->first();
        $data ->nama_penyedia = $request->input('namaPenyedia');
        $data->nama_hotel = $request->input('namaHotel');
        $data->harga_hotel = $request->input('hargaHotel');
        $data->save();
        return redirect()->route('harga.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelHarga::where('id',$id)->first();
        
        return redirect()->route('harga.index')->with('alert-success','Data berhasi dihapus!');    }
}
