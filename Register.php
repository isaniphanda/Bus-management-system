<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$studNo = $_POST['studNo'];
    $surname = $_POST['Surname'];
    $name = $_POST['Name'];
    $password = $_POST['Password'];

    if (!empty($surname) && !empty($name) && !empty($studNo) && !empty($password)) {

      # save to database
      $query = "insert into student (StudentNo,studentName,studentSurname,password) values ('$studNo','$name','$surname','$password')";
      mysqli_query($con, $query);

      header("Location: Login.php");
      die;

    }
    else{
      echo "Please enter all fields";
    }

  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">

	<title>Bus Begistration</title>
</head>
<body>
	<header class="showcase">
		<div class="showcase-top">
			<a href="index.php"><h1 id="showcase-heading">Bus Management System</h1></a>
	    <a href="Login.php" class="btn btn-rounded" id="top-button">Login</a>
		</div> 
	</header>
	
	<h2 class="page-heading">Register</h2>


	<div class="register-section">
		<form method="post">
			<div class="mb-3">
			  <label for="formGroupExampleInput" class="form-label">Student Number</label>
			  <input type="text"  name="studNo" class="form-control" id="formGroupExampleInput" placeholder="eg: 216139435">
			</div>
			<div class="mb-3">
			  <label for="formGroupExampleInput2" class="form-label">Surname</label>
			  <input type="text" name="Surname" class="form-control" id="formGroupExampleInput2" placeholder="enter surname">
		  </div>
		  <div class="mb-3">
			  <label for="formGroupExampleInput2" class="form-label">Name</label>
			  <input type="text"  name="Name" class="form-control" id="formGroupExampleInput2" placeholder="enter name">
		  </div>
		  <div class="mb-3">
			  <label for="formGroupExampleInput2" class="form-label">Password</label>
			  <input type="text"  name="Password" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
		  </div>
		  <div class="mb-3">
			  <input type="submit" value ="register" class="form-control" id="formGroupExampleInput2">
		  </div>
	  </form>
  </div>

		<div class="footer center">
  <div class="contain">
  <div class="col">
    <h1>Bus Management System</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
	    <li><a href="https://www.tut.ac.za/">TUT</a></li>
	    <li><a href="Login.php">Logout</a></li>
    </ul>
  </div>
  
  <div class="clearfix"></div>
</div>
	  
	  <div class="clearfix"></div>
	</div>
</body>
</html>