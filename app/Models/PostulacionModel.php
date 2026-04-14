<?php

namespace App\Models;

use CodeIgniter\Model;

class PostulacionModel extends Model
{
    protected $table = 'postulaciones';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_aspirante',
        'id_tecnica',
        'id_convocatoria',
        'estado'
    ];

    protected $useTimestamps = true;

    // Estados sugeridos
    const ESTADO_PENDIENTE = 'pendiente';
    const ESTADO_APROBADO = 'aprobado';
    const ESTADO_RECHAZADO = 'rechazado';
}
