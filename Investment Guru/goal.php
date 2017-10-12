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
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">

    
    <script src="js/goal_script.js"></script>
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <section class="goal-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Your Goals</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Cost</th>
                                                <th>Priority</th>
                                                <th>Saving type</th>
                                                <th>Amount</th>
                                                <th>Total Period</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index=0; while($row = mysqli_fetch_assoc($result)) { $index++; ?>
                                                <tr id="row<?php echo $row['GoalID'];?>">
                                                    <td><?php echo $index; ?></td>
                                                    <td><?php echo $row['Name']; ?></td>
                                                    <td><?php echo "₹ ".$row['Cost']; ?></td>
                                                    <td><?php echo $row['Priority']; ?></td>
                                                    <td><?php echo $row['Savingtype']; ?></td>
                                                    <td><?php echo "₹ ".$row['Amount']; ?></td>
                                                    <td><?php echo $row['Period']." months"; ?></td>
                                                    <td>
                                                        <button type='button' class="btn btn-edit" onclick="edit_row('<?php echo $row['GoalID'];?>');">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button type='button' class="btn btn-close" onclick="delete_row('<?php echo $row['GoalID'];?>');">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>    
                                        </tbody>
                                    </table>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once('footer.php'); ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
</body>

</html>