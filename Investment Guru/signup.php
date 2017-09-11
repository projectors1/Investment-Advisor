<!doctype html>

<html>

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">   
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>

<body>
    <?php
        include_once 'navbar.php';
    ?>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form method="POST">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Login with</h4>
                                <div class="social-login">
                                    <a class="btn btn-icon">
                                        <i class="fa fa-facebook-square fa-2x"></i>
                                    </a>
                                    <a class="btn btn-icon">
                                        <i class="fa fa-twitter-square fa-2x"></i>
                                    </a>
                                    <a class="btn btn-icon">
                                        <i class="fa fa-google-plus-square fa-2x"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="division">
                                <div class="line l"></div>
                                <span style="font-size:18px">or</span>
                                <div class="line r"></div>
                            </div>

                            <div class="card-form">
                                <div class="input-group form-margin no-margin">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input id="user-name" type="text" class="form-control" name="name" placeholder="Name">
                                </div>

                                <div class="input-group form-margin">
                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="input-group form-margin">
                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                                <div class="input-group form-margin">
                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    <input id="confirm-password" type="password" class="form-control" name="password" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="card-button">
                                <div class="row checkbox switch-container">
                                    <label class="col-md-2 switch">
                                      <input type="checkbox"  id="chbx_terms">
                                      <span class="slider"></span>
                                    </label>
                                    <label class="col-md-10 switch-label">I agree to the <a href="#">terms and conditions</a></label>
                                </div>

                                <div class="form-margin row">
                                    <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">  
                                        <button onclick="location.href='login.php'" type="button" class="btn btn-main">SIGN UP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/navbar_script.js"></script>
</body>

</html>