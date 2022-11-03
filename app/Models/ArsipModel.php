<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'arsip';
    protected $primaryKey       = 'id_arsip';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['nomor_surat','kategori','judul','filepdf'];

    // Dates
    protected $useTimestamps = true;

    public function search($keyword){
        return $this->table('arsip')->like('nomor_surat', $keyword)->orLike('kategori', $keyword)->orLike('judul', $keyword)->orLike('created_at', $keyword);
    }
}
