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
    <!-- MAIN -->
    <div class="col">
    <br><br>
    <h1 class="display-4 center">Daftar Jam</h1>
    <div class="container">
    <a class="btn btn-outline-dark" href="{{ url('dashboard/tambah') }}">Tambah</a>
    <a class="btn btn-outline-dark" href="{{ url('/logout') }}">Logout</a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Jumlah Pembelian</th>
                <th class="action">Action</th>
            </tr>
        </thead>
        @foreach ($jam as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="td-img"><img class="img" src="{{ asset('/image/'.$j->gambar) }}" alt=""></td>
                <td>{{ $j->nama }}</td>
                <td>{{ Str::limit($j->deskripsi, 110, ' ...') }}</td>
                <td>@currency( $j->harga )</td>
                <td>{{ $j->stok }}</td>
                <td>{{ $j->jumlah_pembelian }}</td>
                <td>
                    <a class="btn btn-dark btn-sm" href="{{ url('dashboard/edit/'.$j->id) }}">Edit</a>
                    <a class="btn btn-dark btn-sm" href="{{ url('dashboard/delete/'.$j->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data jam ini ?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br><br>
    <div class="linkpage">{{ $jam->links() }}</div>
    <br><br>
    </div>

    </div>
</body>
</html>