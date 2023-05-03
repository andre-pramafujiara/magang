<?php

namespace App\Http\Controllers;

use App\Models\PasienB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rules\Enum;

class PasienbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'pasien_b';
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
        $validator = Validator::make($request->all(), [
            'nama_pas_td' => 'required',
            'perkiraan_umur' => 'required|max:255|string', // string
            'lokasi_temu' => 'required|max:255|string', // string
            'tgl_temu' => 'required|max:255|date', // format: Y-m-d
            'id_pen_jaw' => 'required|max:255|string', // string
            'id_peng' => 'required|max:255|string', // string
            'id_bbl' => 'nullable|max:10|string', // string
            
        ]);

        $data = [
            'nama_pas_td' => $request->nama_pas_td,
            'perkiraan_umur' => $request->perkiraan_umur,
            'lokasi_temu' => $request->lokasi_temu,
            'tgl_temu' => $request->tgl_temu,
            'id_pen_jaw' => $request->id_pen_jaw,
            'id_peng' => $request->id_peng,
            'id_bbl' => $request->id_bbl,
        ];

        PasienB::create($data);
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
