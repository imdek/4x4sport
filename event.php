<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
	<link href="sheet.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">    

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQTCMXEiG7lkFjJbE7IPpY69IVgANaxnc"></script>    
    
    <title>4x4sport.info@Event</title>
</head>
<body>
<?php include 'headerMenu.php' ;?>
<div class="container">
<div class="row">

		<?php
		$id =  htmlspecialchars($_GET["event"]);
		include 'model.php';
		include 'view.php';
		
		$db = new DbConnection();
		$db->dbConnect();
		$result = $db->dbGetEventDescription($id);
		
		$row = $result->fetch_assoc();
		$vt = new ViewEvent($row);
		$vt->viewEventDescription();
		
		$db->dbClose();  
		
		echo "<div class=\"row\">";
		echo "<div class=\"col-md-8\">";
		echo "<h1>".$vt->Name()."</h1>";
		echo "<h3>Goes from ".$vt->StartDate()." to ".$vt->EndDate()."</h3>";
		echo "</div>";
		$vt->viewEventMap();
		echo "</div>";
		?> 
</div>
<?php
include 'footer.php';
?>
</body>
</html>