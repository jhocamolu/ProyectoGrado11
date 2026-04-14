<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DocumentosAspirante extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'id_postulacion' => ['type' => 'INT'],
            'id_tipo_documento' => ['type' => 'INT'],
            'ruta_archivo' => ['type' => 'VARCHAR', 'constraint' => 255],
            'estado' => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => 'pendiente'],
            'observacion' => ['type' => 'TEXT', 'null' => true],
            'fecha_subida' => ['type' => 'DATETIME', 'null' => true],
            'fecha_validacion' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_postulacion', 'postulaciones', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_tipo_documento', 'tipos_documento', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('documentos_aspirante');
    }

    public function down()
    {
        $this->forge->dropTable('documentos_aspirante');
    }
}
