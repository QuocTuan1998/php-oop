<?php
	
	// include 'class_lib.php';
	/**
	* 
	*/

	class Student extends Person {
		
		var $maSV;
		var $diem;

		function __construct($ten, $tuoi, $gioiTinh, $soDT, $maSV, $diem) {
			parent::__construct($ten, $tuoi, $gioiTinh, $soDT);
			$this->maSV = $maSV;
			$this->diem = $diem;
		}

		// // Getter
		function getMaSV() {
			return $this->maSV;
		}

		function getDiem() {
			return $this->diem;
		}

		// // Setter
		function setMaSV($value) {
			$this->maSV = $value;
		}

		function setDiem($value) {
			$this->diem = $diem;
		}

	}

?>
