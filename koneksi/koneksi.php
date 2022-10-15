<!-- koneksi -->
<?php

$koneksi = mysqli_connect("localhost", "root", "", "topsis");
if (!$koneksi) {
	echo "koneksi database gagal = " . mysqli_connect_error();
}

?>