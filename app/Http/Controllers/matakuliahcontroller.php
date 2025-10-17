<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\matakuliah;

class matakuliahcontroller extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'List mata kuliah',
            'mks'=> matakuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'create mata kuliah']);
    }

    public function store(Request $request)
    {
        matakuliah::create([
            'nama_mk' => $reuest->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/matakuliah');
    }
}
