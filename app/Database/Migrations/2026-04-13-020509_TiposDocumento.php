<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TiposDocumento extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 100],
            'obligatorio' => ['type' => 'TINYINT', 'default' => 1],
            'descripcion' => ['type' => 'TEXT', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tipos_documento');
    }

    public function down()
    {
        $this->forge->dropTable('tipos_documento');
    }
}
