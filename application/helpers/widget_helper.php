<?php
/**
 * Widget helper for CodeIgniter 3
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2016 Kenji Suzuki
 * @link       https://github.com/kenjis/codeigniter-widgets
 */

/**
 * Widget helper
 * 
 * @staticvar Myth\Bay\Bay $bay
 * @param string $library    Widget library and method
 * @param array  $params     Params for the method
 * @param int    $cache_ttl  Time to live (in minutes)
 * @param string $cache_name Cache name
 * @return string
 */
function widget($library, $params = null, $cache_ttl = 0, $cache_name = null)
{
	static $bay;

	if ($bay === null)
	{
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'file'));
		
		$bay = new Myth\Bay\Bay(
			new Myth\Bay\CI3Finder(),
			new Myth\Bay\CI3Cache()
		);
	}

	return $bay->display($library, $params, $cache_name, $cache_ttl);
}
