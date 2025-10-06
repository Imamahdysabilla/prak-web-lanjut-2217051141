<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas'; // nama tabel di database

    protected $fillable = [
        'nama_kelas'
    ]; // kolom yang bisa diisi

    // Method opsional untuk mengambil semua data kelas
    public function getKelas()
    {
        return $this->all();
    }
}
