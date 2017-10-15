<?php require('includes/invest_inc.php') ?>

<html>

<head>
    <title>Invest</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/invest_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer-min_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <section class="investment-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        
                        <table class="contain">
                            <thead>
                                <tr>
                                    <th><h1>Type</h1></th>
                                    <th><h1>Name</h1></th>
                                    <th><h1>Minimum SIP</h1></th>
                                    <th><h1>3 Month(RET%)</h1></th>
                                    <th><h1>6 Month(RET%)</h1></th>
                                    <th><h1>1 Year(RET%)</h1></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Large Cap</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/aditya-birla-sun-life-top-100-fund-direct-plan/MBS837">ABSL Top 100 - Direct (G)</a></td>
                                    <td>2,500 &#x20b9;</td>
                                    <td>4%</td>
                                    <td>11.7%</td>
                                    <td>21.5%</td>
                                </tr>
                                <tr>
                                    <td>Large Cap</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/kotak-select-focus-fund-direct-plan/MKM520">Kotak Select Focus Fund - Direct (G)</a></td>
                                    <td>3,000 &#x20b9;</td>
                                    <td>2.8%</td>
                                    <td>10.8%</td>
                                    <td>22.6%</td>
                                </tr>
                                <tr>
                                    <td>Small & Mid Cap</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/l-t-emerging-businesses-fund-direct-plan/MCC492"> L&T Emerging Businesses Fund-DP (G)</a></td>
                                    <td>5,000 &#x20b9;</td>
                                    <td>5.5%</td>
                                    <td>18.5%</td>
                                    <td>40.4%</td>
                                </tr>
                                <tr>
                                    <td>Diversified Equity</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/tata-equity-p-e-fund-direct-plan/MTA732">Tata Equity P/E Fund - Direct (G)</a></td>
                                    <td>5,000 &#x20b9;</td>
                                    <td>6.6%</td>
                                    <td>13.1%</td>
                                    <td>31.1%</td>
                                </tr>
                                <tr>
                                    <td>Thematic - Infrastructure</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/idfc-infrastructure-fund-direct-plan/MAG731">IDFC Infrastructure - Direct (G)</a></td>
                                    <td>5,000 &#x20b9;</td>
                                    <td>7.2%</td>
                                    <td>17.5%</td>
                                    <td>43.7%</td>
                                </tr>
                                <tr>
                                    <td>ELSS</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/tata-india-tax-savings-fund-direct-plan/MTA1114">Tata India Tax Savings Fund - Direct (G)</a> </td>
                                    <td>500 &#x20b9;</td>
                                    <td>4.8%</td>
                                    <td>13.5%</td>
                                    <td>24.3%</td>
                                </tr>
                                <tr>
                                    <td>ELSS</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/l-t-tax-advantage-fund-direct-plan/MCC258">L&T Tax Advantage -Direct (G)</a></td>
                                    <td>500 &#x20b9;</td>
                                    <td>4.5%</td>
                                    <td>13.4%</td>
                                    <td>24.3%</td>
                                </tr>
                                <tr>
                                    <td>Debt Long Term</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/uti-dynamic-bond-fund-direct-plan/MUT691"> UTI Dynamic Bond Fund - Direct (G)</a></td>
                                    <td>10,000  &#x20b9;</td>
                                    <td>0.8%</td>
                                    <td>4.4%</td>
                                    <td>9.9%</td>
                                </tr>
                                <tr>
                                    <td>Debt Long Term</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/icici-prudential-long-term-plan-direct-plan/MPI1152">ICICI Pru Long Term - Direct (G)</a></td>
                                    <td>5,000  &#x20b9;</td>
                                    <td>0.8%</td>
                                    <td>5.2%</td>
                                    <td>9.1%</td>
                                </tr>
                                <tr>
                                    <td>Balanced</td>
                                    <td><a href="http://www.moneycontrol.com/mutual-funds/nav/hdfc-balanced-fund-direct-plan/MHD1173">HDFC Balanced Fund - Direct (G)</a></td>
                                    <td>2,500  &#x20b9;</td>
                                    <td>1.1%</td>
                                    <td>9.2%</td>
                                    <td>17.9%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once('footer-min.php'); ?>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
</body>

</html>
