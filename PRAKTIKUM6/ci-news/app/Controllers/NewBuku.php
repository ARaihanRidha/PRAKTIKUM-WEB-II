<?php namespace App\Controllers;

use \App\Models\BukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewBuku extends BaseController
{
	public function index()
	{
        $buku = new BukuModel();
        $data['data_buku'] = $buku->findAll();
		echo view('admin_list_buku', $data);
    }

    //--------------------------------------------------------------------------
    
    public function preview($id)
	{
		$buku = new BukuModel();
		$data['data_buku'] = $buku->where('id', $id)->first();
		
		if(!$data['data_buku']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('bukuDetail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        session();
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|alpha_space',
            'penulis' => 'required|alpha_space',
            'Penerbit' => 'required|alpha_space',
            'tahun_terbit' => 'required|integer|greater_than_equal_to[1800]|less_than_equal_to[2024]'
    ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $buku = new BukuModel();
            $buku->insert([
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "Penerbit" => $this->request->getPost('Penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('admin/buku');
        }else {
            
            redirect()->to('admin/buku/new')->withInput()->with('validation', $validation);
        }
		
        // tampilkan form create
        echo view('admin_create_buku');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        session();
        // ambil artikel yang akan diedit
        $buku = new BukuModel();
        $data['buku'] = $buku->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|alpha_space',
            'penulis' => 'required|alpha_space',
            'Penerbit' => 'required|alpha_space',
            'tahun_terbit' => 'required|integer|greater_than_equal_to[1800]|less_than_equal_to[2024]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $buku->update($id, [
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "Penerbit" => $this->request->getPost('Penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('admin/buku');
        }else {
            redirect()->to('admin/buku/edit')->withInput()->with('validation', $validation);
        }

        // tampilkan form edit
        echo view('admin_edit_buku', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $buku = new BukuModel();
        $buku->delete($id);
        return redirect('admin/buku');
    }
    
}