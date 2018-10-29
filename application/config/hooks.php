<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

// 웹브라우저에 display 하기전 
/*
$hook['display_override'][] = array(		// 헤더푸터 hook
	'class'    => 'common',
	'function' => 'index',
	'filename' => 'common.php',
	'filepath' => 'hooks'
);
*/

$hook['display_override'] = array(
        'class'    => 'Common',
        'function' => 'index',
        'filename' => 'Common.php',
        'filepath' => 'hooks',
		'params'   => array()
);

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */