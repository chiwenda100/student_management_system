<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableClassesModules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'class_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'module_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('class_id', 'classes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('module_id', 'modules', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('class_module');
    }

    public function down()
    {
        $this->forge->dropTable('class_module');
    }
}
