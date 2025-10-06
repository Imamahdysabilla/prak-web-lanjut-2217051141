<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users'; // sesuaikan dengan nama tabel di database kamu

    protected $fillable = [
        'nama',
        'email',
        'kelas_id',
    ];

    public function getUser()
    {
        return $this->all();
    }
}
