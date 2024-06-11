<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
	{
		// Membuat kolom/field untuk tabel buku
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => false,
			],
			'penulis'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'        => false,
			],
			'Penerbit' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'        => false,
			],
            'tahun_terbit' => [
				'type'           => 'DATE',
				'null'        => false,
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel buku
		$this->forge->createTable('buku', TRUE);
	}

	//---------------------

	public function down()
	{
		// menghapus tabel buku
		$this->forge->dropTable('buku');
	}
}
