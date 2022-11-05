<?php

namespace App\Controllers;

use App\Models\ArsipModel;

class Arsip extends BaseController
{
    protected $ArsipModel;
    public function __construct()
    {
        $this->ArsipModel = new ArsipModel();
    }

    public function home()
    {
        return view('arsip/index');
    }
    
    public function dashboard()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $cariArsip = $this->ArsipModel->search($keyword);
        } else {
            $cariArsip = $this->ArsipModel;
        }

        $arsipModel = new ArsipModel();
        $arsip = $arsipModel->findAll();
        $data = array('arsip' => $arsip);
        return view('arsip/dashboard', $data);
    }
    
    public function form()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('arsip/form', $data);
    }
    
    public function save()
    {
        $validasi = !$this->validate([
                        'nomor_surat' => [
                            'rules' => 'required|is_unique[arsip.nomor_surat]',
                            'errors' => [
                                'required' => 'nomor surat harus diisi',
                                'is_unique' => 'nomor surat sudah terdaftar'
                            ]
                        ],

                        'kategori' => 'required',

                        'judul' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'judul harus diisi'
                            ]
                        ],
                        
                        'filepdf' => [
                            'rules' => 'uploaded[filepdf]|max_size[filepdf,2048]|ext_in[filepdf,pdf]|mime_in[filepdf,application/pdf]',
                            'errors' => [
                                'uploaded' => 'file harus diisi',
                                'max_size' => 'ukuran file terlalu besar',
                                'ext_in' => 'file harus berformat pdf',
                                'mime_in' => 'file harus berformat pdf'
                            ]
                        ],
                    ]);

        if($validasi){
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/form')->withInput();
        } 
        
        else{

            //mengambil file foto yg akan diupload di form
            $file_arsip = $this->request->getFile('filepdf');
            //merandom nama file foto
            $nama_file = $file_arsip->getRandomName();

            $data = [
                'nomor_surat' => $this->request->getVar('nomor_surat'),
                'kategori' => $this->request->getVar('kategori'),
                'judul' => $this->request->getVar('judul'),
                'filepdf' => $nama_file,
            ];

            $file_arsip->move('file_arsip', $nama_file); //directori upload file
            $this->ArsipModel->insert($data);  
            
            session()->setFlashdata('success','Data berhasil ditambahkan!');
            return redirect()->to('/form')->withInput();
        }
    }
    
    public function delete($id)
    {
        $arsipModel = new ArsipModel();
        $data = $arsipModel->find($id);
        $filePdf = $data->filepdf;
        if(file_exists('file_arsip/'.$filePdf)){
            unlink('file_arsip/'.$filePdf);
        }
        $arsipModel->delete($id);
        return redirect()->back();
    }
    
    public function preview($id = null)
    {
        $arsipModel = new ArsipModel();
        $filepdf = $arsipModel->detail_data($id);
        $data = array('filepdf' => $filepdf);
        return view('arsip/preview', $data);
    }

    function download($id)
	{
		$arsip = new ArsipModel();
		$data = $arsip->find($id);
		return $this->response->download('file_arsip/' . $data->filepdf, null);
	}
    
    public function about()
    {
        return view('arsip/about');
    }
}
