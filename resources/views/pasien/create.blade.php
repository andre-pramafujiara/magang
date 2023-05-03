@extends('layouts.main')

@section('container')
<h2 class="text-center">FORM PENGINPUTAN DATA PASIEN</h2>
<!-- START FORM -->
<form action ="{{ url('pasien') }}" method='post'>
@csrf
    <div class="my-0.5 p-5 bg-body rounded shadow-sm">
        <a href="{{ url('pasien') }}" class="btn btn-warning mb-2">Kembali</a>

        <div class="mb-3 row">
            <label for="no_rm" class="col-sm-2 col-form-label">No RM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='no_rm' id="no_rm">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_pasien' id="nama_pasien">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kewarganegaraan' id="kewarganegaraan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nik' id="nik">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="no_passport" class="col-sm-2 col-form-label">No Passport</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='no_passport' id="no_passport">
            </div>
        </div>
       
       
        <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            {{-- <div class="col-sm-10">
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">--Pilih Jnis Kelamin--</option>
                    <option value="0">Perempuan</option>
                    <option value="1">Laki-Laki</option>						
                </select>
            </div> --}}
             
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jenis_kelamin' id="jenis_kelamin">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tempat_lahir' id="tempat_lahir">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal_lahir' id="tanggal_lahir">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="numerik" class="form-control" name='umur' id="umur">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='telepon' id="telepon">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nowa" class="col-sm-2 col-form-label">No WA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nowa' id="nowa">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Status Perkawinan</label>
            <div class="col-sm-10">
                {{-- <select name="status" id="status" class="form-control" required>
                    <option value="">--Pilih Status Pernikahan--</option>
                    <option value="menikah">Menikah</option>
                    <option value="belum menikah">Belum Menikah</option>						
                </select> --}}
                <input type="text" class="form-control" name='status' id="status">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="religion" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                {{-- <select name="religion" id="religion" class="form-control" required>
                    <option value="">--Pilih Agama--</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>						
                </select> --}}
                <input type="text" class="form-control" name='agama' id="agama">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pendidikan' id="pendidikan">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pekerjaan' id="pekerjaan">
            </div>
        </div>
       
        <div class="mb-3 row">
            <label for="suku" class="col-sm-2 col-form-label">suku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='suku' id="suku">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="bahasa" class="col-sm-2 col-form-label">bahasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='bahasa' id="bahasa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat_ktp" class="col-sm-2 col-form-label">Alamat KTP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat_ktp' id="alamat_ktp">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="provinsi_ktp" class="col-sm-2 col-form-label">Provinsi_ktp</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="provinsi_ktp" name="provinsi_ktp">
                    <option value="">--Pilih Provinsi_ktp--</option>
                    @foreach ($provinces as $provinsi_ktp)
                        <option value="{{ $provinsi_ktp->id }}">{{ $provinsi_ktp->name }}</option>
                    @endforeach
                </select> --}}
                <input type="text" class="form-control" name='provinsi_ktp' id="provinsi_ktp">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kabupaten_ktp" class="col-sm-2 col-form-label">Kabupaten_ktp/Kota</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="kabupaten_ktp" name="kabupaten_ktp">
                    <option value="">--Pilih Kabupaten_ktp/Kota--</option>
                    
                </select> --}}
                <input type="text" class="form-control" name='kabupaten_ktp' id="kabupaten_ktp">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kecamatan_ktp" class="col-sm-2 col-form-label">Kecamatan_ktp</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="kecamatan_ktp" name="kecamatan_ktp">
                    <option value="">--Pilih Kecamatan_ktp--</option>
                </select> --}}
                <input type="text" class="form-control" name='kecamatan_ktp' id="kecamatan_ktp">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kelurahan_ktp" class="col-sm-2 col-form-label">Desa/Kelurahan_ktp</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="kelurahan_ktp" name="kelurahan_ktp">
                    <option value="">--Pilih Kel/Desa--</option>
                </select> --}}
                <input type="text" class="form-control" name='kelurahan_ktp' id="kelurahan_ktp">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="rw_ktp" class="col-sm-2 col-form-label">RW_ktp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='rw_ktp' id="rw_ktp">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="rt_ktp" class="col-sm-2 col-form-label">RT_ktp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='rt_ktp' id="rt_ktp">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kode_pos_ktp" class="col-sm-2 col-form-label">Kode Pos</label>
            <div class="col-sm-10">
                <input type="numerik" class="form-control" name='kode_pos_ktp' id="kode_pos_ktp">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat_domisili" class="col-sm-2 col-form-label">Alamat Domisili</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat_domisili' id="alamat_domisili">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="provinsi_domisili" class="col-sm-2 col-form-label">Provinsi Domisili</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="provinsi_domisili" name="provinsi_domisili">
                    <option value="">--Pilih Provinsi_domisili--</option>
                    @foreach ($provinces as $provinsi_domisili)
                        <option value="{{ $provinsi_domisili->id }}">{{ $provinsi_domisili->name }}</option>
                    @endforeach
                </select> --}}
                <input type="text" class="form-control" name='provinsi_domisili' id="provinsi_domisili">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kabupaten_domisili" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="kabupaten_domisli" name="kabupaten_domisli">
                    <option value="">--Pilih Kabupaten_domisli/Kota--</option>
                    
                </select> --}}
                <input type="text" class="form-control" name='kabupaten_domisili' id="kabupaten_domisili">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kecamatan_domisili" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="kecamatan_domisili" name="kecamatan_domisili">
                    <option value="">--Pilih Kecamatan_domisili--</option>
                </select> --}}
                <input type="text" class="form-control" name='kecamatan_domisili' id="kecamatan_domisili">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kelurahan_domisili" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-10">
                {{-- <select class="form-control" id="kelurahan_domisili" name="kelurahan_domisili">
                    <option value="">--Pilih Kel/Desa--</option>
                </select> --}}
                <input type="text" class="form-control" name='kelurahan_domisili' id="kelurahan_domisili">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="rw_domisili" class="col-sm-2 col-form-label">RW</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='rw_domisili' id="rw_domisili">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="rt_domisili" class="col-sm-2 col-form-label">RT_domisili</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='rt_domisili' id="rt_domisili">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kode_pos_domisili" class="col-sm-2 col-form-label">Kode Pos</label>
            <div class="col-sm-10">
                <input type="numerik" class="form-control" name='kode_pos_domisili' id="kode_pos_domisili">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_ayah' id="nama_ayah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_ibu' id="nama_ibu">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="suami_istri" class="col-sm-2 col-form-label">Nama Suami/Istri</label>
            <div class="col-sm-10">
                
                <input type="text" class="form-control" name='suami_istri' id="suami_istri">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="asuransi" class="col-sm-2 col-form-label">Asuransi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='asuransi' id="asuransi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_asuransi" class="col-sm-2 col-form-label">No Asuransi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='no_asuransi' id="no_asuransi">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
        
      </form>
    </div>
    <!-- AKHIR FORM -->

    
@endsection