<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.dashboard');
    }

    public function profile()
    {
        return view('pages.dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
        $data = $request->all();

        // Periksa apakah kolom password baru tidak kosong
        if (!empty($data['passwordBaru'])) {
            // Jika tidak kosong, verifikasi password lama
            if (!Hash::check($data['password'], Auth::user()->password)) {
                return redirect()->back()->with('error', 'Password lama tidak sesuai');
            } else {
                // Jika password lama sesuai, update password baru
                $user = Auth::user();
                $data['password'] = Hash::make($data['passwordBaru']);
                $user->update($data);
            }
        } else {
            // Jika kolom password baru kosong, abaikan pembaruan password
            unset($data['password']);
        }

        // Update data lainnya
        $user = Auth::user();
        $user->update($data);

        return redirect()->back()->with('success', 'Profile berhasil diperbarui');
    }

    public function pengaturan()
    {
        return view('pages.dashboard.pengaturan');
    }
}
