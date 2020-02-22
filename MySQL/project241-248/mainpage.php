<?php 
  include("login.php"); 
	session_start();
	include("connection.php");

	$query="SELECT `diary` FROM `users` WHERE `id`='".$_SESSION['id']."' LIMIT 1";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$diary = $row['diary'];
?>
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
  			<div class="navbar-header pull-left">
  				<a class="navbar-brand">Secret Diary</a>
  			</div>
  			<div class="pull-right">
  				<ul class="navbar-nav nav pull-right">
  					<li><a href="index.php?logout=1">Log Out</a></li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<div class="container contentContainer" id="topContainer">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  				<textarea class="form-control"><?php echo $diary; ?></textarea>
  			</div>
  		</div>
  	</div>
  	<script>
  		$(".contentContainer").css("min-height",$(window).height());
  		$("textarea").css("min-height",$(window).height()*0.8);
  		$("textarea").keyup(function() {
        /// 把textarea的值，賦予到diary。
        $.post("updatediary.php", {diary:$("textarea").val()});
        $.post()
  		});
  	</script>
  </body>
</html>
