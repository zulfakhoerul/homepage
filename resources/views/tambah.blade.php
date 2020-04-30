<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1">
    <meta name="csrf-token"
    content="{{csrf_token()}}">
    <title>Tambah Data</title>
</head>
<body>
    <div class="flex-center position-ref fullheight">
    <div class="content">
    <div>
    <form method="POST" action="{{url('dokter/tambah/proses') }}"
    enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="text" name="nama_dokter" placeholder="Masukkan Nama Dokter">
    <input type="text" name="bagian" placeholder="Masukkan Bagian">
    
 <button type="submit">Simpan</button>
 </form>
 </div>
 </div>
 </div>
</body>
</html>