<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Buku extends BaseController
{
	public function index()
	{
    // buat object model $news
    $bukuModel = new BukuModel();

    /*
     siapkan data untuk dikirim ke view dengan nama $buku
     dan isi datanya dengan news yang sudah terbit
    */
    $data['data_buku'] = $bukuModel->findAll();

    // kirim data ke view
    echo view('buku', $data);
	}

	//------------------------------------------------------------

	public function viewBuku($slug)
	{
		$buku = new bukuModel();
		$data['data_buku'] = $buku->where([
            'slug' => $slug,
			'status' => 'published'
		])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['data_buku']) {
			throw PageNotFoundException::forPageNotFound();
		}

		echo view('bukuDetail', $data);
	}
}