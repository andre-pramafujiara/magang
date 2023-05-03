<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rules\Enum;

class BayiController extends Controller
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
            'nama_bayi' => 'required',
            'nik_ibu_kandung' => 'max:16|string',
            'no_rm' => 'required',
            'tgl_lahir_bayi' => 'required|max:255|date', // format: Y-m-d
            'jam_lahir_bayi' => 'required|string', // string
            'jk_bayi' => 'required|max:255|string', // string
            
            
            
        ]);

        $data = [
            'nama_bayi' => $request->nama_bayi,
            'nik_ibu_kandung' => $request->nik_ibu_kandung,
            'no_rm' => $request->no_rm,
            'tgl_lahir_bayi' => $request->tgl_lahir_bayi,
            'jam_lahir_bayi' => $request->jam_lahir_bayi,
            'jk_bayi' => $request->jk_bayi,
        ];

        Bayi::create($data);
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
