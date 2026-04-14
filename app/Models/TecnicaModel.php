<?php

namespace App\Models;

use CodeIgniter\Model;

class TecnicaModel extends Model
{
    protected $table = 'tecnicas';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'descripcion',
        'estado'
    ];

    protected $useTimestamps = false;
}
