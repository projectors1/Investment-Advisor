<?php require('includes/index_inc.php')?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Investment Guru</title>
    <link rel="icon" href="img/logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/navbar_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <div class="container intro" style="background: url('img/dark.jpg') no-repeat center center;">
      <div class="row">
        <div class="col-xs-12">
          <div id="content">
            <p class="font37">An Average Person has Lot's Of Goal's</p>
            <p class="font37">Per Day/Week/Month/Year...</p>
            <p class="font38">But The Person Who Plans Well Achieve's his GOAL'S.</p>
            <p><a class="btn btn-primary btn-lg" href="signup.php" role="button" id="shadow"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Plan Now!</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="imager">
                    <img src="img/apparth.jpg" alt="An image related to finance in day to day life">
                </div>    
            </div>
            <div class="col-sm-6">
                <p class="para" style="font-family: 'Dosis', sans-serif;">We Will Help You <span class="samespan">PLAN,SAVE AND INVEST EFFECTIVELY.</span></p>
                <p class="para" style="font-family: 'Dosis', sans-serif;">Track Your Goal's And <span class="samespan">Accomplish Them.</span></p>
                <p class="para" style="font-family: 'Dosis', sans-serif;">Investment's are now a vital part to earn more and increase your networth and all of it can be achieved through a good plan.</p>
                <p class="para" style="font-family: 'Dosis', sans-serif;">We will direct you to the most <span class="samespan">risk-free and maximum return MUTUAl FUNDS.</span></p>
                <p class="para" style="font-family: 'Dosis', sans-serif;">So that you can achieve your goal's much faster and also <span class="samespan">earn while you save.</span></p>
            </div>
        </div>
    </div>

    <hr class="hr3d">

    <div class="container" id="contain">
        <p id="header">Check How Much Money You will need to meet Your Goals!</p>
        <p style="text-align:center;" id="calculation">I am <span class="bBorder"><input type="text" id="name" minlength="2" maxlength="30" placeholder="Your Name"></span>, <span class="bBorder"><input type="text" id="age" minlength="1" maxlength="3" size="2"></span> Years old.<br> I am currently 
        <span class="bBorder">
            <select name="status" id="status">
                <option value="employed">Working</option>
                <option value="student">A Student</option>
                <option value="jobless">Unemployed</option>   
            </select>
        </span>, I save <span class="bBorder"><input type="text" id="saving" minlength="2" size="7"></span> 
        <span class="bBorder"><select name="savings" id="savingsType">
            <option value="annually" selected>Annually</option>
            <option value="monthly">Monthly</option>
        </select></span>,<br> I earn <span class="bBorder"><input type="text" id="earning" minlength="2" size="7"></span>
        <span class="bBorder"><select name="earnings" id="earningsType">
            <option value="annually" selected>Annually</option>
            <option value="monthly">Monthly</option>
        </select></span>.</p>
        <p style="text-align:center;"><a class="btn btn-primary" href="#" role="button" id="estimate">Continue</a></p>

        <!-- Will Have to Write a script here To Display a Demo -->
        <div id="resultOfCalculation">

        </div>
    </div>

    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/navbar_script.js"></script>
    <script src="js/footer_script.js"></script>
</body>

</html>