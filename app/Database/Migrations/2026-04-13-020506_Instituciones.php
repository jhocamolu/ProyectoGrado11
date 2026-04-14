<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Instituciones extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 150],
            'municipio' => ['type' => 'VARCHAR', 'constraint' => 100],
            'departamento' => ['type' => 'VARCHAR', 'constraint' => 100],
            'estado' => ['type' => 'TINYINT', 'default' => 1],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('instituciones');
    }

    public function down()
    {
        $this->forge->dropTable('instituciones');
    }
}
