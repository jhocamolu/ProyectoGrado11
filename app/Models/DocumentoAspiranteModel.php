<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentoAspiranteModel extends Model
{
    protected $table = 'documentos_aspirante';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_postulacion',
        'id_tipo_documento',
        'ruta_archivo',
        'estado',
        'observacion',
        'fecha_subida',
        'fecha_validacion'
    ];

    protected $useTimestamps = false;

    const ESTADO_PENDIENTE = 'pendiente';
    const ESTADO_APROBADO = 'aprobado';
    const ESTADO_RECHAZADO = 'rechazado';
}
