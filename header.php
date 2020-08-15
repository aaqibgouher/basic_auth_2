<?php include "function.php"; ?>
<!-- In header file , only these things will be there -->
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Registration-page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    	.my-div-1{
            text-align: center;
            font-size: 20px;

        }
        body {
            background-color: grey;
        }
        p,h1,h2,h3,label{
            color: white;
        }
        a {
            color: grey;
        }
    	
	</style>
</head>
<body>
    <nav class="navbar navbar-default">     <!--used navabr here-->
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">BASIC AUTH 2</a>
            </div>
            <?php if(is_login()): ?>    <!--checking that if user is login , then show user this navbar else other one !-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="register.php"><span class="glyphicon glyphicon-book"></span> Register</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
    