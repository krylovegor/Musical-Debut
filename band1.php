<!DOCTYPE HTML>
<html>
	<head>
		<title>Broadcast by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script scr="jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<body>
				<section id="banner">
					<div class="inner">
									<?php
									error_reporting(-1);
									header('Content-Type: text/html; charset=utf-8');
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";
									$today = date('Y-m-d h-i-s');
									$FirstName=$_POST["FirstName"];									
									$LastName=$_POST["LastName"];
									$link=$_POST["link"];
									$MusInst=$_POST["s"];
									$city=$_POST["city"];
									$genre=$_POST["genre"];
									$subgenre=$_POST["subgenre"];
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}
										$sql = "INSERT INTO `musicians`(`FirstName`, `LastName`,`MusInst`,`link`,`date`,`city`,`genre`,`subgenre`) VALUES ('$FirstName','$LastName', '$MusInst','$link','$today','$city','$genre','$subgenre');";	
									
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
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Coverr</a>. Video: <a href="https://coverr.co">Coverr</a>.
				</div>
	</body>
</html>