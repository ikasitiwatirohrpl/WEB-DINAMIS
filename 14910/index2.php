<!DOCTYPE html>
<html>
<head>
	<title>FOOD & DRINK</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : ika siti watiroh 
-->
<div class="content">
	<center><h2>FOOD & DRINK HELLO iKA</h2>
	<p><code>Selamat datang & Selamat menikmati</code></p></center>
 
	<div class="menu">
		<ul>
			<li><a href="index2.php?page=home">HOME</a></li>
			<li><a href="index2.php?page=tentang">MAKANAN</a></li>
			<li><a href="index2.php?page=tutorial">MINUMAN</a></li>
			<li><a href="logout.php?page=logout">Logout</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
<center> 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "index.php";
				break;
			case 'tentang':
				include "halaman1.php";
				break;
			case 'tutorial':
				include "halaman2.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "index.php";
	}
 
	 ?>
 </center>
	</div>
</div>
</body>
</html>