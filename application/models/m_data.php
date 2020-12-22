<?php

class M_data extends CI_Model
{
	function tampil_berita()
	{
		return $this->db->get('tbl_berita');
	}
}
