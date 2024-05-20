<?php

namespace App\Http\Controllers;

use App\Http\Requests\UlasanRequest;
use App\Models\Galeri;
use App\Models\Pengaturan;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'ulasans' => Ulasan::all(),
            'tentang' => Galeri::where('kategori', 'Tentang')->firstOrFail(),
            'home' => Galeri::where('kategori', 'Home')->firstOrFail(),
            'galeris' => Galeri::where('kategori', 'Galeri')->get(),
            'pengaturan' => Pengaturan::firstOrFail()
        ];
        return view('pages.landing.home', $data);
    }

    public function ulasan(UlasanRequest $request, Ulasan $ulasan)
    {
        $data = $request->all();
        $ulasan->create($data);
        return redirect()->back()->with('success', 'Terimakasih Atas Ulasan Anda');
    }
}
