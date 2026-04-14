<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Postulaciones extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'id_aspirante' => ['type' => 'INT'],
            'id_tecnica' => ['type' => 'INT'],
            'id_convocatoria' => ['type' => 'INT'],
            'estado' => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => 'pendiente'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_aspirante', 'aspirantes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_tecnica', 'tecnicas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_convocatoria', 'convocatorias', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('postulaciones');
    }

    public function down()
    {
        $this->forge->dropTable('postulaciones');
    }
}
