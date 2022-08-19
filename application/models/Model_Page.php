<?php
class Model_Page extends CI_Model
{
	function tampil_mhs($table)
	{
		return $this->db->get_where($table,array('status'=>1));
	}
}