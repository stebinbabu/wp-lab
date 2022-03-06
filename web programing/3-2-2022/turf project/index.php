<?php
session_start();
?>
<html>
<head>
	<title>Web</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div>
	<?php
            require 'header.php';
           ?>
	<header>
		<div class="main">
			<div class="logo">
				<img src="image/logot.jpg">
			</div>
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown"><a href="javascript:void(0)" class="btn">sports item</a>
				<div class="dropdown-content">
					
					<a href="book.php">football</a>
			
				</div></li>
				<li><a href="success.php">booking status</a></li>
				<li><a href="admin/adminhome.html">Admin</a></li>
				<li><a href="#">about us</a></li>
			</ul>
		</div>
	</header>

	
	
<div class="bodysec">
		<!-- Portfolio Gallery Grid -->
		<div class="row">
			<div class="column">
				<div class="content">
					<img src="image/freew.jpg" alt="water" style="width: 100%">
					<h3>free drinking water</h3>
					</div>
		</div>
		<div class="column">
				<div class="content">
					
					<img src="image/freeparking1.jpg" alt="parking" style="width: 100%">
			
					<h3>heavy parking spacae is avalialble</h3>
			</div>
		</div>
		<div class="column">
				<div class="content">
					<img src="image/sitem.jpg" alt="accesories" style="width: 100%">
					<h3>sports accesories arre provided</h3>
			</div>
		</div>
		
		<div class="column">
				<div class="content">
				
					<img src="image/review.jpg" alt="about" style="width: 100%">
					<h3>About</h3>
			</div>
		</div>
	</div>
</div>
<footer>

</footer>
</div>
</body>
</html>