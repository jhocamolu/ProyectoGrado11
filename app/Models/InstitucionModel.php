<?php

namespace App\Models;

use CodeIgniter\Model;

class InstitucionModel extends Model
{
  protected $table = 'instituciones';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'municipio',
        'departamento',
        'estado'
    ];

    protected $useTimestamps = false;
}
