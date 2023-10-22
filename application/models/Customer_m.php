<?php defined('BASEPATH') or exit('No direct script access allowed');

class Customer_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('customer');
		if ($id != null) {
			$this->db->where('id_customer', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post) {
		$params = [
			'nama' => $post['customer_name'],
			'gender' => $post['gender'],
			'no_hp' => $post['no_hp'],
			'address' => $post['address']		
		];
		$this->db->insert('customer', $params);
	}

	public function edit($post) {
		$params = [
			'nama' => $post['customer_name'],
			'gender' => $post['gender'],
			'no_hp' => $post['no_hp'],
			'address' => $post['address'],
			'updated' => date('Y.n.d H:i:s')
		];
		$this->db->where('id_customer', $post['id']);
		$this->db->update('customer', $params);
	}

	public function del($id)
	{
		$this->db->where('id_customer', $id);
		$this->db->delete('customer');
	}
}
