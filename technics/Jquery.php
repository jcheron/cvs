<?php
namespace technics;

class Jquery {
	private static $scripts=array();
	
	/**
	 * Effectue une requête ajax ver $url en utilisant la méthode $method et affiche le résultat dans $responseSelector<br>
	 * si $immediatly est vrai, la requête sera exécutée immédiatement
	 * @param string $url
	 * @param string $method
	 * @param string $data
	 * @param string $responseSelector
	 * @param boolean $immediatly
	 * @return string
	 */
	public static function ajax($url,$method,$data,$responseSelector,$immediatly=true){
		$result="var url='{$url}';";
		$result.='$.ajax({url: url,method:"'.$method.'",data:"'.$data.'"}).done(function(data){$("'.$responseSelector.'").html(data);});';
		if($immediatly){
			self::$scripts[]=$result;
		}
		return $result;
	}
	
	public static function get($url,$responseSelector,$data="{}",$immediatly=true){
		return self::ajax($url, "get", $data, $responseSelector,$immediatly);
	}
	
	public static function post($url,$responseSelector,$data="{}",$immediatly=true){
		return self::ajax($url, "post", $data, $responseSelector,$immediatly);
	}
	
	public static function getOn($event,$on,$url,$responseSelector,$data="{}"){
		return self::on($event, $on, self::get($url, $responseSelector,$data,false));
	}
	
	public static function postOn($event,$on,$url,$responseSelector,$data="{}"){
		return self::on($event, $on, self::post($url, $responseSelector,$data,false));
	}
	
	public static function on($event,$on,$do){
		$result='$("'.$on.'").'.$event.'(function(e){'.$do.'e.preventDefault();})';
		self::$scripts[]=$result;
		return $result;		
	}
	
	public static function compile(){
		$result="";
		if(count(self::$scripts)>0){
			$result="<script>";
			$result.="$(document).ready(function(){".implode("\n", self::$scripts)."})";
			$result.="</script>";
			self::$scripts=array();
		}
		return $result;
	}
}