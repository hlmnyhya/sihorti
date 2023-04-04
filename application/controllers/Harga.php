<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['harga'] = $this->M_harga->get_data('harga')->result();
		$data['harga'] = $this->M_harga->show_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('harga/tampil_harga',$data);
        $this->load->view('templates/footer');
	}

    public function tambah()
	{
		
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('harga/tambah_harga');
        $this->load->view('templates/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('harga_produsen','harga_produsen','required');
		$this->form_validation->set_rules('harga_grosir','harga_grosir','required');
		$this->form_validation->set_rules('harga_eceran','harga_eceran','required');
		// $this->form_validation->set_rules('id_komoditas','id_komoditas','required');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$id_harga	  	      = $this->input->post('id_harga');
			$harga_produsen  	  = $this->input->post('harga_produsen');
			$harga_grosir 		  = $this->input->post('harga_grosir');
			$harga_eceran   	  = $this->input->post('harga_eceran');

			$data = array(
				'harga_produsen'	=> $harga_produsen,
				'harga_grosir'		=> $harga_grosir,
				'harga_eceran'		=> $harga_eceran,
			);

			$this->M_harga->insert_data($data, 'harga');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('harga');
		}
	}

    public function ubah()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('harga/ubah_harga');
        $this->load->view('templates/footer');
	}

    public function hapus()
	{
		
	}

	public function harga_mingguan()
	{
		$data['harga'] = $this->M_harga->get_data('harga_mingguan')->result();
		$data['harga'] = $this->M_harga->show_data_mingguan()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('harga_mingguan/tampil_hrg_minggu',$data);
        $this->load->view('templates/footer');
	}

}