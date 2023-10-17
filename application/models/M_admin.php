<?php

class M_admin extends CI_Model
{
    public function read()
    {
        $query = $this->db->get('masyarakat');   
        return $query->result_array();
    }
    
    public function terima($id) 
    {
        $data = [
            'status' => 'verified'
        ];

        $this->db->where('id', $id);
        $this->db->update('masyarakat', $data);
    }

    public function tolak($id)
    {
        $this->db->delete('masyarakat', ['id' => $id]);
    } 

    public function readPengaduan()
    {
        $query = $this->db->get('pengaduan');   
        return $query->result_array();
    }
}