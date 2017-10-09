<?php require('includes/howitworks_inc.php')?>

<html>

<head>
    <title>How It Works</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/howitworks_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <section class="main-section">
		<div class="container">
			<div class="timeline">
				<div class="contain left">
					<div class="content">
						<h2>Step 1:</h2>
						<p>The login and registration process.If you are a new user, you will have to create an account to us the application.To create an account, fill in the details in the form the appears by clicking the sign up tab. If you are already a registered user, login into your account by entering your username and password at the login tab.</p>
					</div>
				</div>
				<div class="contain right">
					<div class="content">
						<h2>Step 2:</h2>
						<p>Once you have logged in, You are required to enter your personal and financial details which are essential for the application. Without these information, we wont be able to provide you with an accurate result.</p>
					</div>
				</div>
				<div class="contain left">
					<div class="content">
						<h2>Step 3:</h2>
						<p>Now you are to enter your required goal and also specify the time by which you want to achieve this goal.</p>
					</div>
				</div>
				<div class="contain right">
					<div class="content">
						<h2>Step 4:</h2>
						<p>As a result, you will be given the amount which has to be saved in order to acheive your goal within your required time. An option of Mutual funds will also be given to you so that you can earn while you save. We will provide you with a list of available mutual funds with their return rate, so you can decide whether you want to invest in mutual funds and if so, which will be the most suitable </p>
					</div>
				</div>
			</div>
		</div>
    </section>

    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
    <script src="js/navbar_script.js"></script>
</body>

</html>
