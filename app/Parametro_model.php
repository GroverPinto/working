<?php

namespace Illa;

use Illuminate\Database\Eloquent\Model;

class Parametro_model extends Model
{
    protected $table = 'parametro';
    protected $fillable = ['id_parametro','campo','valor','descripcion'];
    protected $primaryKey = 'id_parametro';
}
