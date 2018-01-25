
<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Broadcast by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Main -->
			<div id="main">
				<section class="wrapper ">
					<div class="inner">
		
						<header class="align-center">
							<h2>Задайте параметры</h2>
						
						</header>
						<form method="get" action="mus.php">
							<select name="city">
							<option>Выберите город</option>
							<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "site";
										$city=$_GET["city"];
										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										// Check connection
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT Distinct city FROM musicians";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
											// output data of each row
											while($row = mysqli_fetch_assoc($result)) {
											echo "<option>".$row['city']."</option>";
												
											}
										}

										mysqli_close($conn);
										
								?>
							</select><br>
							
							<select name="inst">
							<option>Выберите инструмент</option>
							<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "site";
										$inst="%";
										$inst=$_GET["inst"];
										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										// Check connection
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT Distinct MusInst FROM musicians";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
											// output data of each row
											while($row = mysqli_fetch_assoc($result)) {
											echo "<option>".$row['MusInst']."</option>";
												
											}
										} 

										mysqli_close($conn);
										
								?>
							</select><br>
							<select name="genre">
							<option>Выберите жанр</option>
							<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "site";
										$genre="%";
										$genre=$_GET["genre"];
										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										// Check connection
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT Distinct genre FROM musicians";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
											// output data of each row
											while($row = mysqli_fetch_assoc($result)) {
											echo "<option>".$row['genre']."</option>";
												
											}
										} 

										mysqli_close($conn);
										
								?>
							</select><br>
							<center><input type="submit" name="submit" / value="OK"></center>
						</form>
						<table>
							<tr>
								
								<td><strong><center>Имя</center></strong></td>
								<td><strong><center>Фамилия</center></strong></td>
								<td><strong><center>Контакты</center></strong></td>
								<td><strong><center>Жанр</center></strong></td>
								<td><strong><center>Поджанр</center></strong></td>
								<td><strong><center>Инструмент</center></strong></td>
								
						<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";
									if ($inst=='Выберите инструмент')
										{
											$inst='%';
										}
									if ($city=='Выберите город')
										{
											$city='%';
										}
									if ($genre=='Выберите жанр')
										{
											$genre='%';
										}

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT * FROM musicians where (MusInst like '$inst') and (city like '$city') and (genre like '$genre') ORDER BY date DESC";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
										echo 
										"
											<tr>
												<td> <center>"
													.$row['FirstName'].
												"</center></td>
												<td><center>"
													.$row['LastName'].
												"</center></td>
												<td><center>"
													.$row['link'].
												"</center></td>
												<td><center>"
													.$row['genre'].
												"</center></td>
												<td><center>"
													.$row['subgenre'].
												"</center></td>
												<td><center>"
													.$row['MusInst'].
												"</center></td>
											</tr>
										";
											
										}
									}

									mysqli_close($conn);
							?>
							</table>
					</div>
				</section>
			<footer>
		
				<div class="copyright">
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Coverr</a>. Video: <a href="https://coverr.co">Coverr</a>.
								<center><a href=page3.html class="button big alt scrolly">Назад</a>
								<a href=index.html class="button big alt scrolly">На главную</a><center>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>