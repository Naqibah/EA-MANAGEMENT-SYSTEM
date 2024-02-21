<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Dashboard.html");
    exit;}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>e-monitoring</title>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Electrolize');
	@import url('https://fonts.googleapis.com/css?family=Alegreya SC');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
body{
	background-image: url(blue.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	padding: 0;
	margin: 0;
}
.nav{
	height: 100%;
	width: 20%;
	position: fixed;
	top: 0;
	left: 0;
	overflow: hidden;
	padding-top: 20px;
	background-color: rgb(255, 255, 255);
}
.nav img{
	width: 200px;
	height: 200px;
	border-radius: 0%;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
.nav p{
	text-align: center;
}
.nav h4{
	text-align: center;
	font-family:'Alegreya SC';
}
.abt{
	margin-left: 0;
	text-align: center;
	background-color: Blue;
	color: rgb(255, 255, 255);
	padding: 4px;
	font-family:"Lucida Console", Courier, monospace;
}
.nav a{
	padding: 6px 8px 6px 16px;
	text-decoration: none;
	color: rgb(0, 0, 0);
	display: block;
	text-align: center;
	font-family: Electrolize;
}
.navve {
	padding: 6px 8px 6px 16px;
	text-decoration: none;
	color: rgb(76,175,80);
	display: block;
	text-align: center;
	font-family: Electrolize;
}
.nav a.active {
  background-color: #4CAF50;
  color: white;
}
.nav a:hover:not(.active){
	background-color: MediumSeaGreen;
	color: rgb(255, 255, 255);
}
.content{
	margin-left: 20%;
}
.info{
	margin: 20px;
}
.info p, table{
	margin-left: 30px;
}
.info h1{
	font-family: 'Bungee';
	text-align: center;
	background-color: #89cff0;
}
.info h3{
	font-family:'Alegreya SC';
}
td {
	border: 1px solid black ;
	text-align: left;
	padding: 8px;
}
tr {
	background-color: #f2f2f2
}
th {
	border: 1px solid black ;
	text-align: center;
	padding: 8px;
	background-color: #4CAF50;
	color: white;
}
table{
	border-collapse: collapse;
	width: 80%;
	font-family: Arial, Helvetica, sans-serif;
	
}
.js{
	margin: 70px;
}
input[type=text], textarea {
	width: 70%;
	padding: 12px;
	border: 1px solid rgb(204, 204, 204);
  	border-radius: 4px;
  	resize: vertical;
}
input[type=submit] {
  	color: white;
 	padding: 12px 20px;
  	border: none;
  	border-radius: 4px;
  	cursor: pointer;
	background-color: #4CAF50;
}
@keyframes animate{
	0%{
		background-position: 0%;
	}
	100%{
		background-position: 400%;
	}
}
@media screen and (max-width: 700px) {
  .nav {
    width: 100%;
    height: auto;
    position: relative;
  }
  .content {
  	margin-left: 0;
  }
}
@media screen and (max-width: 400px) {
  .nav a {
    float: none;
    text-align: center;
  }
  .js input[type=text], textarea {
    width: 100%;
    margin-top: 0;
  }
}

	</style>
</head>
<body>
	<div class="nav">
		<img src="logojpns.jpeg">
		<p class="abt">Selamat Datang</p>
		<h4><b><u>Penukaran Tarikh dan Waktu Taksiran</u></b></h4>
		<a class="active" href="#info">Bahasa Malaysia</a>
		<a href="#exp">Bahasa Inggeris</a>
		<a href="#skills">Sejarah</a>
		<a href="emonitor(school).php"><b>Laman Utama</b></a>
	</div>
	
	<div class="content">
	<div id="contact">
		<div class="info">
			<h1>E - MONITORING<br>(Seremban)</h1><br>
			<form class="js" name="js" action="" method="post">
			<p>Sekolah Ditaksir: <select name="sekolah" required>
			<option	value="">- please select - </option>
			<option	value="SMK Mantin">SMK Mantin</option> 			
			<option	value="SMJK Chan Wa">SMJK Chan Wa</option>
			<option	value="SMK Dato Sheikh Ahmad">SMK Dato Sheikh Ahmad</option> 		
			</select></p>
			<p>Tarikh Ditaksir: <input type="date" name="tarikh" required><p>
			Masa Taksiran: <input type="time" name="masa" required></p></p>
			<p><input type="submit" name="submit" value="Simpan"></p>
			</form>
			<?php
			require_once "config.php";
			if(isset($_POST['submit'])){
			$sekolah = $_POST['sekolah'];
			$tarikh = $_POST['tarikh'];
			$masa = $_POST['masa'];
			
			$sql = "INSERT INTO keputusan(namaSekolah,tarikh,masa,subjek,daerah) VALUES('$sekolah','$tarikh','$masa','Bahasa Malaysia','Seremban')";

			if(mysqli_query($conn, $sql)){
			echo "<b>Permohanan anda telah direkodkan</b>";
			} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
			}
			?>
			</div>
		</div>
	</div>
</body>
</html>