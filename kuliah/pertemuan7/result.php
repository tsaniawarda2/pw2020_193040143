<?php



//fungsi
function ceklogin($username, $password){
	if($username == "admin" && $password == "12345") {
		echo "Selamat Datang Admin";
	}else{
	echo "Username / Password salah";
}
}

//eksekusi
$username = $_GET['username'];
$password = $_GET['password'];
ceklogin($username,$password);

?>