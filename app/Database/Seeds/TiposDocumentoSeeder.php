<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TiposDocumentoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nombre' => 'Documento de Identidad (TI/CC)', 'obligatorio' => 1, 'descripcion' => 'Documento de identidad del aspirante'],
            ['nombre' => 'Registro Civil', 'obligatorio' => 1, 'descripcion' => 'Registro civil de nacimiento'],
            ['nombre' => 'Documento de Acudiente', 'obligatorio' => 1, 'descripcion' => 'Cédula del acudiente'],
            ['nombre' => 'Certificado EPS', 'obligatorio' => 1, 'descripcion' => 'Certificación de afiliación a salud'],
            ['nombre' => 'Acta de Compromiso', 'obligatorio' => 1, 'descripcion' => 'Documento firmado por el aspirante'],
            ['nombre' => 'Autorización de Tratamiento de Datos', 'obligatorio' => 1, 'descripcion' => 'Habeas Data'],
            ['nombre' => 'Foto Tipo Documento', 'obligatorio' => 1, 'descripcion' => 'Foto reciente del aspirante'],
            ['nombre' => 'Certificado de Estudio', 'obligatorio' => 1, 'descripcion' => 'Certificado de grado o matrícula'],
        ];

        $this->db->table('tipos_documento')->insertBatch($data);
    }
}
