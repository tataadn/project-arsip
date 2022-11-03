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
        return view('arsip/dashboard');
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
            'filepdf' => 'required|uploaded[filepdf]|mime_in[filepdf,application/pdf]|ext_in[filepdf,pdf]'
        ])){
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/form')->withInput();
        } 
        
        else{
            $nosurat = $this->request->getVar('nomor_surat');
            $kategori = $this->request->getVar('kategori');
            $judul = $this->request->getVar('judul');
            $filepdf = $this->request->getFile('filepdf');
            
            //kelola penyimpanan file
            $fileName = $filepdf->getName();
            
            $this->ArsipModel->insert([
                'nomor_surat' => $nosurat,
                'kategori' => $kategori,
                'judul' => $judul,
                'filepdf' => $fileName
            ]);
            
            $filepdf->move(ROOTPATH . 'upload');     
            
            session()->setFlashdata('success','Data berhasil ditambahkan!');
            return redirect()->to('/form')->withInput();
        }
    }
    
    public function about()
    {
        return view('arsip/about');
    }
}
