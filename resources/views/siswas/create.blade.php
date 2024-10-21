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
    <h1>Tambah Siswa</h1>
    <form action="{{ route('siswas.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" required>

        <button type="submit">Simpan</button>
    </form>
@endsection

</body>
</html>