<?php

class Blog_widget
{
	public function list_latest()
	{
		$CI =& get_instance();
		
		$CI->load->view('blog/list_latest');
	}
}
