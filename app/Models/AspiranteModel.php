<?php

namespace App\Models;

use CodeIgniter\Model;

class AspiranteModel extends Model
{
   protected $table = 'aspirantes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tipo_documento',
        'numero_documento',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'telefono',
        'email',
        'direccion',
        'id_institucion'
    ];

    protected $useTimestamps = true;
}
