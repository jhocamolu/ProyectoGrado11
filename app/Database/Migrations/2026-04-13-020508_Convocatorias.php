<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Convocatorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 100],
            'fecha_inicio' => ['type' => 'DATE'],
            'fecha_fin' => ['type' => 'DATE'],
            'estado' => ['type' => 'TINYINT', 'default' => 1],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('convocatorias');
    }

    public function down()
    {
        $this->forge->dropTable('convocatorias');
    }
}
