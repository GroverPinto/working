<?php

namespace Illa;

use Illuminate\Database\Eloquent\Model;

class Cuenta_model extends Model
{
    protected $table = 'cuenta';
    protected $fillable = ['id_cuenta','saldo','fecha_creacion','numero_cuenta','estado','id_usuario'];
    protected $primaryKey = 'id_cuenta';
}
