<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
    public function run()
    {
        		// membuat data
		$buku_data = [
			[
				'judul' => 'Laskar Pelangi',
				'penulis'  => 'Anyone',
				'Penerbit' => 'Pengenalan Buku untuk Pemula.',
                'tahun_terbit' =>'2024',
			],
			[
				'judul' => 'Laskar Pelangi',
				'penulis'  => 'Anyone',
				'Penerbit' => 'Pengenalan Buku untuk Pemula.',
                'tahun_terbit' =>'2024',
			],
			[
				'judul' => 'Laskar Pelangi',
				'penulis'  => 'Anyone',
				'Penerbit' => 'Pengenalan Buku untuk Pemula.',
                'tahun_terbit' =>'2024',
			]
		];

		foreach($buku_data as $data){
			// insert semua data ke tabel
			$this->db->table('buku')->insert($data);
		}
    }
}
