<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.layout')

@section('content')
    <h1>Daftar Siswa</h1>
    <a href="{{ route('siswas.create') }}">Tambah Siswa</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>
                        <a href="{{ route('siswas.edit', $siswa) }}">Edit</a>
                        <form action="{{ route('siswas.destroy', $siswa) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

</body>
</html>