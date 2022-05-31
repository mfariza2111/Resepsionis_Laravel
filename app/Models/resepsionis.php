<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepsionis extends Model
{
    protected $table = 'resepsionis';
    protected $fillable = ['nama', 'nik', 'alamat', 'umur', 'jeniskelamin', 'status', 'waktu'];
}
