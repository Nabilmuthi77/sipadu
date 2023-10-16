<?php

class M_admin extends CI_Model
{
    public function read()
    {
        $query = $this->db->get('masyarakat');   
        return $query->result_array();
    }
    
    public function tambahAdmin() 
    {
        $data = [
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'role' => 'admin',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->db->insert('administrator', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('administrator', ['id' => $id]);
    } 
}