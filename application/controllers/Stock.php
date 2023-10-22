<?php defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['item_m', 'supplier_m']);
	}

	public function stock_in_data()
	{
		$this->template->load('template', 'transaksi/stock_in/stock_in_data');
	}
	public function stock_in_add()
	{
		$item = $this->item_m->get()->result();
		$supplier = $this->supplier_m->get()->result();
		$data = ['item' => $item, 'supplier' => $supplier];
		$this->template->load('template', 'transaksi/stock_in/stock_in_form', $data);
	}

	public function process() {
		if(isset($_POST['in_add'])) {
			echo "proses stock in add";
		}
	}
}
