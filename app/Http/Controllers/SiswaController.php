<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswas.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:siswas',
            'tanggal_lahir' => 'required|date',
            'kelas' => 'required',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswas.index');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswas.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:siswas,email,' . $siswa->id,
            'tanggal_lahir' => 'required|date',
            'kelas' => 'required',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswas.index');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswas.index');
    }
}
