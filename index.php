<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form</title>

	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<header>
		<div class="container">
			<h3>TYLER POTTS</h3>
			<nav class="menu">
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Products</a>
				<a href="#" class="is-active">Contact</a>
			</nav>
		</div>
	</header>
	<section class="contact-form">
		<h1>Contact us</h1>
		<div class="container">
			<form action="mail.php" method="POST">
				<h2>Send us a message</h2>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-element" />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-element" />
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" name="subject" id="subject" class="form-element" />
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" id="message" class="form-element"></textarea>
				</div>
				<input type="submit" value="Send Mail" />

				<!-- CATCH SUCCESS OR ERROR -->
				<?php if ($_GET['success'] == "202") : ?>
				<div class="success">Email sent Successfully</div>
				<?php elseif (!empty($_GET['success']) && $_GET['success'] != "202") : ?>
				<div class="error">There's been an error, please try again later.</div>
				<?php endif; ?>
			</form>
		</div>
	</section>

	<script>
		window.history.pushState({}, document.title, "/");
	</script>
</body>
</html>