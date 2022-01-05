<?php
class Api_model extends CI_Model
{
	function fetch_all()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tb_kamar');
	}

	function insert_api($data)
	{
		$this->db->insert('tb_kamar', $data);
	}

	function fetch_single_user($user_id)
	{
		$this->db->where('id', $user_id);
		$query = $this->db->get('tb_kamar');
		return $query->result_array();
	}

	function update_api($user_id, $data)
	{
		$this->db->where('id', $user_id);
		$this->db->update('tb_kamar', $data);
	}

	function delete_single_user($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete('tb_kamar');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>