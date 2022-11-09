<?php

namespace App\Models;

use CodeIgniter\Model;

class TotalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'arsip';
    protected $primaryKey       = 'id_arsip';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['nomor_surat','kategori','judul','filepdf'];

    // Dates
    protected $useTimestamps = true;

    public function total_pengumuman(){
        return $this->db->table('arsip')->where(['kategori' => 'Pengumuman'])->countAllResults();
    }
    public function total_undangan(){
        return $this->db->table('arsip')->where(['kategori' => 'Undangan'])->countAllResults();
    }
    public function total_nota(){
        return $this->db->table('arsip')->where(['kategori' => 'Nota Dinas'])->countAllResults();
    }
    public function total_pemberitahuan(){
        return $this->db->table('arsip')->where(['kategori' => 'Pemberitahuan'])->countAllResults();
    }
    public function total(){
        return $this->db->table('arsip')->countAllResults();
    }
}
