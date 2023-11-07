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



    public function penilaian()
{
    $user = $this->session->userdata();
    $newRating = $this->input->post('rating');

    // Ambil data rating sebelumnya
    $previousRating = $this->db->get_where('masyarakat', ['nik' => $user['nik']])->row_array();

    // Jika data sebelumnya ditemukan
    if ($previousRating) {
        // Jika rating sebelumnya sama dengan rating yang baru
        if ($previousRating['id_service'] == $newRating) {
            // Tidak perlu melakukan perubahan, rating sudah ada
            return;
        }

        // Ambil data service yang sedang dirating sebelumnya
        $previousServiceData = $this->db->get_where('service', ['id' => $previousRating['id_service']])->row_array();

        // Inisialisasi total
        $previousTotal = $previousServiceData['total'];

        // Kurangi total untuk rating sebelumnya
        $previousTotal--;
        $data = ['total' => $previousTotal];
        $this->db->where('id', $previousRating['id_service']);
        $this->db->update('service', $data);
    }

    // Ambil data service yang baru dirating
    $newServiceData = $this->db->get_where('service', ['id' => $newRating])->row_array();

    // Inisialisasi total baru
    $newTotal = $newServiceData['total'];

    // Tambahkan total untuk rating yang baru
    $newTotal++;

    // Simpan total yang telah dihitung
    $data = ['total' => $newTotal];
    $this->db->where('id', $newRating);
    $this->db->update('service', $data);

    // Simpan rating yang baru
    $data = ['id_service' => $newRating];
    $this->db->where('nik', $user['nik']);
    $this->db->update('masyarakat', $data);
}

}