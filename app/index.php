<?php

namespace ClubNautico;

use Illuminate\Database\Eloquent\Model;

class index extends Model
{
	protected $table = 'forms';
    protected $fillable = ['Amarre', 'Embarcacion', 'Empleados', 'Pertenece', 'Propietario', 'Socio', 'Zonas'];
}
