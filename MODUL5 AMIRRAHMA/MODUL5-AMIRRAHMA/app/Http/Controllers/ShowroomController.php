<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcar()
    {
        return view('pages.Add-Amirrahma');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $showrooms = Showroom::all();
        return view('pages.ListCar-Amirrahma', ['showrooms' => $showrooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $move_gambar = $request->file('foto');
        $move_gambar->move(public_path('asset'), $move_gambar->getClientOriginalName());
        $store = new Showroom;
        $store->name = $request->mobil;
        $store->owner = $request->nama;
        $store->brand = $request->merk;
        $store->purchase_date = $request->tanggal;
        $store->description = $request->deskripsi;
        $store->image = $request->foto->getClientOriginalName();
        $store->status = $request->statusbayar;
        $store->save();
        return redirect()->route('insertmobil.index')->with('success', 'Berhasil ditambahkan');
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
        //
    }
}
