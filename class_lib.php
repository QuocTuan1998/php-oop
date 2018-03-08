<?php 

	/**
	*  create  class Person (ten, tuoi, gioiTinh,soDT)
	*/

	class Person {
		
		var $ten;
		var $tuoi;
		var $gioiTinh;
		var $soDT;
		
		// construct
		public function __construct($ten, $tuoi, $gioiTinh, $soDT) {
			$this->ten = $ten;
			$this->tuoi = $tuoi;
			$this->gioiTinh = $gioiTinh;
			$this->soDT = $soDT;
		}

		//  getter
		function getTen() {
			return $this->ten;
		}

		function getTuoi() {
			return $this->tuoi;
		}

		function getGioiTinh() {
			return $this->gioiTinh;
		}

		function getSoDT() {
			return $this -> soDT;
		}

		// setter
		function setTen($value) {
			$this->ten = $value;
		}
		
		function setTuoi($value) {
			$this->tuoi = $value;
		}

		function setGioiTinh($value) {
			$this->gioiTinh = $value;
		}

		// function
	
		
	}


?>