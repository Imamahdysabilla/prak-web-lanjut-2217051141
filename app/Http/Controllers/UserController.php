<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;
    protected $kelas;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelas = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('layouts.list_user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah User',
            'kelas' => $this->kelas->all(),
        ];

        return view('layouts.create_user', $data);
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }
    
public function profile($id)
{
    // Ambil data user berdasarkan ID
    $user = \App\Models\UserModel::find($id);

    // Jika user tidak ditemukan, bisa redirect atau tampilkan error
    if (!$user) {
        return redirect()->back()->with('error', 'User tidak ditemukan');
    }

    // Kirim data ke view
    $data = [
        'name' => $user->name,
        'email' => $user->email,
        'kelas' => $user->kelas->nama_kelas,
    ];

    return view('profile', $data);
}


}
