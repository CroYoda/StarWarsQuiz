<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Star Wars Quiz</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <!-- My css-->
  	<link href="css/custom.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quiz.php">Quiz</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="overlay">
            <div class="container">
                <h1 class="display-1 text-white"></h1>
                <h2 class="display-4 text-white"></h2>
            </div>
        </div>
    </header>
	<main>
		<div class="containter">
      <br/>
      <br/>
      <br/>
			<h2 class ="done">You' re Done!</h2>
      <br/>
			<p class="final">“Great, kid. Don’t get cocky.” – Han Solo</p>
			<p>Final Score: <?php echo $_SESSION['score'] ?></p>
			<a href="quiz.php"><p class="start center">Take Again</a>
		</div>
	</main>
  <section>
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6 push-md-6">
                  <div class="p-5">
                      <img class="img-fluid rounded-circle" src="img/yoda.jpg" alt="">
                  </div>
              </div>
              <div class="col-md-6 pull-md-6">
                  <div class="p-5">
                      <h2 class="display-4">Do or do not, there is no try!</h2>

                  </div>
              </div>
          </div>
      </div>
  </section>

  	<!-- Footer -->
	<footer class="py-5 bg-inverse">
			<div class="container">
					<p class="m-0 text-center text-white">Copyright &copy; CroYoda2017</p>
			</div>
			<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/tether/tether.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
