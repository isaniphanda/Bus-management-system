<?php

//start session
session_start();

  include("connection.php");
  include("functions.php");

  require_once("./inc/recipes.php");
  require_once("./inc/createDb.php");

  $user_data = check_login($con);

  //create instance of createDb class
  //$database = new createDb(dbname:"BusManagementdb", tablename:"Student");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">

	
	<title>Bus Management system</title>
</head>

<body>

<!--the header-->
<header class="showcase">

	<div class="showcase-top">
		<a href="index.php"><h1 id="showcase-heading">Bus Management System</h1></a>
	    <a href="Login.php" class="btn btn-rounded" id="top-button">Logout</a>
	</div> 
	
	<p></p><!--The user whos logged in-->

</header>
<!--End of header-->

<!--Campus selection dropdown button-->
<div class="dropdown center">

	  <button onclick="myFunction()" class="dropbtn btn-rounded"><h2 class="page-heading">Soshanguve Bus Schedule</h2></button>

	  <div id="myDropdown" class="dropdown-content">
	    <a href="MainCampus.php">Main</a>
	    <a href="ArcadiaCampus.php">Arcadia</a>
	    <a href="Garankuwa.php">Garankuwa</a>
	  </div>

</div>

<section class="container">
	<!--<input type="Text" name="" placeholder="Departure" class="text-input">
	<input type="Text" name="" placeholder="Destination" class="text-input">-->

	<!--When the checkbox is clicked it displays a pop up message informing student about the bus status or confirming the ride
		*The bus is full we can schedule u for the next
		*You requesting a bus ride to arcadia at 12:00 confirm
		*-->

	<h4 id="bus-info">Select bus route............</h4>
	<div class="bus-schedule">
		<table class="schedule-tb"> 
			<tr>
				<th><p class="demo"></p></th>
				<th><button id="route" class="route-btn">Sosha to Arcadia</button></th>
				<th><p class="no-onboard">Bus empty</p></th> 
			</tr>
			<tr>
				<th><p class="demo"></p></th>
				<th><button id="route" class="route-btn">Sosha to Main</button></th>
				<th>40</th>
			</tr>
			<tr>
				<th><p class="demo"></p></th>
				<th><button id="route" class="route-btn">Sosha to Garankuwa</button></th>
				<th>15</th>
			</tr>
			<tr>
				<th><p class="demo"></p></th>
				<th><button id="route" class="route-btn">Sosha S to Sosha N</button></th>
				<th>Bus Full</th>
			</tr>
		</table>
	</div>
</section>

<div id="simpleModal" class="popup">
		<div class="popup-content">
			<div popup-header>
				<span class="closeBtn">&times;</span>
				<h2>Confirm bus route</h2>
			</div>
			<span>You have selected Sosha to Arcadia bus leaving at <span class="demo"></span>there are <span class="no-onboard"></span> passengers on board </span>
			<div class="popup-footer">
				<button class="btn" id="acceptBtn">Yes</button>
				<button class="btn" id="cancelBtn">No</button>
			</div>
		</div>
</div>

<div id="secondModal" class="popup">
		<div class="popup-content">
			<div popup-header>
				<span class="closeBtn">&times;</span>
				<h2>Bus ride request accepted</h2>
			</div>
		</div>
</div>

<div class="footer center">
  <div class="contain">
  <div class="col">
    <h1>Bus Management System</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
	    <li><a href="https://www.tut.ac.za/">TUT</a></li>
	    <li><a href="Login.php">Logout</a></li>
	    <li><a href="monitor.php">Monitor</a></li>
    </ul>
  </div>
  
  <div class="clearfix"></div>
</div>

<script src="js/main.js"></script>

</body>
</html>