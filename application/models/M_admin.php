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
        $query = $this->db->get_where('masyarakat', array('id' => $id));
        $result = $query->row();
        $namaFile = $result->selfie;

        // Menghapus gambar secara lokal jika file tersebut ada
        $lokasiGambar = 'assets/gambar/' . $namaFile; 
        if (file_exists($lokasiGambar)) {
            unlink($lokasiGambar); // Hapus file gambar
        }

        // Update status di database
        $data = [
        'status' => 'verified',
        'selfie' => 'profile.png'
        ];
        $this->db->where('id', $id);
        $this->db->update('masyarakat', $data);
    }

    public function tolak($id)
    {
        $query = $this->db->get_where('masyarakat', array('id' => $id));
        $result = $query->row();
        $namaFile = $result->selfie;

        // Menghapus gambar secara lokal jika file tersebut ada
        $lokasiGambar = 'assets/gambar/' . $namaFile; 
        if (file_exists($lokasiGambar)) {
            unlink($lokasiGambar); // Hapus file gambar
        }
        $this->db->delete('masyarakat', ['id' => $id]);
    } 

    public function readPengaduan()
    {
        $query = $this->db->get('pengaduan');   
        return $query->result_array();
    }

    public function proses($id) 
    {
        $data = [
            'status' => 'diproses'
        ];

        $this->db->where('id', $id);
        $this->db->update('pengaduan', $data);
    }

    public function selesai($id) 
    {
        $data = [
            'status' => 'selesai',
            'penyelesaian' => $this->input->post('penyelesaian')
        ];

        $this->db->where('id', $id);
        $this->db->update('pengaduan', $data);
    }

    public function hapusPengaduan($id)
    {
        $this->db->delete('pengaduan', ['id' => $id]);
    } 
}