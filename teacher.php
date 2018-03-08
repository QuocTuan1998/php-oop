<?php


	/**
	* 
	*/
	class Teacher extends Person{
		
		var $khoa;

		function __construct($ten, $tuoi, $gioiTinh, $soDT, $khoa) {
			parent::__construct($ten, $tuoi, $gioiTinh, $soDT);
			$this->khoa = $khoa;
			
		}

		// getter
		function getKhoa() {
			return $this->khoa;
		}

		// setter
		function setKhoa($value) {
			$this->khoa = $value;
		}

		// override
		function getTen() {
			return "ten giao vien : " . $this->ten;
		}

		

	}

?>