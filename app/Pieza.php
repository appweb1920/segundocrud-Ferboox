<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    protected $table="piezas";
    protected $fillable = ['nombre','descripcion','numeroPiezas','precio'];
}
