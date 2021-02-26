<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Main extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->helper("url");
	}

	public function tampil_()
	{
		$this->load->view("");
	}
?>