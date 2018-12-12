<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\ModelPesan;

class controllerPesan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //namamodel
        $data = ModelPesan::all();
        return view('pesan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
       
       $data = new ModelPesan();
       $data ->id_pesanan = rand(1000,9999);
        $data->nama_pemesan = $request->pesanNama;
        $data->email_pemesan = $request->pesanEmail;
        $data->nohp_pemesan = $request->pesanNoHp;
        $data->hotel_pesanan = $request->pesanHotel;
        $data->penyedia_pesanan = $request->pesanPenyedia;
        $data->checkin = $request->checkIn;
        $data->checkout = $request->checkOut;
        $data->save();
        return view('dashboard');
   
    
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModePesan::where('id',$id)->first();
        if($data->delete()){
            return redirect()->route('pesan.index')->with('alert-success','Data berhasi dihapus!');    }
    
        }
    }
