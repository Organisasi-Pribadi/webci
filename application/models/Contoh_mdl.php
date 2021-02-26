<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Contoh_mdl extends CI_Model
{
	//Berfungsi untuk menyimpan data
	public function save($tabel, $data)
	{
		return $this->db->insert($tabel, $data)
	}

	//Berfungsi untuk menampilkan tabel
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	//Berfungsi untuk mengupdate tabel
	public function update()
	{
		return $this->db->update($this->table, $data, array('id' => $post['id']))
	}


	//Berfungsi untuk menghapus data pada tabel
	public function delete()
	{
		return $this->db->delete($this->_table, array("id" => $id));
	}
}
?>