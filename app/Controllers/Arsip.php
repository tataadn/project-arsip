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

        if(!$this->validate([
            'nomor_surat' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'filepdf' => 'uploaded[filepdf]|max_size[filepdf,2048]|ext_in[filepdf,pdf]|mime_in[filepdf,application/pdf]'
        ])){
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
    
    public function about()
    {
        return view('arsip/about');
    }
}
