<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TecnicaDocumentos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'id_tecnica' => ['type' => 'INT'],
            'id_tipo_documento' => ['type' => 'INT'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_tecnica', 'tecnicas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_tipo_documento', 'tipos_documento', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('tecnica_documentos');
    }

    public function down()
    {
        $this->forge->dropTable('tecnica_documentos');
    }
}
