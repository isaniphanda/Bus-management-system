<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $studNo = $_POST['studNo'];
    $password = $_POST['Password'];

    if (!empty($studNo) && !empty($password)) {

      # read database
      $query = "select * from student where studentNo = '$studNo' limit 1";
      $result = mysqli_query($con, $query);

      if($result){
      	if($result && mysqli_num_rows($result) > 0){

      		$user_data = mysqli_fetch_assoc($result);
      		if($user_data['password'] === $password){

      			$_SESSION['studentId'] = $user_data['studentId'];
      			header("Location: index.php");
     			die;
      		}
      	}
      }
      echo "Please enter all fields";

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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">

	<title>User Login</title>
</head>
<body>
	<header class="showcase">
		<div class="showcase-top">
			<a href="index.php"><h1 id="showcase-heading">Bus Management System</h1></a>
	    <a href="Register.php" class="btn btn-rounded" id="top-button">Register</a>
		</div> 
	</header>

	<h2 class="page-heading">Login</h2>

<div class="login-section">
	<form method="post">
	<div class="mb-3">
	  <label for="formGroupExampleInput" class="form-label">Student Number</label>
	  <input type="Text" name="studNo" placeholder="Student Number" required class="form-control" id="formGroupExampleInput">
	</div>
	<div class="mb-3">
	  <label for="formGroupExampleInput2" class="form-label">Surname</label>
	  <input type="Password" name="Password" placeholder="Password" required class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="mb-3">
	  <input type="submit" name="login" value="Login" class="form-control" id="formGroupExampleInput2" >
  </div>
  </form>
</div>

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
	<div id="simpleModal" class="modal">
		<div class="modal-content">
			<span class="closeBtn">&times;</span>
			<p>Hello.... i am a modal</p>
		</div>
</div>
</body>
</html>