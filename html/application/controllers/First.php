<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public function index()
	{
		echo " 내가 만든 첫 번째 컨트롤러";
	}

	public function my()
	{
		echo "내 꺼야";
	}

}
