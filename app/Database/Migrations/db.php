<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class db extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type' => 'double',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data_barang');
    }

    public function down()
    {
        $this->forge->dropTable('data_barang');
    }
}