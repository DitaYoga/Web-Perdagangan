<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Jam</h2>
    <button type="submit"><a href="/dashboard/tambah">Tambah</a></button>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        @foreach ($jam as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td style="width:30%"><img style="width:30%" src="{{ asset('/image/'.$j->gambar) }}" alt=""></td>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->deskripsi }}</td>
                <td>Rp.{{ $j->harga }}</td>
                <td>{{ $j->stok }}</td>
                <td>
                    <a href="/dashboard/edit/{{$j->id}}">Edit</a>
                    |
                    <a href="/dashboard/delete/{{$j->id}}" onclick="return confirm('Apakah Anda yakin ingin menghapus data jam ini ?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>