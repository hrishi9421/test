<?php 

/**
* 
*/
class C_home extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('home/v_home.php');
	}

	function driver_registration()
	{
		
	}
}

?>