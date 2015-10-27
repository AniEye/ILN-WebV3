<!DOCTYPE html>

<html>
	<head>
		<title>ILN About Us</title>
		<meta charset="utf-8">	
		<meta name="title" content="ILN About Us">
		<meta name="author" content="Andre Laugaland, Ali Ahmend Shazada">
		<meta name="description" content="Contains information about the International Librarians Network">
		<meta name="keywords" content="ILN About Us, About Us, About the ILN">
		<meta name="publisher" content="ILN">
		<meta name="created" content="2015-10-31">
		
		<!-- Bootstrap and JQuery -->
		<link rel="stylesheet" href="css/bootstrap.min.css">			
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="css/header.css">
		<script src="js/header.js"></script>
		
		<link rel="stylesheet" href="css/footer.css">
	</head>
	<body>
		
		<?php include "global/header.php"; ?>
			
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<?php include "content/c_about_us.php"; ?>
				</div>
				<div class="col-md-3">
					<?php include "right_column/rc_about_us.php"; ?>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 footer">
					<?php include "global/footer.php"; ?>
				</div>
			</div>
		</div>
		
	</body>
</html>