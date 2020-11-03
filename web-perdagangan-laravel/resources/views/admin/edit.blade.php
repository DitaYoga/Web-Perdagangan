<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <br></br>
    <h1 class="display-4 center">Edit</h1>
    <div class="container">
    <form action="{{ route('proses_update', $jam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $jam->nama }}">
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control-file" value="{{ $jam->gambar }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control">{{ $jam->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $jam->harga }}">
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $jam->stok }}">
        </div>
        <button type="submit" class="btn btn-dark">Kirim</button>
        <a href="../" class="btn btn-dark">Cancel</a>
    </form>
</body>
</html>