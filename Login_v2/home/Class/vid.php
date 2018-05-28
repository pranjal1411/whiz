<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if (isset($_SESSION['u_id'])) {
  // Makes it easier to read
  $first_n = $_SESSION['u_first'];
  $last_n = $_SESSION['u_last'];
  $Email = $_SESSION['u_email'];
  $isschool = $_SESSION['is_school'];
}
else {

    $_SESSION['message'] = "You must log in before viewing your profile page!";
		header("location: index.php?error=You must log in before viewing your profile page!");
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>N E E V</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/Login_v2/assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="/Login_v2/home.php" class="logo"><strong><font size="10">N E E V</font></strong> </a>
					<nav id="nav">
						<a href="/Login_v2/logout.php">	<button type="submit" name="login">
									Logout
							</button></a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Addition</h1>

					</header>

					<div class="flex ">

						<div>
                <video width="240" height="180" controls>
                  <source src="movie1.mp4" type="video/mp4">
                  <source src="movie1.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <br>
                <h3>Lesson 1</h3>
            </div>


          <div>
              <video width="240" height="180" controls>
                <source src="movie2.mp4" type="video/mp4">
                <source src="movie2.ogg" type="video/ogg">
                  Your browser does not support the video tag.
              </video>
              <br>
              <h3>Lesson 2</h3>
          </div>

        <div>
            <video width="240" height="180" controls>
              <source src="movie3.mp4" type="video/mp4">
              <source src="movie3.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <br>
            <h3>Lesson 3</h3>
        </div>
  </div>

					<footer>
					<br>
					</footer>

			</section>


		<!-- Scripts <a href="#" class="button"></a> -->
			<script src="/Login_v2/assets/js/jquery.min.js"></script>
			<script src="/Login_v2/assets/js/skel.min.js"></script>
			<script src="/Login_v2/assets/js/util.js"></script>
			<script src="/Login_v2/assets/js/main.js"></script>

	</body>
</html>
