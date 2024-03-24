<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() //INDEX ATAU HOME
    {
        $mahasiswas = Mahasiswa::all();
        return view('admin.index', compact('mahasiswas'));
    }


    public function showByNim($nim) //MENAMPILKAN BEDASARKAN NIME
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('admin.show', compact('mahasiswa'));
    }

    public function delete($nim) //MENGHAPUS BEDASARKAN NIM
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $mahasiswa->delete();

        return redirect()->route('admin.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }

    public function edit($nim) //TAMPILAN UNTUK EDIT BEDASARKAN NIM
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('admin.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $nim) //FUNCTION POST UNTUK UPDATE BEDASARKAN NIM
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'usia' => 'required|numeric',
            'gender' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
        ]);

        // Find the mahasiswa to be updated
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

        // Update the mahasiswa
        $mahasiswa->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'usia' => $request->input('usia'),
            'gender' => $request->input('gender'), // Ini seharusnya sudah benar
            'tanggal_lahir' => $request->input('tanggal_lahir'),
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('admin.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }
    public function store(Request $request) //FUNCTION POST UNTUK MENAMBAHKAN DATA
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:mahasiswas,nim',
            'alamat' => 'required|string|max:255',
            'usia' => 'required|numeric',
            'gender' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
        ]);

        // Create the mahasiswa
        Mahasiswa::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'alamat' => $request->input('alamat'),
            'usia' => $request->input('usia'),
            'gender' => $request->input('gender'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('admin.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }
    public function create() //TAMPILAN UNTUK MENAMBAHKAN DATA
    {
        return view('admin.create');
    }
}
