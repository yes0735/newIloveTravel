<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * 생성자
	 *
	 */
	function __construct()
	{
		parent::__construct();
		$this->CI = & get_instance();
		//$this->load->model('/manager/menu_m','menu_m',TRUE);
	}
	function _remap($method)
	{
		$data['method'] = $method;
		//$data = array();
		//$data['border_menu'] = $this->menu_m->select_board_tree();
		
		//해당 메소드 호출
		$this->{$method}($data);
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($data = array())
	{
		$this->load->view('admin/customer/admin_list_member_v', $data);
		
	}
}
