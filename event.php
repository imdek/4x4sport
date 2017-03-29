<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">    

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQTCMXEiG7lkFjJbE7IPpY69IVgANaxnc"></script>    
    
    <title>4x4sport.info</title>
</head>
		<header>
		<nav class="navbar navbar-default menu">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
 	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active-link"><a href="#">item1</a></li>
	        <li><a href="#">item2</a></li>
	        <li><a href="#">item3</a></li>
	      	<li><a class="navbar-brand" href="#"><img src="img/logo02.jpg"></a></li>
	        <li><a href="#">item4</a></li>
	        <li><a href="#">item5</a></li>
	        <li><a href="#">item6</a></li>
	      	</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	</header>
<body>
<div class="container">
<div class="row">

		<?php
		$id =  htmlspecialchars($_GET["event"]);
		include 'model.php';
		include 'view.php';
		
		$db = new DbConnection();
		$db->dbConnect();
		$result = $db->dbGetEventDescription($id);
		
		$vt = new ViewEvent();
		$row = $result->fetch_assoc();
		$vt->viewEventDescription($row);
		$vt->viewEventMap($row);
		$db->dbClose();      
		?> 
</div>
<div class="row">
<div class="col-sm-12" style="background-color: yellow">
<a>nothing</a></div>
</div>	
</div>
<?php
include 'footer.php';
?>
</body>
</html>