<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'title' => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ],
            'description' => [
                'type'              => 'TEXT',
            ],
            'image_1' => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ],
            'image_2' => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
                'null'              => true,
            ],
            'image_2' => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
                'null'              => true,
            ],
            'ongoing' => [
                'type'              => 'BOOLEAN',
                'default'           => true
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('project');
    }

    public function down()
    {
        //
        $this->forge->dropTable('project');
    }
}
