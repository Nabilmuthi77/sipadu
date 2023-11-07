<?php

class Service extends CI_Model
{

public function graph()
	{
		$data = $this->db->query("SELECT * from service");
		return $data->result();
	}

public function countMasyarakat()
{
    $query = $this->db->query('SELECT * FROM masyarakat');
	return $query->num_rows();
}

public function ditinjau()
{
    $query = $this->db->query("SELECT * FROM pengaduan WHERE status = 'ditinjau'");
	return $query->num_rows();
}

public function diproses()
{
    $query = $this->db->query("SELECT * FROM pengaduan WHERE status = 'diproses'");
	return $query->num_rows();
}


}