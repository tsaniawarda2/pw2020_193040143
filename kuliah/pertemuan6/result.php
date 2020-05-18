<?php 
	// echo "Ini adalah tampilan hasil";
	// 	echo "<hr>";

	// echo "Username : ".$_GET['username']."<br>";
	// echo "Password : ".$_GET['password']."<br>";

	//FUNGSI
		function ceklogin($username,$password){
			if ($username == "tsaniawarda" && $password == "1234567890") {
				echo "Berhasil Login";
			} else {
				echo "Gagal Login";
			}
		}

		//eksekusi
		$username = $_GET['username'];
		$password = $_GET['password'];
		ceklogin($username, $password)
 ?>