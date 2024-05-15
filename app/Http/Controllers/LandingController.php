<?php

namespace App\Http\Controllers;

use App\Http\Requests\UlasanRequest;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'ulasans' => Ulasan::all()
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
