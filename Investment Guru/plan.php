<?php require('includes/plan_inc.php') ?>

<html>

<head>
    <title>Plan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/plan_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer-min_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <section class="calculator-section">
            <div class="container-fluid">
                    <div class="card">
                        <form class="form-horizontal" action="" method="POST" autocomplete="off">
                            <div class="card-wizard-header text-center">
                                <h3>Plan Your Goal</h3>
                                <p>Follow through the steps to plan</p>
                            </div>

                            <div class="card-wizard-navigation">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="tab_goal"><a>Goal</a></li>
                                    <li class="tab_mode"><a>Mode</a></li>
                                    <li class="tab_details"><a>Details</a></li>
                                    <li class="tab_summary"><a>Summary</a></li>
                                </ul>
                            </div>

                            <div class="card-wizard-content">
                                <div class="card-tab-content" id="goal">
                                    <h4>Let's start with your goal</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>What is your goal ?</label>
                                                <input name="txt_goalname" type="text" class="form-control" placeholder="eg: Laptop">
                                            </div>
                                        </div>
                                        <div class="col-md-6 margin-bottom">
                                            <label>How much does it cost ?</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input name="txt_goalcost" type="number" class="form-control" placeholder="eg: 30,000">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Goal priority</label>
                                                <div class="btn-group btn-input clearfix">
                                                    <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" id="toggle-priority">
                                                        <span data-bind="labelpriority">Select goal priority</span><span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-priority" role="menu">
                                                        <li><a href="#">High</a></li>
                                                        <li><a href="#">Medium</a></li>
                                                        <li><a href="#">Low</a></li>
                                                    </ul>
                                                    <input name="sel_goalpriority" type="hidden" id="dropdown-priority"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="card-tab-content" id="mode">
                                    <h4>Choose your planning mode</h4>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <label class="choice" for="chk_period">
                                                <input id="chk_period" name="chk_mode" type="radio" value="Period">
                                                <div class="icon">
                                                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                                </div>
                                            </label>
                                            <h5 class="cal-period">Calculate period</h5>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <label class="choice" for="chk_amount">
                                                <input id="chk_amount" name="chk_mode" type="radio" value="Amount" checked>
                                                <div class="icon">
                                                    <i class="fa fa-inr" aria-hidden="true"></i>
                                                </div>
                                            </label>
                                            <h5 class="cal-amount">Calculate amount</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-tab-content" id="details">
                                    <h4>Provide some details</h4>                                         
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>How will you save ?</label>
                                                <div class="btn-group btn-input clearfix">
                                                    <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" id="toggle-type">
                                                        <span data-bind="labeltype">Select an option</span><span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-type" role="menu">
                                                        <li><a href="#">Monthly</a></li>
                                                        <li><a href="#">Half Yearly</a></li>
                                                        <li><a href="#">Yearly</a></li>
                                                    </ul>
                                                    <input name="sel_savingType" type="hidden" id="dropdown-type"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 content-period">
                                            <div class="form-group">
                                                <label>Amount you can save</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">₹</span>
                                                    <input name="txt_amount" type="number" class="form-control" placeholder="eg: 5,000">
                                                </div>
                                            </div>
                                        </div>                                               
                                        <div class="col-md-6 content-amount">
                                            <div class="form-group">
                                                <label>Expected period</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                    <input name="txt_period" type="number" class="form-control" placeholder="eg: 2 (in months)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-tab-content" id="summary">                                       
                                    <h4>Summary</h4>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>Goal name</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="result_goalname" type="text" class="form-control margin-bottom" readonly>
                                        </div>
                                        <div class="col-md-2 col-md-offset-2">
                                            <label>Saving type</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="result_savingType" type="text" class="form-control" readonly>
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>Cost</label>
                                        </div>
                                        <div class="col-md-3 margin-bottom">
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>                                                   
                                                <input name="result_goalcost" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-offset-2">
                                            <label>Saving amount</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>                                                                                                      
                                                <input name="result_amount" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>Priority</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="result_goalpriority" type="text" class="form-control  margin-bottom" readonly>
                                        </div>
                                        <div class="col-md-2 col-md-offset-2">
                                            <label>Total period</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="result_period" type="text" class="form-control" readonly>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="card-wizard-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="btn_back" type="button" class="btn btn-primary btn-second btn-wd pull-left">Back</button>                                
                                        <button id="btn_calculate" type="button" class="btn btn-primary btn-main btn-wd pull-right">Calculate</button>
                                        <button id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-main btn-wd pull-right">Add goal</button>
                                        <button id="btn_next" type="button" class="btn btn-primary btn-main btn-wd pull-right">Next</button>
                                        <div class="clearfix"></div>   
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </section>

        <?php require_once('footer-min.php'); ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
    <script src="js/plan_script.js"></script>
</body>

</html>