<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locadora extends Model
{
    use HasFactory;
    protected $table='locadoras';
    protected $fillable=['filme','genero','ano_lancamento','empresa'];
}
