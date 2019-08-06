<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$position = $_POST['position'];
		$salary = $_POST['salary'];
		$umur = $_POST['umur'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_pegawai (nama,posisi,gaji,umur) VALUES ('$name','$position','$salary','$umur')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Pegawai';
		}else{
		echo 'Gagal Menambahkan Pegawai';
		}
		
		mysqli_close($con);
	}
?>