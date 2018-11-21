<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelHotel;

class controllerHotel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //namamodel
        $data = ModelHotel::all();
        return view('hotel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new ModelHotel();
       $data ->id_hotel = rand(10000,99999);
        $data->nama_hotel = $request->namaHotel;
        $file = $request-> file('file');
        $ext=$file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->bintang_hotel = $request->bintangHotel;
        $data->kota_hotel = $request->kotaHotel;
        $data->save();
        return redirect()->route('hotel.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelHotel::where('id',$id)->first();
        return view('hotel_edit',compact('data'));
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
        $data = ModelHotel::where('id',$id)->first();
        $data->nama_hotel = $request->input('namaHotel');
        if(empty($request->file('file'))){
            $data->file = $data->file;
        }else{
            unlink('uploads/file/'.$data->file);
            $file = $request->file('file');
            $ext=$file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->file = $newName;
        }
        $data->bintang_hotel = $request->input('bintangHotel');
        $data->kota_hotel = $request->input('kotaHotel');
        $data->save;
        return redirect()->route('hotel.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelHotel::where('id',$id)->first();
        if($data->delete()){
            unlink('uploads/file/'.$data->file);
        }
        return redirect()->route('hotel.index')->with('alert-success','Data berhasi dihapus!');    }
}
