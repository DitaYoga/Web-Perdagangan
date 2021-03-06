<!-- MAIN -->
    @include('layouts.sidebar')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="col">
    <br><br>
    <h1 class="display-4 center">Daftar User</h1>
    <div class="container">
    {{-- <a class="btn btn-outline-dark" href="{{ url('daftaruser/tambah') }}">Tambah</a> --}}
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
            @foreach ($user as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->level }}</td>
                <td>
                    <a class="btn btn-dark btn-sm" href="{{ url('daftaruser/delete/'.$u->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini ?')">Hapus</a>
                </td>
            </tr>
        @endforeach
        </thead>
    </table>
    </div>

    </div>