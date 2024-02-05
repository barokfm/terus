<?php

namespace App\Http\Controllers;

use App\Form_peminjam;
use Illuminate\Http\Request;

class FormPeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = Form_peminjam::all();
        return view('formulir', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
;
        // dd($request->all());
        $this->validate($request, [
            'name'=>'required',
            'pekerjaan'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'keperluan'=>'required',
            'tgl_acara'=>'required',
            'waktu'=>'required',
            'no_ktp'=>'required',
            'foto_ktp' =>'',
        ]);

        // store image
        // $image = $request->file('image');
        // $image->storeAs('public/peminjam', $image->hashName());

        Form_peminjam::create([
            'name'=> $request->name,
            'pekerjaan'=> $request->pekerjaan,
            'alamat'=> $request->alamat,
            'no_hp'=> $request->no_hp,
            'keperluan'=> $request->keperluan,
            'tgl_acara'=> $request->tgl_acara,
            'waktu'=> $request->waktu,
            'no_ktp'=> $request->no_ktp,
            'foto_ktp'=>$request->foto_ktp,
        ]);

        return redirect('formulir')->withSuccess('Data Berhasil disimpan!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form_peminjam  $form_peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Form_peminjam $form_peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form_peminjam  $form_peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Form_peminjam $form_peminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form_peminjam  $form_peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form_peminjam $form_peminjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form_peminjam  $form_peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_peminjam $form_peminjam)
    {
        //
    }
}
