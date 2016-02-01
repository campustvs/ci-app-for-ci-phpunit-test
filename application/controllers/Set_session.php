<?php

class Set_session extends CI_Controller
{
	public function get_session_variable()
	{
		$this->load->library('session');
		echo $this->session->test_variable;
	}
}
