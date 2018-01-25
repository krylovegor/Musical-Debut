<!DOCTYPE HTML>
<html>
	<head>
		<title>Broadcast by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<body>
				<section id="banner">
					<div class="inner">
						<form method="post" action="">
							<h2>Заполните форму</h2>
								<input type="text" name="Name" value="Название" ><br>
								
								<input type="text" name="Site" value="site" ><br>
								
								<input type="text" name="city" value="Город" ><br>
								
								<input type="text" name="address" value="address" ><br>
								
				<input type="text" name="phone" value="phone" ><br>
								
								<input type="text" name="seating_capacity" value="seating_capacity" ><br>
								
								
								<input type="submit" value="OK">
								
								<?php
									error_reporting(-1);
									header('Content-Type: text/html; charset=utf-8');
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";
									$today = date('Y-m-d h-i-s');
									$name=$_POST["Name"];									
									$site=$_POST["Site"];
									$city=$_POST["city"];
									$address=$_POST["address"];
									$phone=$_POST["phone"];
									$seating_capacity=$_POST["seating_capacity"];
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}
	
										$sql = "INSERT INTO `concerts`(`name`, `site`,`phone`,`city`,`address`,`seating_capacity`) VALUES ('$name','$site', '$phone','$city','$address','$seating_capacity');";	
						
									if ($conn->query($sql) === TRUE) {
									} else {
										echo "Error: " . $sql . "<br>" . $conn->error;
									}

									$conn->close();
							
									?>
						</form>
									<a href=page3.html class="button big alt scrolly">Назад</a>
									<a href=index.html class="button big alt scrolly">На главную</a>
					</div><hr>

			



				</section>
				<div class="copyright">
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Coverr</a>. Video: <a href="https://coverr.co">Coverr</a>.
				</div>
	</body>
</html>