<?php
/**
 * Created by PhpStorm.
 * User: network
 * Date: 21.06.2018
 * Time: 21:58
 */

namespace blyabot;


class base {
	private static function connect(){
		return new \mysqli('localhost', 'root', '', 'blyabot');
	}
	public static function getCountLines(){
		$bd = self::connect();
		$result = $bd->query('SELECT COUNT(1) FROM `names`');
		$result = mysqli_fetch_array($result);
		return $result[0];
	}
	public static function getLineFromId($id){
		$bd = self::connect();
		return $bd->query('SELECT * FROM `names` WHERE `id`='.$id);
	}
}