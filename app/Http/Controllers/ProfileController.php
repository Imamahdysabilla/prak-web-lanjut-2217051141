<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Models\User;


class ProfileController extends Controller
{
   

    public function profile($id)
{
    // Ambil data user berdasarkan id dari tabel users
     $user = User::find($id);

    // Cek apakah data user ditemukan
    if (!$user) {
        return redirect('/user')->with('error', 'User tidak ditemukan.');
    }

    // Kirim data ke view profile.blade.php
    $data = [
        'name' => $user->name,
        'email' => $user->email,
        'kelas' => $user->kelas_id, // atau relasi kalau sudah ada model relasi
    ];

    return view('profile', $data);
}

}
