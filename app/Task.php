<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'nama_tugas',
        'id_kategrori',
        'ket_tugas',
        'status_tugas'
    ];
}
