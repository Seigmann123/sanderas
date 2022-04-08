<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE HTML>

<html>

<head>
    <title>SanderAS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload landing">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1 id="logo"><a href="../index.html">SanderAS</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../employees.html">Employees</a></li>
                    <li><a href="#" class="button primary">Order now!</a></li>
                </ul>
            </nav>
        </header>

       
        <!-- Four -->
        <section id="four" class="wrapper style1 special fade-up">
            <div class="container">
                <header class="major">
                    <h2>Ordere</h2>
                    <p>Nye ordere som må gjøres</p>
                </header>
                <div class="box alt">
                    <div class="row gtr-uniform">
                        <div class="row">
                            <div class="column">
                                <div class="card">
                                    <img src="images/pfp.webp" alt="" style="width:100%">
                                    <div class="container">
                                        <h2>Ole Olsen</h2>
                                        <p class="title">IOS</p>
                                        <p>Gull</p>
                                        <p>Møte neste uke</p>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="card">
                                    <img src="images/pfp.webp" alt="" style="width:100%">
                                    <div class="container">
                                    <h2>Petter Amundsen</h2>
                                        <p class="title">IOS</p>
                                        <p>Sølv</p>
                                        <p>Design ide sent</p>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div id="gull" class="card">
                                    <img src="images/pfp.webp" alt="" style="width:100%">
                                    <div class="container">
                                    <h2>Aksel Rasmussen</h2>
                                        <p class="title">Android</p>
                                        <p>Platinum</p>
                                        <p>Første utkast levert</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; SanderAS. All rights reserved.</li>
                <li>Design: <a href="#">HTML5 UP</a></li>
            </ul>
        </footer>

    </div>
	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/jquery.dropotron.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>

</body>

</html>