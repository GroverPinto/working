<?php

namespace Illa;

use Illuminate\Database\Eloquent\Model;

class Item_model extends Model
{
    protected $table = 'item';
    protected $fillable = ['id_item','titulo','descripcion','costo','imagen','negociable','estado','id_categoria'];
    
    protected $primaryKey = 'id_item';
}
