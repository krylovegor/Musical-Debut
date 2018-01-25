
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

			<!-- One -->
			

			<!-- Three -->
				<section class="wrapper ">
					<div class="inner">
						<header class="align-center">
							<h2>Надо не забыть написать</h2>
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
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
										echo "<center><div class=\"video col\"><iframe width=\"560\" height=\"315\" src=\"" . $row['name']."\"  frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe><br></div></center>";
											
										}
									} else {
										echo "<center><h2>Пока ничего нет</h2><center>";
									}

									mysqli_close($conn);
							?>
				
				</section>

			</div>
				<div class="copyright">
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Coverr</a>. Video: <a href="https://coverr.co">Coverr</a>.
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