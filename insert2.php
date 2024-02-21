<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "monitor"; 
$conn = mysqli_connect($host, $username, $password, $db);

//CHECK CONNECTION
	if(!$conn) 
	{
		die("Connection Failed; ".mysqli_connect_error());
	}
	
	echo " ";

//CREATE DATABASE
	//$sql = "CREATE DATABASE db1";

//CREATE TABLE
	/*$sql = 'CREATE TABLE KETpentaksir(
	ic INT(255) PRIMARY KEY NOT NULL,
	nama VARCHAR(255) NOT NULL )' ;
	
	$sql2 = 'CREATE TABLE pentaksir(
	ic INT(255) PRIMARY KEY NOT NULL,
	nama VARCHAR(255) NOT NULL,
	namaSekolah VARCHAR(255) NOT NULL,
	tarikh DATE NOT NULL,
	masa TIME NOT NULL ,
	subjek VARCHAR(255) NOT NULL )'; 
	
	$sql3 = 'CREATE TABLE pentaksir2(
	ic INT(255) PRIMARY KEY NOT NULL,
	nama VARCHAR(255) NOT NULL,
	namaSekolah VARCHAR(255) NOT NULL,
	tarikh DATE NOT NULL,
	masa TIME NOT NULL ,
	subjek VARCHAR(255) NOT NULL )'; */ 
	
	
//ASSIGN INPUT FROM HTML FORM
	if(isset($_POST['submit2'])){
		$ic2 = $_POST['noic2'];
		$nama2 = $_POST['name2'];
		$sekolah2 = $_POST['sekolah2'];
		$tarikh2 = $_POST['tarikh2'];
		$masa2 = $_POST['masa2'];
		$subjek2 = $_POST['subjek2'];
		$ic3 = $_POST['noic3'];
		$nama3 = $_POST['name3'];
		$sekolah3 = $_POST['sekolah3'];
		$tarikh3 = $_POST['tarikh3'];
		$masa3 = $_POST['masa3'];
		$subjek3 = $_POST['subjek3'];
	}
	
 
	$sql2 = "INSERT INTO pentaksir(ic, nama, namaSekolah, tarikh, masa, subjek, jawatan, daerah) 
	VALUES ('$ic2', '$nama2','$sekolah2', '$tarikh2','$masa2', '$subjek2', 'Pentaksir', 'Seremban');";  
	$sql2 .= "INSERT INTO pentaksir(ic, nama, namaSekolah, tarikh, masa, subjek, jawatan, daerah) 
	VALUES ('$ic3', '$nama3','$sekolah3', '$tarikh3','$masa3', '$subjek3', 'Pentaksir', 'Seremban');";
	
if (mysqli_multi_query($conn, $sql2)) {
  echo "<div>
			Data telah berjaya Disimpan
			<p>Klik disini untuk ke<a href='emonitor(JPN).php'>Laman Utama</a></p>
		</div>";
} else {
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>