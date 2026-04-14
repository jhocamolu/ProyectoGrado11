<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoDocumentoModel extends Model
{
    protected $table = 'tipos_documento';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'obligatorio',
        'descripcion'
    ];

    protected $useTimestamps = false;
}
