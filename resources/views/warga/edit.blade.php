@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route ('warga.update', $warga->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="" value="{{ $warga->nama }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="" value="{{ $warga->nik }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kel" placeholder="" value="{{ $warga->jenis_kel }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmp_lahir" placeholder="" value="{{ $warga->tmp_lahir }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir" placeholder="" value="{{ $warga->tgl_lahir }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Agama</label>
                <input type="text" class="form-control" name="agama" placeholder="" value="{{ $warga->agama }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" name="pendidikan" placeholder="" value="{{ $warga->pendidikan }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" placeholder="" value="{{ $warga->pekerjaan }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Hubungan Keluarga</label>
                <input type="text" class="form-control" name="hub_keluarga" placeholder="" value="{{ $warga->hub_keluarga }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</div>

@endsection