<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InstitucionesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nombre' => 'IET Simón Bolívar', 'municipio' => 'Ibagué', 'departamento' => 'Tolima', 'estado' => 1],
            ['nombre' => 'IE Luis Felipe Pinto', 'municipio' => 'Melgar', 'departamento' => 'Tolima', 'estado' => 1],
            ['nombre' => 'IE Marco Fidel Suárez', 'municipio' => 'Coello', 'departamento' => 'Tolima', 'estado' => 1],
            ['nombre' => 'IET Francisco José de Caldas', 'municipio' => 'Natagaima', 'departamento' => 'Tolima', 'estado' => 1],
            ['nombre' => 'IE Técnica Comercial de Chaparral', 'municipio' => 'Chaparral', 'departamento' => 'Tolima', 'estado' => 1],
            ['nombre' => 'IE San Isidoro', 'municipio' => 'Espinal', 'departamento' => 'Tolima', 'estado' => 1],
        ];

        $this->db->table('instituciones')->insertBatch($data);
    }
}
