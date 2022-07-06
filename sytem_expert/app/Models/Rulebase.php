<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rulebase extends Model
{
    use HasFactory;
    protected $table = 'penyakit_gejalas';
    protected $fillable = ['kode_penyakit', 'kode_gejala'];
}
