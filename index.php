<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>personweb</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="./style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
	<!-- partial:index.partial.html -->
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Personal Website</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	</head>

	<body>
		<header id="top">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="header-menu">
						<div class="navbar-header">
							<a class="navbar-brand logo" href="#top">Anri Noorahim</a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigat ion</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="main-menu">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#top">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#sertification">Sertification</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header><!-- Header Menu end -->
		<div id="top" class="main-top">
			<div class="main-top-content">
				<h2>I am <span>Anri Noorahim</span></h2>
				<p>I am Student at University Kebangsaan Republik Indonesia</p>
				<ul class="social" <li><a href="https://instagram.com/anrinoorahim" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://github.com/noorahim" target="_blank"><i class="fa fa-github"></i></a></li>
					<li><a href="https://facebook.com/anrinoorahim" target="_blank"><i class="fa fa-facebook"></i></a></li>
				</ul>
			</div>
		</div><!-- Header top content end -->
		<div id="about" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-9" style="text-align: center;">
						<div class="about-me">
							<h2>Let me intorduct myself</h2>
							<h3>I am Anri Noorahim. I'm a student at the University Kebangsaan Republik Indonesia, in an informatics engineering study program, I took part in the Kampus Merdeka program at PT.GITS Indonesia as a fullstack web developer. I have experience working at PT.Ardendi jaya sentosa as a Station Staff and Operator Staff in the electric vehicle division</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="author">
							<img src="img/img2.jpg" alt="foto">
						</div>
					</div>
				</div>
			</div>
		</div> <!-- About section end -->
		<div id="sertification">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-head">
							<h3>My Certification</h3>
						</div>
					</div>
					<div class="row">
						<div class="single-work">
							<img src="img/jdg.png" alt=""></a>
							<p style="text-align: center;">Junior Design Graphic BNSP(2019)</p>
						</div>
						<div class="single-work">
							<img src="img/jna.png" alt=""></a>
							<p style="text-align: center;">Junior Network Administrator BNSP(2019)</p>
						</div>
						<div class="single-work">
							<img src="img/jwd2.jpg" alt=""></a>
							<p style="text-align: center;">Junior Web Developer BNSP(2022)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="contact" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-head">
							<h3>Contact Me</h3>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-form">
							<form action="" method="post" class="my-contact-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="f_name" id="f_name" placeholder="First Name">
									</div>
									<div class="col-md-6">
										<input type="text" name="l_name" id="l_name" placeholder="Last Name">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="email" name="email" id="email" placeholder="Last email">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" id="submit" value="Send">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-address">
							<h2>Get In Touch</h2>
							<div class="row">
								<div class="contact-details">
									<div class="col-md-2 col-md-offset-2">
										<p>Phone:</p>
									</div>
									<div class="col-md-8">
										<p>+62 81214222520</p>
									</div>
									<div class="col-md-2 col-md-offset-2">
										<p>Email:</p>
									</div>
									<div class="col-md-8">
										<p>noorahim14@gmail.com</p>
									</div>
									<div class="col-md-2 col-md-offset-2">
										<p>Address:</p>
									</div>
									<div class="col-md-8">
										<p>Kopo Sayati Street , Margahayu, Kabupaten Bandung, Indonesia</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	</html>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script src="./script.js"></script>

</body>

</html>