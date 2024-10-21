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
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswas.update', $siswa) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $siswa->email }}" required>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>

        <button type="submit">Update</button>
    </form>
@endsection

</body>
</html>