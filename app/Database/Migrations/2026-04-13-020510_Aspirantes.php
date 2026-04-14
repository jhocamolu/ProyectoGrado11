<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aspirantes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'tipo_documento' => ['type' => 'VARCHAR', 'constraint' => 10],
            'numero_documento' => ['type' => 'VARCHAR', 'constraint' => 20],
            'nombres' => ['type' => 'VARCHAR', 'constraint' => 150],
            'apellidos' => ['type' => 'VARCHAR', 'constraint' => 150],
            'fecha_nacimiento' => ['type' => 'DATE', 'null' => true],
            'telefono' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'direccion' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'id_institucion' => ['type' => 'INT'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_institucion', 'instituciones', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('aspirantes');
    }

    public function down()
    {
        $this->forge->dropTable('aspirantes');
    }
}
