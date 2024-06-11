<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
	{
		// Membuat kolom/field untuk tabel user
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => false,
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'        => false,
			],
			'password' => [
				'type'           => 'TEXT',
				'null'        => false,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel user
		$this->forge->createTable('user', TRUE);
	}

	//---------------------

	public function down()
	{
		// menghapus tabel user
		$this->forge->dropTable('user');
	}
}
