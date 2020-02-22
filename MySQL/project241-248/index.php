<?php include("login.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

	  <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery library -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	  <style>
      .navbar-brand {
        font-size:1.8em;
        font-weight:bold;
      }
      #topContainer {
        background-image:url("background.jpg");
        height:400px;
        background-size:cover;
        width:100%;
      }
      #topRow {
        margin-top:100px;
        text-align:center;
      }
      #topRow h1 {
      
        font-size:3em;
      }
      .bold {
        font-weight:bold;
      
      }
      .marginTop {
        margin-top:30px;
      
      }
      .center {
        text-align:center;
      
      }
      .title {
        margin-top:100px;
        font-size:3em;
      
      }
      #footer {
        background-color:#E98C6D;
        width:100%;
      
      }
      .appstoreImage {
      
        width:300px;
      }
      .marginBottom {
        margin-bottom:30px;
      
      }
      .white {
        color:white;
      
      }
	  </style>
  </head>
  <body>
  	<div class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand">Secret Diary</a>
  			</div>
  			<div class="collapse navbar-collapse">
  				<form class="navbar-form navbar-right" method="post">
  					<div class="form-group">
  						<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>"/>
  					</div>
  					<div class="form-group">
  						<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  					</div>
  					<input type="submit" name="submit" class="btn btn-success" value="Log In" >
  				</form>
  			</div>
  		</div>
  	</div>
  	<div class="container contentContainer" id="topContainer">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  				<h1 class="marginTop white">Secret Diary</h1>
  				<p class="lead white">Your own private diary, with you wherever you go.</p>
          <?php
            if ($error) {
              echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
            }
            if ($message) {
              echo '<div class="alert alert-success">'.addslashes($message).'</div>';
            }
          ?>
  				<p class="bold white">Interested? Sign Up Below!</p>
  				<form method="post">
  					<div class="form-group">
  						<label for="email" class="white">Email Address</label>
  						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>" />
  					</div>
  					<div class="form-group">
  						<label for="password" class="white">Password</label>
  						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
  					</div>
  						<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">
  				</form>
  			</div>
  		</div>
  	</div>
  	<script>
  		$(".contentContainer").css("min-height",$(window).height());
  	</script>
  </body>
</html>


<!-- <?php
  include("login.php")
?>
<form method = "POST">
  <input type="email" name="email" id="email" value="<?php echo addslashes($_POST["email"]); ?>"/>
  <input type="password" name="password" id="password" value="<?php echo addslashes($_POST["password"]); ?>"/>
  <input type="submit" name="submit" value="Sign Up"/>
</form>
<form method = "POST">
  <input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST["loginemail"]); ?>"/>
  <input type="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST["loginpassword"]); ?>"/>
  <input type="submit" name="submit" value="Login"/>
</form> -->