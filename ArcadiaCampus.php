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

	  <button onclick="myFunction()" class="dropbtn btn-rounded"><h2 class="page-heading">Arcadia Bus Schedule</h2></button>

	  <div id="myDropdown" class="dropdown-content">
	    <a href="MainCampus.php">Main</a>
	    <a href="index.php">Soshanguve</a>
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

	<p class="bus-info">Select bus route............</p>
	
	<div class="bus-schedule">
		<table class="schedule-tb">
			<tr>
				<th>07:00am</th>
				<th><a href="" onclick="popupConfirm()">Arcadia to Sosha N</a></th>
				<th>35</th>
			</tr>
			<tr>
				<th>07:00am</th>
				<th><a href="" onclick="popupConfirm()">Arcadia to Sosha S</a></th>
				<th>40</th>
			</tr>
			<tr>
				<th>07:00am</th>
				<th><a href="" onclick="popupConfirm()">Arcadia to Main</a></th>
				<th>15</th>
			</tr>
			<tr>
				<th>07:00am</th>
				<th><a href="" onclick="popupConfirm()">Arcadia to Garankuwa</a></th>
				<th>60</th>
			</tr>
		</table>
	</div>
</section>

<div class="footer center">
  <div class="contain">
  <div class="col">
    <h1>Bus Management System</h1>
    <ul>
      <li>Home</li>
	    <li>About</li>
	    <li>TUT</li>
	    <li>Profile</li>
    </ul>
  </div>
  
  <div class="clearfix"></div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function popupConfirm() {
  var txt;
  var r = confirm("You selected:\nSosha to Garankuwa, bus leaving at 07:00am\nConfirm bus booking.");
  if (r == true) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>


</body>
</html>