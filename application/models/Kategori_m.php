<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('p_kategori');
		if ($id != null) {
			$this->db->where('id_kategori', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post) {
		$params = [
			'name' => $post['kategori_name'],
		];
		$this->db->insert('p_kategori', $params);
	}

	public function edit($post) {
		$params = [
			'name' => $post['kategori_name'],
			'updated' => date('Y.n.d H:i:s')
		];
		$this->db->where('id_kategori', $post['id']);
		$this->db->update('p_kategori', $params);
	}

	public function del($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('p_kategori');
	}
}
