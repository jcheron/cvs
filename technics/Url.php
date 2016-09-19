<?php
namespace technics;
class Url{
	public static function get($url){
		global $base_href;
		return $base_href.$url;
	}
}