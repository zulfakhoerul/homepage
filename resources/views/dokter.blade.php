<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Halaman Dokter</title>
</head>
<body>
    <div class="flex-center position-ref full-height">
     <div class="content">
    <div>
    <a href="{{ url('dokter/tambah') }}">Tambah data</a>
    <table border="1">
    <thead>
    <tr>
    <th>Nama Dokter</th>
    <th>Bagian</th>
    <th>Action</th>
     </tr>
     </thead>
    <tbody>
    @foreach($datas as $data)
    <tr>
    <td>{{ $data->nama_dokter }}</td>
    <td>{{ $data->bagian }}</td>
    <td>
    <div class="btn-group dropdown">
    <a href="{{url('dokter/edit', $data->id_dokter) }}">Edit</a>
    <form action="{{ url('dokter/hapus',$data->id_dokter)}}"method="post">
     {{ csrf_field() }}
    {{method_field('delete') }}
    <button type="submit"> Delete</button>
    </form>
    </div>
    </td>
    </tr>
     @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>