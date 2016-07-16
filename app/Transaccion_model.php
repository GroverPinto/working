<?php

namespace Illa;

use Illuminate\Database\Eloquent\Model;

class Transaccion_model extends Model
{
    protected $table = 'transaccion';
    protected $fillable = ['id_transaccion','cuenta_origen','cuenta_destino','monto','fecha_operacion','id_item','id_cuenta'];
    protected $primaryKey = 'id_transaccion';
}
