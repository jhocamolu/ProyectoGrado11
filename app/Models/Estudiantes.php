<?php

namespace App\Models;

use CodeIgniter\Model;

class Estudiantes extends Model
{
    protected $table            = 'estudiantes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'tipo_documento', 'numero_documento', 'nombres', 'apellidos', 
        'fecha_nacimiento', 'genero', 'estrato', 'correo_electronico', 
        'telefono', 'direccion', 'nivel_educativo', 'programa_interes'
    ];

    // Fechas automáticas
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Reglas de validación básicas para el ingreso al SENA
    protected $validationRules = [
        'numero_documento'   => 'required|is_unique[estudiantes.numero_documento]',
        'nombres'            => 'required|min_length[3]',
        'apellidos'          => 'required|min_length[3]',
        'correo_electronico' => 'required|valid_email',
        'programa_interes'   => 'required',
    ];
}
