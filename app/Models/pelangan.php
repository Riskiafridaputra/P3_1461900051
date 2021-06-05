<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelangan extends Model
{
    use HasFactory;
    protected $table = 'pelangan';
    
    protected $fillable = ['nama','alamat'];
}
