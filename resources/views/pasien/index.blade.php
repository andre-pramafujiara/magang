@extends('layouts.main')

@section('container')
     <!-- TOMBOL TAMBAH DATA -->
     <div class="my-0.5 p-3 bg-body rounded shadow-sm">
        <a href='pasien/create' class="btn btn-primary mb-3">+ Tambah Data</a>
      </div>

      <table class="table table-striped">
          <thead>
              <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-2">NIK</th>
                  <th class="col-md-3">Nama Pasien</th>
                  <th class="col-md-2">Telp</th>
                  <th class="col-md-2">Agama</th>
                  <th class="col-md-2">Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php $no = 1?>
            @foreach($datapasien as $data)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->nama_pasien }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->kewarganegaraan }}</td>
                    <td>
                        <a href=' {{ url('/pasien/'.$data->nip) }}'  class="btn btn-info btn-sm">Detail</a>
                        <a href=' {{ url('pasien/'.$data->nip.'/edit') }}'  class="btn btn-warning btn-sm">Edit</a>

                        <form onsubmit="return confirm('Yakin menghapus data ?')" class="d-inline" action='{{ url('pasien/'.$data->id) }}' method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
    
                    </td>
                </tr>
                <?php 
					$no++;
                    ?>
            @endforeach
              
          </tbody>
      </table>
      {{ $datapasien->links() }}
     
</div>
<!-- AKHIR DATA -->
@endsection
