<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller 
{
	public function main()
	{
		$this->date = date('M d, Y');
		$this->time = date('g:i A');
		$this->load->view('time_view');
	}
}
