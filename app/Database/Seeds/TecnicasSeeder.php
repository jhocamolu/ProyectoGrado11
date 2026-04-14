<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TecnicasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nombre' => 'Técnico en Programación de Software', 'descripcion' => 'Desarrollo de aplicaciones y sistemas', 'estado' => 1],
            ['nombre' => 'Técnico en Sistemas', 'descripcion' => 'Mantenimiento y soporte de sistemas informáticos', 'estado' => 1],
            ['nombre' => 'Técnico en Asistencia Administrativa', 'descripcion' => 'Procesos administrativos empresariales', 'estado' => 1],
            ['nombre' => 'Técnico en Contabilización de Operaciones Comerciales', 'descripcion' => 'Procesos contables y financieros', 'estado' => 1],
            ['nombre' => 'Técnico en Recursos Humanos', 'descripcion' => 'Gestión del talento humano', 'estado' => 1],
        ];

        $this->db->table('tecnicas')->insertBatch($data);
    }
}
