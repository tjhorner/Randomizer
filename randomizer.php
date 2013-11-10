<?php
	class Randomizer{
		function randomArray($array, $times = 1){
			$numObjects = count($array);
			$randomObject = rand(1, $numObjects) - 1;
			$string = $array[$randomObject];
			return($string);
		}
		
		function randomString($l = 6, $o = 'normal'){
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$randomString = '';
			for ($i = 0; $i < $l; $i++) {
				$randomString .= $characters[rand(0, strlen($characters) - 1)];
			}
			if($o == 'upper'){
				$randomString = strToUpper($randomString);
			}else if($o == 'lower'){
				$randomString = strToLower($randomString);
			}
			return $randomString;
		}
	}
?>