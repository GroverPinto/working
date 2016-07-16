<?php

namespace Illa;

use Illuminate\Database\Eloquent\Model;

class Usuario_model extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['id_usuario','paterno','materno','nombres','email','contrasena','celular','ubicacion','estado'];
    protected $hidden = ['contrasena'];
    protected $primaryKey = 'id_usuario';

    public function setPasswordAttribute($valor){
      if(!empty($valor)){
        $this->attributes['contrasena']=\Hash::make($valor);
      }
    }
}
