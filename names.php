<?php
/**
 * Created by PhpStorm.
 * User: network
 * Date: 21.06.2018
 * Time: 21:57
 */


namespace blyabot;

require_once 'base.php';

class names {
	public static function getName(){
		//сначала рандомом выберем личность
		$person = rand(1, base::getCountLines());
		//теперь получим имя и фамилию
		$person = base::getLineFromId($person);
		return $person->fetch_object();
    }
}

names::getName();