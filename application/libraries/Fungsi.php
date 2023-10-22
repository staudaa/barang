<?php

class Fungsi
{

	protected $ci;

	function __construct()
	{
		$this->ci = &get_instance();
	}

	function user_login()
	{
		$this->ci->load->model('user_m');
		$id_user = $this->ci->session->userdata('iduser');
		$user_data = $this->ci->user_m->get($id_user)->row();
		return $user_data;
	}

	function PdfGenerator($html, $filename, $paper, $orientation)
	{
		$dompdf = new Dompdf\Dompdf();
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($paper, $orientation);

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream($filename, array('Attachment' => 0));
		//Attachment untuk preview
	}
}
