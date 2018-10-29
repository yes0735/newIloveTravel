<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Common Hook
 * 
 * @comment
 *    - header, footer 를 처리한다.
 * 
 */
class Common 
{
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function index($h_data=array())
	{
		// body
		$body = $this->CI->output->get_output();
		$this->CI->output->set_output('');

		// 세그먼트
		$segment = $this->CI->uri->uri_string();
		
		if(!strpos($segment, '/')) $segment .= '/admin';
		$data['segment'] = $segment;
	
		//echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.$data['segment'];

		$data['one_depth'] = str_replace('/', '', $this->CI->uri->slash_segment(2)); //1차 메뉴
		$data['tow_depth'] = str_replace('/', '', $this->CI->uri->slash_segment(3)); //2차 메뉴
		//echo '<br/> ==>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.$data['one_depth'];
		//echo '<br/> ==>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.$data['tow_depth'];
		
		// segment 로 admin 페이지 
		//user 페이지 분기처리 해야됨
		
		$this->CI->load->view('admin/admin_header_v', $data);
		$_header = $this->CI->output->get_output();
		$this->CI->output->set_output('');

		$this->CI->load->view('admin/admin_nav_sidebar_v', $data);
		$nav_sidebar = $this->CI->output->get_output();
		$this->CI->output->set_output('');

		$this->CI->load->view('admin/admin_footer_v');
		$footer = $this->CI->output->get_output();
		$this->CI->output->set_output('');

		// 왼쪽메뉴 안보이게 하려면 바로아래꺼 주석 풀고 그 밑에꺼 주석처리 하면됨!
		//echo $_header . $body . $footer;
		echo $_header . $nav_sidebar . $body . $footer;
	}
}

/* End of file common_hook.php */
/* Location: ./application/hooks/common_hook.php */