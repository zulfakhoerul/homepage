<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1">
    <meta name="csrf-token"
    content="{{csrf_token()}}">
    <title> Edit Data</title>
</head>
<body>
    <div class="flex-center position-ref fullheight">
    <div class="content">
    <div>
    <form method="POST" action="{{url('dokter/edit/proses', $data->id_dokter) }}"
    enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <input type="text" name="nama_dokter" placeholder="Masukkan Nama Dokter" value="{{ $data->nama_dokter }}">
    <input type="text" name="bagian" placeholder="Masukan Bagian" value="{{$data->bagian }}">
   
 <button type="submit">Simpan</button>
 </form>
 </div>
 </div>
 </div>
</body>
</html>