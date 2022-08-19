<?php
class Model_Admin extends CI_Model
{
	//rows----------------------------
	function pending($table)
	{
		return $this->db->get_where($table,array('status'=>0))->num_rows();
	}
	function mhs($table)
	{
		return $this->db->get_where($table,array('status'=>1))->num_rows();
	}
	function laki($table)
	{
		return $this->db->get_where($table,array('kelamin'=>'laki-laki'))->num_rows();
	}
	function perempuan($table)
	{
		return $this->db->get_where($table,array('kelamin'=>'perempuan'))->num_rows();
	}
	

	function islam($table)
	{
		return $this->db->get_where($table,array('agama'=>'islam'))->num_rows();
	}
	function protestan($table)
	{
		return $this->db->get_where($table,array('agama'=>'kristen protestan'))->num_rows();
	}
	function katolik($table)
	{
		return $this->db->get_where($table,array('agama'=>'katolik'))->num_rows();
	}
	function hindu($table)
	{
		return $this->db->get_where($table,array('agama'=>'hindu'))->num_rows();
	}
	function budha($table)
	{
		return $this->db->get_where($table,array('agama'=>'budha'))->num_rows();
	}


	

	function tampil_pending($table)
	{
		return $this->db->get_where($table,array('status'=>0));
	}

	function tolak_pending($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}




	function tampil_mahasiswa($table)
	{
		return $this->db->get_where($table,array('status'=>1));
	}

	function hapus_mahasiswa($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}




	function detail_data($table, $where)
	{
		return $this->db->get_where($table,$where);
	}




	function tampil_admin($table)
	{
		return $this->db->get($table);
	}
	
}