<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // use id_emp as PK
    protected $fillable = ['nama_jabatan', 'gaji_pokok'];
}
