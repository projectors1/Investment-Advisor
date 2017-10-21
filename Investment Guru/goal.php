<?php require('includes/goal_inc.php') ?>

<html>

<head>
    <title>Goal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/goal_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer-min_style.css">


</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <section class="goal-section">
            <div class="container-fluid">
                <div class="row">
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-4" id="goal<?php echo $row['GoalID'];?>">
                            <div class="card">
                                <div class="card-header"> 
                                    <div class="row">
                                        <div class="col-md-7 col-xs-7 name">                                                                    
                                            <?php echo $row['Name']; ?>
                                        </div>
                                        <div class="col-md-5 col-xs-5">                                            
                                            <button type='button' class="btn btn-close" data-toggle="modal" data-target="#modalDelete" data-id="<?php echo $row['GoalID'];?>">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                            <button type='button' class="btn btn-edit" data-toggle="modal" data-target="#modalEdit" data-id="<?php echo $row['GoalID'];?>">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-xs-12 margin-top">
                                            <?php if($row['Priority'] == "High") { ?>
                                                <span class="label label-danger priority"><?php echo $row['Priority']; ?></span>
                                            <?php } else if($row['Priority'] == "Medium") { ?>
                                                <span class="label label-warning priority"><?php echo $row['Priority']; ?></span>
                                            <?php } else if($row['Priority'] == "Low") { ?>
                                                <span class="label label-info priority"><?php echo $row['Priority']; ?></span>
                                            <?php } ?>
                                            <span class="label label-success type"><?php echo $row['Savingtype']; ?></span>
                                        </div>
                                    </div> 
                                </div>
                                <div class="card-content">
                                    <div class="form-group col-md-12">
                                        <label class="title">Cost</label>
                                        <label class="value cost"><?php echo "₹ ".$row['Cost']; ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="title">Total Period</label>
                                        <label class="value period"><?php echo $row['Period']." months"; ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="title">Amount</label>
                                        <label class="value amount"><?php echo "₹ ".$row['Amount']; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="modal fade" id="modalDelete" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Goal</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Confirm delete goal ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn_delete" type='button' class="btn btn-main" data-dismiss="modal">Delete</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalEdit" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Goal</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Goal name</label>
                                                <input name="txt_goalname" type="text" class="form-control" placeholder="eg: Laptop" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Goal cost</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input name="txt_goalcost" type="number" class="form-control" placeholder="eg: 30,000" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                                <label>Goal priority</label>
                                                <div class="btn-group btn-input clearfix">
                                                    <button type="button" class="btn btn-transparent dropdown-toggle form-control" data-toggle="dropdown" id="toggle-priority">
                                                        <span id="priority" data-bind="labelpriority">Select goal priority</span><span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-priority" role="menu">
                                                        <li><a href="#">High</a></li>
                                                        <li><a href="#">Medium</a></li>
                                                        <li><a href="#">Low</a></li>
                                                    </ul>
                                                    <input name="sel_goalpriority" type="hidden" id="dropdown-priority">
                                                </div>
                                            </div>     
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Saving type</label>
                                                <div class="btn-group btn-input clearfix">
                                                    <button type="button" class="btn btn-transparent dropdown-toggle form-control" data-toggle="dropdown" id="toggle-type">
                                                        <span id="type" data-bind="labeltype">Select an option</span><span class="caret"></span>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Period</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                    <input name="txt_period" type="number" class="form-control" placeholder="eg: 2 (in months)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
                                                    <input name="txt_amount" type="number" class="form-control" placeholder="eg: ₹ 3000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn_update" type='button' class="btn btn-main" data-dismiss="modal">Update</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
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
    <script src="js/validate_script.js"></script>
    <script src="js/goal_script.js"></script>
</body>

</html>