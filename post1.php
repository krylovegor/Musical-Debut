<!DOCTYPE HTML>
<html>
	<head>
		<title>Musical Debut</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script scr="jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="assets/css/style.css" />
		<body>
				<section id="banner">
					<div class="inner">
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";
									$link="";
									$today = date('Y-m-d h-i-s');
									$link=$_POST["link"]; 
									$a="https://www.youtube.com/embed/";
									$newlink = $a. substr($link, 32);
									$conn = new mysqli($servername, $username, $password, $dbname);
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}
									if ($link!="")
									{
										$sql = "INSERT INTO `links`(`name`, `date`) VALUES ('$newlink','$today');";	
									}
									if ($conn->query($sql) === TRUE) {
										echo "<h1>Успешно загружено</h1>";
									} else {
										echo "<h1>Error: " . $sql . "</h1><br>" . $conn->error;
									}

									$conn->close();
							
									?>
									<a href=index.html class="button big alt scrolly">На главную</a>
					</div><hr>
					</section>
				<div class="copyright">
					&copy; Egor Krylov. Design: <a href="https://templated.co">TEMPLATED</a>.
				</div>
</html>