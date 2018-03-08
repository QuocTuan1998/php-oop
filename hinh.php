<?php 
	
	/**
	* Overloading Example 
	*/

	class Hinh {
		
		var $canh;
		var $dai;

		function __call($method, $parameter) {
			if ($method == "dienTich") {
				switch (count($parameter)) {
					case 1:
						return $parameter[0] * $parameter[0];
						break;
					case 2:
						return $parameter[0] * $parameter[1];
						break;
					
				}
			}
		}
	}

?>