<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users'; // sesuaikan dengan nama tabel di database kamu

    protected $fillable = [
        'name',
        'email',
        'kelas_id',
    ];

    public function getUser()
    {
         return $this->join('kelas', 'users.kelas_id', '=', 'kelas.id')
                ->select('users.*', 'kelas.nama_kelas')
                ->get();
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}

