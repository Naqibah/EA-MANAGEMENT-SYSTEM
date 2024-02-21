<?php
require_once "config.php";
	if(isset($_POST['submit'])){
		$ic = $_POST['noic1'];
		$nama = $_POST['name1'];
		$subjek = $_POST['subjek1'];
		}
	$sql = "INSERT INTO ketpentaksir(ic, nama, subjek, jawatan, daerah) VALUES ('$ic', '$nama', '$subjek', 'Ketua pentaksir', 'Seremban')";
			
	if(mysqli_query($conn, $sql)){
		echo "<div>
			Data telah berjaya Disimpan
			<p>Klik disini untuk ke<a href='emonitor(JPN).php'>Laman Utama</a></p>
		</div>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}	
?>