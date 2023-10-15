<?php

class M_masyarakat extends CI_Model
{
    public function read()
    {
        $query = $this->db->get('pengaduan');   
        return $query->result_array();
    }
    
    public function pengaduan() 
    {
        $user = $this->session->userdata();
        $data = [
            'nik' => $user['nik'],
            'nama' => $user['nama'],
            'tgl_pengaduan' => time(),
            'judul_pengaduan' => htmlspecialchars($this->input->post('judul', true)),
            'isi_pengaduan' => htmlspecialchars($this->input->post('isi', true)),
            'status' => 'ditinjau'
        ];

        $this->db->insert('pengaduan', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('pengaduan', ['id' => $id]);
    } 
}