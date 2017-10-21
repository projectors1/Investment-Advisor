<?php require('includes/profile_inc.php')?>

<html>

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/profile_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer-min_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <section class="profile-section">
                <div class="container-fluid">                   
                    <div id="alert_success" class="alert alert-success" role="alert"><?= $_SERVER['alertSuccess'] ?></div>
                    <div id="alert_danger" class="alert alert-danger" role="alert"><?= $_SERVER['alertDanger'] ?></div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Personal Info</div>
                                <div class="card-form">
                                    <form class="form-horizontal" action="" method="POST" autocomplete="off">
                                        <div class="form-group">                                           
                                            <div class="col-md-6">
                                                <label>First name *</label>
                                                <input name="txt_firstname" type="text" class="form-control margin-bottom" placeholder="eg: Sachin" value="<?php echo $firstname ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last name *</label>
                                                <input name="txt_lastname" type="text" class="form-control" placeholder="eg: Tendulkar" value="<?php echo $lastname ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label>Email *</label>
                                                <input type="email" class="form-control margin-bottom" placeholder="eg: example@company.com" value="<?php echo $email ?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date of birth *</label>
                                                <input name="txt_dob" type="date" class="form-control margin-bottom" value="<?php echo $dob ?>">  
                                            </div>
                                            <div class="col-md-4">
                                                <label>Status *</label>
                                                <div class="btn-group btn-input clearfix">
                                                    <button type="button" class="btn btn-transparent dropdown-toggle form-control" data-toggle="dropdown">
                                                        <span data-bind="label"><?php echo $status ?></span><span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Student</a></li>
                                                        <li><a href="#">Employed</a></li>
                                                        <li><a href="#">Unemployed</a></li>
                                                    </ul>
                                                    <input name="sel_status" type="hidden" id="dropdown-data"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>City *</label>
                                                <input name="txt_city" type="text" class="form-control margin-bottom" placeholder="eg: Mumbai" value="<?php echo $city ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Country *</label>
                                                <input name="txt_country" type="text" class="form-control" placeholder="eg: India" value="<?php echo $country ?>">
                                            </div>
                                        </div>

                                        <div class="form-group form-group-button">
                                            <div class="col-md-2 col-md-offset-10 col-xs-6 col-xs-offset-6">
                                                <button name="btn_personal" type="submit" class="btn btn-primary btn-main">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Financial Info</div>
                                <div class="card-form">
                                    <form class="form-horizontal" action="" method="POST" autocomplete="off">
                                        <div class="form-group col-md-12">
                                            <label>Monthly income</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input name="txt_income" type="number" class="form-control" placeholder="eg: 25,000" value="<?php echo $income ?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Expenses</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input name="txt_expenses" type="number" class="form-control" placeholder="eg: 20,000" value="<?php echo $expenses ?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">  
                                            <label>Savings</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input name="txt_savings" type="number" class="form-control" placeholder="eg: 4,000" value="<?php echo $savings ?>">
                                            </div>
                                        </div>

                                        <div class="form-group form-group-button">
                                            <div class="col-md-4 col-md-offset-8 col-xs-6 col-xs-offset-6">
                                                <button name="btn_finance" type="submit" class="btn btn-primary btn-main">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <?php require_once('footer-min.php'); ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
    <script src="js/dropdown_script.js"></script>
    <script src="js/validate_script.js"></script>
</body>

</html>