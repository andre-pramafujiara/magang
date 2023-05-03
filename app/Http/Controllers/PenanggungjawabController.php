<?php

namespace App\Http\Controllers;

use App\Models\Penaggungjawab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rules\Enum;

class PenanggungjawabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'nama_pen_jaw' => 'required',
            'alamat' => 'required|max:255|string', // string
            'provinsi' => 'required|max:255|string', // string
            'kabupaten' => 'required|max:255|string', // string
            'kecamatan' => 'required|max:255|string', // string
            'kelurahan' => 'required|max:255|string', // string
            'rw' => 'nullable|max:10|string', // string
            'rt' => 'nullable|max:10|string', // string
            'kode_pos' => 'nullable|integer', // integer
            'negara' => 'nullable|max:10|string', // string
            'tel_pen_jaw' => 'required|string|regex:/^[0-9]{6,15}$/', // string, regex: /^[0-9]{6,15}$/
            'hub_dg_pas' => 'required|max:255|string',
            
        ]);

        $data = [
            'nama_pen_jaw' => $request->nama_pasien,
            'alamat_ktp' => $request->alamat_ktp,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'kode_pos' => $request->kode_pos,
            'negara' => $request->negara,
            'tel_pen_jaw' => $request->tel_pen_jaw,
            'hub_dg_pas' => $request->hub_dg_pas,
        ];

        Penaggungjawab::create($data);

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
