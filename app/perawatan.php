<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perawatan extends Model
{
    protected $fillable = ['nama', 'email', 'tanggal', 'jam', 'kategori', 'pesan'];
}
