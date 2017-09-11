<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/calculator_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">
</head>

<body>
    <?php
        include_once 'navbar.php';
    ?>

    <?php
        include_once 'sidebar.php';
    ?>

    <section class="main-section">
        <section class="calculator-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-wizard-header text-center">
                                    <h3>Plan Your Goal</h3>
                                    <p>Follow through the steps to plan</p>
                                </div>

                                <div class="card-wizard-navigation">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="tab_goal"><a>Goal</a></li>
                                        <li class="tab_plan"><a>Plan</a></li>
                                        <li class="tab_details"><a>Details</a></li>
                                        <li class="tab_result"><a>Result</a></li>
                                    </ul>
                                </div>

                                <div class="card-wizard-content">
                                    <div class="card-tab-content" id="goal">            
                                        <h4>Let's start with your goal</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Goal name</label>
                                                    <input type="text" class="form-control" placeholder="eg: Laptop">
                                                </div>
                                            </div>
                                            <div class="col-md-6 margin-bottom">
                                                <label>Cost</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">₹</span>
                                                    <input type="number" class="form-control" placeholder="eg: 30,000">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">                                                   
                                                    <label>Priority</label>
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-tab-content" id="plan">
                                        <h4>Choose your planning mode</h4>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6">
                                                <label for="chk_period" class="choice">
                                                    <input id="chk_period" type="checkbox" name="plan" value="Period">
                                                    <div class="icon">
                                                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                                    </div>
                                                </label>
                                                <h5>Calculate period</h5>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
                                                <label class="choice" for="chk_amount">
                                                    <input id="chk_amount" type="checkbox" name="plan" value="Amount">
                                                    <div class="icon">
                                                        <i class="fa fa-inr" aria-hidden="true"></i>
                                                    </div>
                                                </label>
                                                <h5>Calculate savings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-tab-content" id="details">                                        
                                        <h4>Provide some details</h4>                                         
                                        <div class="content-period">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Saving type</label>
                                                        <select class="form-control">
                                                            <option>Monthly</option>
                                                            <option>Quaterly</option>
                                                            <option>Half Yearly</option>
                                                            <option>Yearly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Saving amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">₹</span>
                                                            <input type="number" class="form-control" placeholder="eg: 5,000">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-amount">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Saving type</label>
                                                        <select class="form-control">
                                                            <option>Monthly</option>
                                                            <option>Quaterly</option>
                                                            <option>Half Yearly</option>
                                                            <option>Yearly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Total Period</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                            <input type="number" class="form-control" placeholder="eg: 2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-tab-content" id="result">
                                            <div class="row">
                                                <h4>You will acheive your goal in...</h4>

                                            </div>
                                    </div>
                                </div>

                                <div class="card-wizard-footer">
                                   <div class="row">
                                        <div class="col-md-12">
                                            <button id="btn_back" type="button" class="btn btn-primary btn-second btn-wd pull-left">Back</button>                                
                                            <button id="btn_finish" type="button" class="btn btn-primary btn-main btn-wd pull-right">Finish</button>
                                            <button id="btn_next" type="button" class="btn btn-primary btn-main btn-wd pull-right">Next</button>
                                            <div class="clearfix"></div>   
                                        </div>
                                   </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include_once 'footer.php';
        ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/footer_script.js"></script>
    <script src="js/sidebar_script.js"></script>
    <script src="js/navbar_script.js"></script>
    <script src="js/calculator_script.js"></script>
</body>

</html>