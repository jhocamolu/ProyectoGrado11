<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tecnicas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 150],
            'descripcion' => ['type' => 'TEXT', 'null' => true],
            'estado' => ['type' => 'TINYINT', 'default' => 1],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tecnicas');
    }

    public function down()
    {
        $this->forge->dropTable('tecnicas');
    }
}
