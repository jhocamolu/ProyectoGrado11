<?php

namespace App\Models;

use CodeIgniter\Model;

class TecnicaDocumentoModel extends Model
{
    protected $table = 'tecnica_documentos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_tecnica',
        'id_tipo_documento'
    ];

    protected $useTimestamps = false;
}
