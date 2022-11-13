@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route ("warga.store") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kel" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmp_lahir" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Agama</label>
                <input type="text" class="form-control" name="agama" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" name="pendidikan" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Hubungan Keluarga</label>
                <input type="text" class="form-control" name="hub_keluarga" placeholder="">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</div>

@endsection