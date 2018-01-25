<!DOCTYPE HTML>
<html>
	<head>
		<title>Musical-Debut</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body class="subpage">	
				<section class="wrapper ">
					<div class="inner">
					<header class="align-center">
						<h2>Концертные площадки</h2>
						</header>
						<form method="get" action="">
							<select name="city">
							<option>Выберите город</option>
							<?php
										$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";
										$city=$_GET['city'];
										
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT Distinct city FROM concerts";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
											
											while($row = mysqli_fetch_assoc($result)) {
											echo "<option>".$row['city']."</option>";
												
											}
										}

										mysqli_close($conn);
										
								?>
							</select><br>
							<center><input type="submit" name="submit" / value="OK"></center>
						</form>
						<table>
							<tr>
								
								<td><strong><center>Название</center></strong></td>
								<td><strong><center>Город</center></strong></td>
								<td><strong><center>Адрес</center></strong></td>
								<td><strong><center>Сайт</center></strong></td>
								<td><strong><center>Телефон</center></strong></td>
								<td><strong><center>Вместимость</center></strong></td>
								
						<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";
									if ($city=='Выберите город')
									{
										$city='%';
									}

									$conn = mysqli_connect($servername, $username, $password, $dbname);
					
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT * FROM concerts where (city like '$city')  ORDER BY city Desc";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									
										while($row = mysqli_fetch_assoc($result)) {
										echo 
										"
											<tr>
												<td> <center>"
													.$row['name'].
												"</center></td>
												<td><center>"
													.$row['city'].
												"</center></td>
												<td><center>"
													.$row['address'].
												"</center></td>
												<td><center><a href=\"http://"
													.$row['site'].
												"\">"
												.$row['site'].
												"</a></center></td>
												<td><center>"
													.$row['phone'].
												"</center></td>
												<td><center>"
													.$row['seating_capacity'].
												"</center></td>
											</tr>
										";
											
										}
									}

									mysqli_close($conn);
							?>
							</table>
					</div>
					<div class="inner">
					<center>
							<a href=index.html class="button big alt scrolly">На главную</a><center>
					</div>
				</section>
			<div class="copyright">
					&copy; Egor Krylov. Design: <a href="https://templated.co">TEMPLATED</a>.
				</div>


	</body>
</html>