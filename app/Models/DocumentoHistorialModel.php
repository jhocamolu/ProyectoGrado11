<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentoHistorialModel extends Model
{
    protected $table = 'documentos_historial';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_documento',
        'estado',
        'observacion',
        'usuario',
        'fecha'
    ];

    protected $useTimestamps = false;
}
