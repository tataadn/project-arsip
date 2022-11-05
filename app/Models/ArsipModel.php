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

    public function detail_data($id_arsip = false){
        if($id_arsip == false){
            return $this->findAll();
        }
        // return $this->getWhere($this->arsip, ["id_arsip" => $id_arsip])->result();
        return $this->where(['id_arsip' => $id_arsip])->first();
        // return $this->db->table('arsip')->where('id_arsip', $id_arsip)->get()->getRowArray();
    }
    
    // public function detail_data($id_arsip){
    //     return $this->db->table('arsip')->where('id_arsip', $id_arsip)->get()->getRowArray();
    // }
}
