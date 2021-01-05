<!-- MAIN -->
    @include('layouts.sidebar')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="col">
    <br><br>
    <h1 class="display-4 center">Daftar Pedagang</h1>
    <div class="container">
    {{-- <a class="btn btn-outline-dark" href="{{ url('daftarpedagang/tambah') }}">Tambah</a> --}}
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th class="action">Action</th>
            </tr>
            @foreach ($pedagang as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->level }}</td>
                <td>
                    <a class="btn btn-dark btn-sm" href="{{ url('daftarpedagang/delete/'.$u->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus pedagang ini ?')">Hapus</a>
                </td>
            </tr>
        @endforeach
        </thead>
    </table>
    </div>

    </div>