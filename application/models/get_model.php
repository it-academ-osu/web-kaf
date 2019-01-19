<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model
{
	function m_menu()
	{
		 $this->db->where('id_parent', 14);
		 $this->db->order_by('id', 'ASC');
		$query = $this->db->get('ex_menu');
		return $query->result_array();
	}
}
?>
