<?php

namespace App\Models;

use CodeIgniter\Model;

class ConvocatoriaModel extends Model
{
    protected $table = 'convocatorias';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    protected $useTimestamps = false;
}
