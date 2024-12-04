<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Documentation class
 */
class Documentation
{
	use MainController;

	public function index()
	{
		$data['title'] = "Documentation";

		$this->view('documentation', $data);
	}

}
