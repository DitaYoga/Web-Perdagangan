<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('proses_update', $jam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <table>
            <tr>
                <th style="text-align: left">Nama</th>
                <td>:</td>
            <td><input type="text" name="nama" value="{{ $jam->nama }}"></td>
            </tr>
            <tr>
                <th style="text-align: left">Gambar</th>
                <td>:</td>
                <td><input type="file" name="gambar" value="{{ $jam->gambar }}"></td>
            </tr>
            <tr>
                <th style="text-align: left">Deskripsi</th>
                <td>:</td>
                <td><textarea name="deskripsi" cols="30" rows="10">{{ $jam->deskripsi }}</textarea></td>
            </tr>
            <tr>
                <th style="text-align: left">Harga</th>
                <td>:</td>
                <td><input type="number" name="harga"  value="{{ $jam->harga }}"></td>
            </tr>
            <tr>
                <th style="text-align: left" >Stok</th>
                <td>:</td>
                <td><input type="number" name="stok" value="{{ $jam->stok }}"></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td><button type="submit">Submit</button></td>
                <td><button type="submit">Cancel</button></td>
            </tr>
        </table>
    </form>
</body>
</html>