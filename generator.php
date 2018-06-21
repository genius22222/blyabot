<?php
/**
 * Created by PhpStorm.
 * User: network
 * Date: 21.06.2018
 * Time: 22:45
 */

namespace blyabot;


class generator {
	public static function scan($file){
		return file($file);
	}
}