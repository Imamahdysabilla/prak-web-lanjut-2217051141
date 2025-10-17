<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $guarded = ['id'];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            if (empty($model->{$model->getkeyName()})) {
                $model->{$model->getkeyName()} =(string) str::uuid();
            }
        });
    }
    public function getA11mk()
    {
        return $this->all();
    }
}
