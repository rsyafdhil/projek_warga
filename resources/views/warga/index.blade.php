@extends('templates.app')    

@section('content')

<div class="col-12">
    <div class="card">
        <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Hub Keluarga</th>
                <th class="w-1"></th>
            </tr>
            </thead>
            @foreach($warga as $warga)
                
            <tbody>
            <tr>
                <td>{{ $warga->nama }}</td>
                <td>{{ $warga->nik }}</td>
                <td>{{ $warga->jenis_kel }}</td>
                <td>{{ $warga->tmp_lahir }}</td>
                <td>{{ $warga->tgl_lahir }}</td>
                <td>{{ $warga->agama }}</td>
                <td>{{ $warga->pendidikan }}</td>
                <td>{{ $warga->pekerjaan }}</td>
                <td>{{ $warga->hub_keluarga }}</td>
                <td>
                    <a class="btn  btn-sm btn-primary" href="{{ route('warga.edit', $warga->id) }}">Edit</a>
                    <form action="{{ route('warga.destroy', $warga) }}" method="POST">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger"onclick="return confirm('Yakin masbro?')">Delete</button>
                        </form> 
                </td>
        </div>
    </div>
</div>
    @endforeach
@endsection