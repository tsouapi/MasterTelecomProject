<?php 
session_start();

$_GET['id']=0;
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="asset_login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset_login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="asset_login/css/form-elements.css">
        <link rel="stylesheet" href="asset_login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="asset_login/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset_login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset_login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset_login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="asset_login/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content" style="background-image: url('images/im3.jpg') ">
        	
            <div class="inner-bg">
               
                    <div class="row" >
                        <div class="col-sm-6 col-sm-offset-3 form-box" style="opacity: 0.7">
                        	<div class="form-top">
                        		<div class="form-top-left" style="opacity: none">
                        			<h1>Login Form</h1>
                            		<p>Enter your username and password to log on:</p>
                                    <p><?php if($_GET['id']==3)
                                        {
                                            echo "veuillez contacter votre administrateur";
                                        }

                                    ?></p>
                        		</div>
                        		<div class="form-top-right" style="opacity: none">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom" style="opacity: none">
			                    <form role="form" action="controller/authentification.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username" >Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required="required">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required="required">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                 <br><br><br><br><br><br><br><br><br>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="asset_login/js/jquery-1.11.1.min.js"></script>
        <script src="asset_login/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset_login/js/jquery.backstretch.min.js"></script>
        <script src="asset_login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="asset_login/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>