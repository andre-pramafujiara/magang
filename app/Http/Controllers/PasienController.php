<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $data = Pasien::orderBy('id','asc')->paginate(5);
        return view('pasien.index')->with('datapasien', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
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
            'nama_pasien' => 'required',
            'kewarganegaraan' => 'required|max:255|string',
            'nik' => 'max:16|string',
            'no_passport' => 'max:255|string',
            'jenis_kelamin' => ['required', new Enum(Gender::class)],
            'tempat_lahir' => 'required|max:255|string', // string
            'tanggal_lahir' => 'required|max:255|date', // format: Y-m-d
            'umur' => 'required|max:3|integer', // integer dihitung tgl sekarang - tgl lahir
            'telepon' => 'required|string|regex:/^[0-9]{6,15}$/', // string, regex: /^[0-9]{6,15}$/
            'nowa'=> 'required|string|regex:/^[0-9]{6,15}$/', // string, regex: /^[0-9]{6,15}$/
            'status' => ['required',new Enum(Status::class)], // new Enum(Status::class)
            'agama' => 'required|exists:agamas,id', // in: agama
            'pendidikan' => 'nullable|required|string', // in: pendidikan
            'pekerjaan' => 'nullable|required|string', // in: pekerjaan
            'suku' => 'nullable|required|string', //in :  suku
            'bahasa' => 'nullable|required|string', // in: bahasa
            'alamat_ktp' => 'required|max:255|string', // string
            'provinsi_ktp' => 'required|max:255|string', // string
            'kabupaten_ktp' => 'required|max:255|string', // string
            'kecamatan_ktp' => 'required|max:255|string', // string
            'kelurahan_ktp' => 'required|max:255|string', // string
            'rw_ktp' => 'nullable|max:10|string', // string
            'rt_ktp' => 'nullable|max:10|string', // string
            'kode_pos_ktp' => 'nullable|integer', // integer
            'alamat_domisili' => 'nullable|required|max:255|string',
            'provinsi_domisili' => 'nullable|required|max:255|string',
            'kabupaten_domisili' => 'nullable|required|max:255|string',
            'kecamatan_domisili' => 'nullable|required|max:255|string',
            'kelurahan_domisili' => 'nullable|required|max:255|string',
            'rw_domisili' => 'nullable|max:10|string',
            'rt_domisili' => 'nullable|max:10|string',
            'kode_pos_domisili' => 'nullable|integer',
            'nama_ayah' => 'nullable|required|string', // string
            'nama_ibu' => 'nullable|required|string', // string
            'suami_istri' => 'nullable|required|string', // string
            'asuransi' => 'nullable|required|string', // in: asuransi
            'no_asuransi' => 'nullable|required|string', // string
            
        ]);

        $data = [
            'nama_pasien' => $request->nama_pasien,
            'kewarganegaraan' => $request->kewarganegaraan,
            'nik' => $request->nik,
            'no_passport' => $request->no_passport,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
            'telepon' => $request->telepon,
            'nowa' => $request->nowa,
            'status' => $request->status,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'suku' => $request->suku,
            'bahasa' => $request->bahasa,
            'alamat_ktp' => $request->alamat_ktp,
            'provinsi_ktp' => $request->provinsi_ktp,
            'kabupaten_ktp' => $request->kabupaten_ktp,
            'kecamatan_ktp' => $request->kecamatan_ktp,
            'kelurahan_ktp' => $request->kelurahan_ktp,
            'rw_ktp' => $request->rw_ktp,
            'rt_ktp' => $request->rt_ktp,
            'kode_pos_ktp' => $request->kode_pos_ktp,
            'alamat_domisili' => $request->alamat_domisili,
            'provinsi_domisili' => $request->provinsi_domisili,
            'kabupaten_domisili' => $request->kabupaten_domisili,
            'kecamatan_domisili' => $request->kecamatan_domisili,
            'kelurahan_domisili' => $request->kelurahan_domisili,
            'rw_domisili' => $request->rw_domisili,
            'rt_domisili' => $request->rt_domisili,
            'kode_pos_domisili' => $request->kode_pos_domisili,
            'nama_ayah' => $request->input('nama_ayah', ' '),
            'nama_ibu' => $request->input('nama_ibu', ' '),
            'suami_istri' => $request->input('suami_istri', null),
            'asuransi' => $request->asuransi,
            'no_asuransi' => $request->input('no_asuransi', null),
           
        ];

        Pasien::create($data);
        return redirect()->to('pasien')->with('success', 'Berhasil menamphkan data ');

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

        Pasien::where('id', $id)->delete();

        return redirect()->to('pasien')->with('success', 'Berhasil menghapus data ');
    }
}
