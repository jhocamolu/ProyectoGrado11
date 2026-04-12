<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Estudiantes extends Migration
{
    public function up()
    {
            $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tipo_documento' => [
                'type'       => 'ENUM',
                'constraint' => ['CC', 'TI', 'CE', 'PEP'],
                'default'    => 'CC',
            ],
            'numero_documento' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'unique'     => true,
            ],
            'nombres' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellidos' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'fecha_nacimiento' => [
                'type' => 'DATE',
            ],
            'genero' => [
                'type'       => 'ENUM',
                'constraint' => ['Masculino', 'Femenino', 'Otro'],
            ],
            'estrato' => [
                'type'       => 'INT',
                'constraint' => 1,
            ],
            'correo_electronico' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'telefono' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'direccion' => [
                'type'       => 'TEXT',
            ],
            'nivel_educativo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100', // Ejemplo: Bachiller, Noveno grado, etc.
            ],
            'programa_interes' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('estudiantes');
    }

    public function down()
    {
        $this->forge->dropTable('estudiantes');
    }
}
