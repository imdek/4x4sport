<?php header('Content-Type:text/html; charset=UTF-8');?>
<!DOCTYPE html>
<html lang="ru">
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
    
    <title>4x4sport.info</title>
</head>
<body>
<?php include 'headerMenu.php'; ?>
<?php include 'sorting.php'; ?>	

  <div class="container">
<!--  <h1>Events</h1>-->
   <div class="table-responsive">
    <table class="table table-striped table-hover">
      <tbody>
		<?php
		include 'model.php';
		include 'view.php';
		
		$db = new DbConnection();
		$db->dbConnect();
		$request = "";
		if ($_GET["Rally"]) $request= $request." e.type_rally=1 OR";
		if ($_GET["Trophy"]) $request= $request." e.type_trophy=1 OR";
		if ($_GET["Trial"]) $request= $request." e.type_trial=1 OR";
		if ($_GET["Meeting"]) $request= $request." e.type_event=1 OR";
		
		if (strlen($request) > 0 ) $request = " AND ( ".$request." false ) ";
		
		$result = $db->dbGetEvents($request);
		$vt = new ViewTable();
		$vt->viewEventsTable($result);
		
		$db->dbClose();      
		?>      
      </tbody>
    </table>
   </div>
  </div>
 
   <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>  
  	<script src="bootstrap/js/main.js"></script> 
 <br><br>
 <br><br>
 <?php include 'footer.php'; ?>
	
 </body>
</html>
