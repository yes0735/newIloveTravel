<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		/*
		* 컨트로러에서 에코 확인하려면 left메뉴 안보이게 설정하고 해야 뷰페이지에서 보임.. (application > hooks > Common.php 맨 아래 주석참고)
		* 귀찮으면 개발자 도구에서 body 에 padding-left : 300px 설정해서 하면 보임.. ㅠㅠ 부트스트랩 css가..음..
		
		* 요건 배열 확인할때 앞에 pre 태그 써주면 정렬해서 보기 편함!
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		*/
		$this->load->view('admin/admin_dashboard_v', $data);
		
	}
}
