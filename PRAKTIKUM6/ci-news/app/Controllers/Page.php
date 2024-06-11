<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view('about');
	}
    
    public function contact()
	{
		$data['name'] = "Raihan Ridha";
	    echo view("contact", $data);
	}
    
    public function faqs()
	{
        $data['data_faqs'] = [
			[
				'question' => 'Apa itu Buku?',
				'answer' => 'Buku adalah bahan bacaan'
			],
			[
				'question' => 'Siapa yang membuat Buku?',
				'answer' => 'Manusia'
			],
			[
				'question' => 'Buku adalah jendela dunia?',
				'answer' => 'iya'
			]
		];
		echo view('faqs',$data);
	}
    public function tos()
    {
        echo view('tos');
    }

}