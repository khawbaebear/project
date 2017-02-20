
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <a name="about"></a>
    <div class="intro-header2">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Converted</h1>
                       <!-- <hr class="intro-divider"> -->

                        <div class="bg-opa">
                        <h2>
                        <?php
							$amount = $_POST["amount"];
							$coin = $_POST["coin"];

						switch ($coin) {
							case 'usd':
								$coin_usd = 0.03;
								$value=$amount*$coin_usd;
								echo "1 THB = " .$coin_usd  ."   ". "  USD" . "<br><br>";
								echo $amount. "    THB = " . number_format($value) ."     USD";
								break;
							
							case 'yen':
								$coin_yen = 3.23;
								$value=$amount*$coin_yen;
								echo "1 THB = " . $coin_yen . "  JPY" . "<br><br>";
								echo $amount. "   THB = " . number_format($value) ."     JPY";
								break;

							case 'won':
								$coin_won = 32.55;
								$value=$amount*$coin_won;
								echo "1 THB = " . $coin_won. "  KRW" . "<br><br>";
								echo $amount. "    THB = " . number_format($value) ."     KRW";
								break;
								
						}
						?>
						</h2>
						</div>

                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline float-r">
                        <li>
                            Krittiya Onlao
                        </li>
                        
                        <li>
                            13570112
                        </li>
                        <p class="copyright text-muted small"> <span style="color:#555;"> Contact: </span> onlao.kty@gmail.com</p>
                        
                       
                    </ul>
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>





