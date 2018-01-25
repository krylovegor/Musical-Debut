
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
							<hr>
							<center><a href=page1.html class="button big alt scrolly">Назад</a>
							<a href=index.html class="button big alt scrolly">На главную</a><center>
						</header>
							<div>
								
			
							<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "site";

									$conn = mysqli_connect($servername, $username, $password, $dbname);
							
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT * FROM links ORDER BY date DESC";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
										echo "<center><div class=\"video col\"><iframe width=\"560\" height=\"315\" src=\"" . $row['name']."\"  frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe><br></div></center>";
											
										}
									} else {
										echo "<center><h2>Пока ничего нет</h2><center>";
									}

									mysqli_close($conn);
							?>
				
				</section>
				<div class="copyright">
					&copy; Egor Krylov. Design: <a href="https://templated.co">TEMPLATED</a>.
				</div>
		

	</body>
</html>