<?php

	// include 'class_lib.php';
	// include 'student.php';
	// include 'teacher.php';
	include 'hinh.php';


	$hinh = new Hinh();
	echo "Dien tich hinh vuong : " . $hinh->dienTich(10);
	echo "<br>Dien tich hinh chu nhat : " . $hinh->dienTich(10, 2);

	// $person = new Person("Quốc Tuấn",19,"nam","01552645489");

	// echo "Tên : " . $person->getName() .
	// 	 "<br> Tuổi : " . $person->getAge() . 
	// 	 "<br> giới tính : " . $person->getGender() .
	// 	 "<br> Số đt : " . $person->getPhone();

	// $student = new Student("Quốc Tuấn",19,"nam","01552645489", 55, 8);

	// echo "sinh vien : " . $student->getTen();

	// $teacher = new Teacher("thu", 26, "nu", "13320000","kinh te");

	// echo "<br>" . $teacher->getTen();

	// $hinh = new hinh();
	// $dienTichHV = $hinh->dienTich(5);
	// $dienTichHCN = $hinh->dienTich(6,7);
	// echo "Dien tich hinh vuong : " . $dienTichHV;
	// echo "Dien tich HCN : " . $dienTichHCN;



?>