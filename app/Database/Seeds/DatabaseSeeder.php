<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('InstitucionesSeeder');
        $this->call('TecnicasSeeder');
        $this->call('TiposDocumentoSeeder');
    }
}
