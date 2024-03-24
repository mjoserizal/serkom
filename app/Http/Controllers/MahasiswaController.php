<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function home(Request $request) //MENAMPILKAN MAHASISWA BERDASARKAN NIM DENGAN DESCENDING,STATISTIK BERDASARKAN GENDER,TOTAL MAHASISWA
    {
        $mahasiswas = Mahasiswa::orderBy('nim', 'desc');

        // Search by name
        if ($request->has('search')) {
            $mahasiswas->where('nama', 'like', '%' . $request->input('search') . '%');
        }

        $mahasiswas = $mahasiswas->paginate(10);

        // Total data mahasiswa
        $totalMahasiswa = Mahasiswa::count();

        // Statistik rekap jumlah mahasiswa bedasarkan gender
        $genderStatistics = Mahasiswa::select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();

        return view('mahasiswa.home', [
            'mahasiswas' => $mahasiswas,
            'totalMahasiswa' => $totalMahasiswa,
            'genderStatistics' => $genderStatistics,
        ]);
    }
    public function index(Request $request)
    {
        $mahasiswas = Mahasiswa::orderBy('nim', 'desc');

        // Search by name
        if ($request->has('search')) {
            $mahasiswas->where('nama', 'like', '%' . $request->input('search') . '%');
        }

        $mahasiswas = $mahasiswas->paginate(10);

        // Total data mahasiswa
        $totalMahasiswa = Mahasiswa::count();

        // Statistik rekap jumlah mahasiswa bedasarkan gender
        $genderStatistics = Mahasiswa::select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();

        return view('mahasiswa.index', [
            'mahasiswas' => $mahasiswas,
            'totalMahasiswa' => $totalMahasiswa,
            'genderStatistics' => $genderStatistics,
        ]);
    }
}
