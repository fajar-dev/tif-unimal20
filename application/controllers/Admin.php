<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	function index(){
		$data['pending'] =  $this->Model_Admin->pending('mahasiswa');
		$data['mahasiswa'] =  $this->Model_Admin->mhs('mahasiswa');
		$data['laki'] =  $this->Model_Admin->laki('mahasiswa');
		$data['perempuan'] =  $this->Model_Admin->perempuan('mahasiswa');

		$data['islam'] =  $this->Model_Admin->islam('mahasiswa');
		$data['protestan'] =  $this->Model_Admin->protestan('mahasiswa');
		$data['katolik'] =  $this->Model_Admin->katolik('mahasiswa');
		$data['hindu'] =  $this->Model_Admin->hindu('mahasiswa');
		$data['budha'] =  $this->Model_Admin->budha('mahasiswa');

		$this->load->view('Admin/dashboard', $data);
	}




	function data_pending()
	{
		$data['pending']= $this->Model_Admin->tampil_pending('mahasiswa')->result();
		$this->load->view('Admin/pending',$data, array('error' => ' ' ));
	}

	function tolak_pending($id)
	{
		$where = array('id'=>$id);
		$this->Model_Admin->tolak_pending('mahasiswa',$where);
		$this->session->set_flashdata('tolak',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							Berhasil Menghapus Data Pending !!
							</div>'
							);
			redirect(base_url('Admin/data_pending'));
	}




	public function terima_pending($id)
	{
						$where = array('id' => $id);
								$data = array(
								'status' => 1
							);

							$this->db->update('mahasiswa',$data,$where);
							$this->session->set_flashdata('terima',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							Berhasil Mengubah status data !!
							</div>'
							);
							redirect(base_url('Admin/data_pending'));
	}                 





	function data_mahasiswa()
	{
		$data['mahasiswa']= $this->Model_Admin->tampil_mahasiswa('mahasiswa')->result();
		$this->load->view('Admin/mahasiswa',$data, array('error' => ' ' ));
	}

	function hapus_mahasiswa($id)
	{
		$where = array('id'=>$id);
		$this->Model_Admin->tolak_pending('mahasiswa',$where);
		$this->session->set_flashdata('hapus',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							Berhasil Menghapus Data Mahasiswa !!
							</div>'
							);
			redirect(base_url('Admin/data_mahasiswa'));
	}




	function edit_mahasiswa($id)
	{
		$where = array('id' => $id);
		$data['mhs']=$this->Model_Admin->detail_data('mahasiswa',$where)->result();
		$this->load->view('Admin/edit', $data);
	}

	public function edit_mhs($id)
	{
						$where = array('id' => $id);
								$data = array(
								'nama' => $this->input->post('nama'),
								'nim' => $this->input->post('nim'),
								'kelamin' => $this->input->post('kelamin'),
								'tempat_lahir' => $this->input->post('tempat'),
								'tgl_lahir' => $this->input->post('tanggal'),
								'hobi' => $this->input->post('hobi'),
								'agama' => $this->input->post('agama'),
								'alamat_asal' => $this->input->post('asal'),
								'alamat_kost' => $this->input->post('kost'),
								'asal_sekolah' => $this->input->post('sekolah'),
								'email' => $this->input->post('email'),
								'wa' => $this->input->post('wa'),
								'ig' => $this->input->post('ig'),
								'quotes' => $this->input->post('quotes')
							);

							$this->db->update('mahasiswa',$data,$where);
							$this->session->set_flashdata('edit',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							Berhasil Mengedit data mahasiswa !!
							</div>'
							);
							redirect(base_url('Admin/data_mahasiswa'));
	}             




	function detail_data($id)
	{
		$where = array('id' => $id);
		$data['mhs']=$this->Model_Admin->detail_data('mahasiswa',$where)->result();
		$this->load->view('Admin/detail_data', $data);
	}




	function data_admin()
	{
		$data['admin']= $this->Model_Admin->tampil_admin('admin')->result();
		$this->load->view('Admin/admin',$data, array('error' => ' ' ));
	}




	function print(){
		$this->db->order_by('nim', 'ASC');
		$data['mhs']= $this->Model_Admin->tampil_mahasiswa('mahasiswa')->result();
		$this->load->view('Admin/print',$data, array('error' => ' ' ));
	}




	function print_mhs($id)
	{
		$where = array('id' => $id);
		$data['mhs']=$this->Model_Admin->detail_data('mahasiswa',$where)->result();
		$this->load->view('Admin/cetak_mhs', $data);
	}
}