<?php

namespace Illa;

use Illuminate\Database\Eloquent\Model;

class Categoria_model extends Model
{
    protected $table = 'categoria';
    protected $fillable = ['id_categoria','nombre','estado'];

    protected $primaryKey = 'id_categoria';
}
