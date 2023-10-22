<?php defined('BASEPATH') or exit('No direct script access allowed');

class Item_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->select('p_item.*, p_kategori.name as kategori_name, p_unit.name as unit_name');
		$this->db->from('p_item');
		$this->db->join('p_kategori', 'p_kategori.id_kategori = p_item.id_kategori');
		$this->db->join('p_unit', 'p_unit.id_unit = p_item.id_unit');
		if ($id != null) {
			$this->db->where('id_item', $id);
		}
		$this->db->order_by('barcode', 'asc');
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'barcode' => $post['barcode'],
			'name' => $post['product_name'],
			'id_kategori' => $post['kategori'],
			'id_unit' => $post['unit'],
			'harga' => $post['harga'],
			'image' => $post['image'],
		];
		$this->db->insert('p_item', $params);
	}

	public function edit($post)
	{
		$params = [
			'barcode' => $post['barcode'],
			'name' => $post['product_name'],
			'id_kategori' => $post['kategori'],
			'id_unit' => $post['unit'],
			'harga' => $post['harga'],
			'updated' => date('Y.n.d H:i:s')
		];
		if ($post['image'] != null) {
			$params['image'] = $post['image'];
		}
		$this->db->where('id_item', $post['id']);
		$this->db->update('p_item', $params);
	}

	function check_barcode($code, $id = null)
	{
		$this->db->from('p_item');
		$this->db->where('barcode', $code);
		if ($id != null) {
			$this->db->where('id_item !=', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function del($id)
	{
		$this->db->where('id_item', $id);
		$this->db->delete('p_item');
	}
}
