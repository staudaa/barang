<?php defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('supplier');
		if ($id != null) {
			$this->db->where('id_supplier', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post) {
		$params = [
			'nama' => $post['supplier_name'],
			'no_hp' => $post['no_hp'],
			'address' => $post['address'],
			'deskripsi' => empty($post['deskripsi']) ? null : $post['deskripsi'],
		];
		$this->db->insert('supplier', $params);
	}

	public function edit($post) {
		$params = [
			'nama' => $post['supplier_name'],
			'no_hp' => $post['no_hp'],
			'address' => $post['address'],
			'deskripsi' => empty($post['deskripsi']) ? null : $post['deskripsi'],
			'updated' => date('Y.n.d H:i:s')
		];
		$this->db->where('id_supplier', $post['id']);
		$this->db->update('supplier', $params);
	}

	public function del($id)
	{
		$this->db->where('id_supplier', $id);
		$this->db->delete('supplier');
	}
}
