<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DocumentosHistorial extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'id_documento' => ['type' => 'INT'],
            'estado' => ['type' => 'VARCHAR', 'constraint' => 20],
            'observacion' => ['type' => 'TEXT', 'null' => true],
            'usuario' => ['type' => 'VARCHAR', 'constraint' => 100],
            'fecha' => ['type' => 'DATETIME'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_documento', 'documentos_aspirante', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('documentos_historial');
    }

    public function down()
    {
        $this->forge->dropTable('documentos_historial');
    }
}
