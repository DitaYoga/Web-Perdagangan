<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
    @include('layouts.sidebar')
</head>
<body>
    <div class="col">
        <br></br>
        <h1 class="display-4 center">Tambah</h1>
        <div class="container">
        <form action="{{route('proses_tambah')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control-file">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah Pembelian</label>
                <input type="number" name="jumlah_pembelian" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Kirim</button>
        </form>
        </div>
    </div><br>
</body>
</html>