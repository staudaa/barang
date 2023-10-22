<?php defined('BASEPATH') or exit('No direct script access allowed');

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

class Item extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['item_m', 'kategori_m', 'unit_m']);
	}

	public function index()
	{
		$data['row'] = $this->item_m->get();
		$this->template->load('template', 'produk/item/item_data', $data);
	}

	public function add()
	{
		$item = new stdClass();
		$item->id_item = null;
		$item->barcode = null;
		$item->name = null;
		$item->harga = null;

		$query_kategori = $this->kategori_m->get();
		$kategori[null] = '- Pilih -';
		foreach ($query_kategori->result() as $ktg) {
			$kategori[$ktg->id_kategori] = $ktg->name;
		}

		$query_unit = $this->unit_m->get();
		$unit[null] = '- Pilih -';
		foreach ($query_unit->result() as $unt) {
			$unit[$unt->id_unit] = $unt->name;
		}

		$data = array(
			'page' => 'add',
			'row' => $item,
			'kategori' => $kategori, 'selectedkategori' => null,
			'unit' => $unit, 'selectedunit' => null,
		);
		$this->template->load('template', 'produk/item/item_form', $data);
	}

	public function edit($id)
	{
		$query = $this->item_m->get($id);
		if ($query->num_rows() > 0) {
			$item = $query->row();
			$query_kategori = $this->kategori_m->get();
			$kategori[null] = '- Pilih -';
			foreach ($query_kategori->result() as $ktg) {
				$kategori[$ktg->id_kategori] = $ktg->name;
			}

			$query_unit = $this->unit_m->get();
			$unit[null] = '- Pilih -';
			foreach ($query_unit->result() as $unt) {
				$unit[$unt->id_unit] = $unt->name;
			}

			$data = array(
				'page' => 'edit',
				'row' => $item,
				'kategori' => $kategori, 'selectedkategori' => $item->id_kategori,
				'unit' => $unit, 'selectedunit' => $item->id_unit,
			);
			$this->template->load('template', 'produk/item/item_form', $data);
		} else {
			echo "<script>alert('Datatidak ditemukan');";
			echo "window.location='" . site_url('item') . "';</script>";
		}
	}

	public function process()
	{
		$config['upload_path']          = './uploads/product/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		$config['max_size']             = 20480;
		$config['file_name']            = 'rauda-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			if ($this->item_m->check_barcode($post['barcode'])->num_rows() > 0) {
				$this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Barcode sudah dipakai!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
				redirect('item');
			} else {
				if (@$_FILES['image']['name'] != null) {
					if ($this->upload->do_upload('image')) {
						$post['image'] = $this->upload->data('file_name');
						$this->item_m->add($post);
						if ($this->db->affected_rows() > 0) {
							$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							Data Berhasil Disimpan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span></button></div>');
						}
						redirect('item');
					} else {
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('error', $error);
						redirect('item');
					}
				} else {
					$post['image'] = null;
					$this->item_m->add($post);
					if ($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							Data Berhasil Disimpan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span></button></div>');
					}
					redirect('item');
				}
			}
		} else if (isset($_POST['edit'])) {
			if ($this->item_m->check_barcode($post['barcode'], $post['id'])->num_rows() > 0) {
				$this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Barcode sudah dipakai!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
				redirect('item');
			} else {
				if (@$_FILES['image']['name'] != null) {
					if ($this->upload->do_upload('image')) {

						$item = $this->item_m->get($post['id'])->row();
						if ($item->image != null) {
							$target_file = './uploads/product/' . $item->image;
							unlink($target_file);
						}

						$post['image'] = $this->upload->data('file_name');
						$this->item_m->edit($post);
						if ($this->db->affected_rows() > 0) {
							$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							Data Berhasil Disimpan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span></button></div>');
						}
						redirect('item');
					} else {
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('error', $error);
						redirect('item');
					}
				} else {
					$post['image'] = null;
					$this->item_m->edit($post);
					if ($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							Data Berhasil Disimpan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span></button></div>');
					}
					redirect('item');
				}
			}
		}
	}

	public function del($id)
	{
		$item = $this->item_m->get($id)->row();
		if ($item->image != null) {
			$target_file = './uploads/product/' . $item->image;
			unlink($target_file);
		}

		$this->item_m->del($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('del', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('item');
	}

	function barcode_qrcode($id)
	{
		$data['row'] = $this->item_m->get($id)->row();
		$this->template->load('template', 'produk/item/barcode_qrcode', $data);
	}

	public function coba_qrcode($id)
	{
		$data['row'] = $this->item_m->get($id)->row();
		$this->template->load('template', 'produk/item/barcode_qrcode', $data);
	}

	function barcode_print($id)
	{
		$data['row'] = $this->item_m->get($id)->row();
		$html = $this->load->view('produk/item/barcode_print', $data, true);
		$this->fungsi->PdfGenerator($html, 'barcode-' . $data['row']->barcode, 'A4', 'landscape');
	}
}
