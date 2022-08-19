<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Page');
	}

	public function index()
	{
		$data['mhs']= $this->Model_Page->tampil_mhs('mahasiswa')->result();
		$this->load->view('home', $data);
	}



	public function gabung()
	{
		$this->load->view('gabung', array('error' => ' ' ));
	}

	public function gabung_tambah()
	{
		$config['upload_path']          = './assets/gambar';
	 $config['allowed_types']        = 'img|png|jpeg|gif|jpg';
	 $config['encrypt_name']        = true;
	 $config['max_size']             = 10000000;
	 $config['max_width']            = 10240;
	 $config['max_height']           = 7680;
	 $this->load->library('upload', $config);
	 if ( ! $this->upload->do_upload('foto')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('gabung', $error);
	}else{
					$data = array('foto' => $this->upload->data());
					$uploadData = $this->upload->data();
					$hasil = $uploadData['file_name'];
					$data = array(
					'nama' => $this->input->post('nama'),
					'nim' => $this->input->post('nim'),
					'kelamin' => $this->input->post('kelamin'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'hobi' => $this->input->post('hobi'),
					'agama' => $this->input->post('agama'),
					'alamat_asal' => $this->input->post('alamat_asal'),
					'alamat_kost' => $this->input->post('alamat_kost'),
					'asal_sekolah' => $this->input->post('asal_sekolah'),
					'email' => $this->input->post('email'),
					'wa' => $this->input->post('wa'),
					'ig' => $this->input->post('ig'),
					'quotes' => $this->input->post('quotes'),
					'foto' => $hasil,
				);

				$this->db->insert('mahasiswa',$data);
				$this->session->set_flashdata('sukses',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong> Data anda sedang di verifikasi. Silahkakan tunggu 1x24 jam
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>'
				);
				redirect(base_url());
	}                     
}
	

}
