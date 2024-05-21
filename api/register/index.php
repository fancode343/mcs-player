<?php 
session_start();

	include("/var/task/user/api/connection.php");
	include("/var/task/user/api/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$wdywtj = $_POST['wdywtj'];
	    $phoneCode = $_POST['phoneCode'];
		$fbprof = $_POST['fbprof'];
		$dsnm = $_POST['dsnm'];

		if(!empty($username) && !empty($email) && !empty($age) && !empty($gender) && !empty($wdywtj) && !empty($phoneCode) && !empty($fbprof) && !empty($dsnm) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into Users (user_id,username,email,age,gender,wdywtj,phoneCode,fbprof,dsnm) values ('$user_id','$username','$email','$age','$gender','$wdywtj','$phoneCode','$fbprof','$dsnm')";


			mysqli_query($con, $query);

echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
	
			<strong>Success!</strong> You have been Successfully registered.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
		}else
{
echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
	
			<strong>Error!</strong> Please enter  Valid information.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
}
}
?>

<!doctype html>
	
<html lang="en">

<head>
	  <title>Guormit archives</title>
                  <link rel="shortcut icon" href="https://guormit.cf/assets/logo.png" sizes="196x196" type="image/png">
                 <meta property="og:title" content="ᴍɪʟʟɪᴏɴᴀɪʀᴇCraftSMP Signup">
          <meta property="og:description" content="ᴍɪʟʟɪᴏɴᴀɪʀᴇCraftSMP">
          <meta property="og:type" content="article">
          <meta property="og:image" content="https://guormit.cf/assets/picture/smp.png">
          <meta property="og:site_name" content="Guormit archives">
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1,
		shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		crossorigin="anonymous">
</head>
	        </style>
<style>
        body {
          background-image: url('https://guormit.cf/assets/backgrounds/minecraft.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
<style type="text/css">
	
	#text{

     background-color: green;
		height: 32px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 49%;
	}

    	#pass{

     background-color: red;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 50%;
	}

   	#tex{

     background-color: lightblue;
		height: 32px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 30%;
	}
 
     #mcv{

     background-color: lightblue;
		height: 60px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 30%;
	}

      #mcv1{

     background-color: lightgreen;
		height: 40px;
		border-radius: 20px;
		padding: 4px;
		border: solid thin #aaa;
		width: 40%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
</style>
<body>	
<div class="container my-4 ">
	
	<h1 class="text-center">Signup Here</h1>
	<form method="post">
		<div class="form-group">
			<label>Gamertag</label>
		<input type="text" class="form-control" id="username"
			name="username"autofocus placeholder="Minecaft Gamertag">	
		</div>
	
		<div class="form-group">
			<label>Email</label>
			<input type="text "class="form-control"
			id="email" name="email"autofocus placeholder="Your Email">
		</div>
	<div class="form-group">
			<label>Why do you want to join?</label>
<br>
<div class="form-group">
			<input type="text" class="form-control"
			id="wdywtj" name="wdywtj"autofocus placeholder="Required" autocapitalize="off">
	</div>
<div class="form-group">
<label id="text">SELECT YOUR AGE : </label>

<select id="mcv1" name="age">

<option selected hidden value="">Select AGE : </option>

<option value="12-">12-</option>

<option value="13">13</option>

<option value="14">14</option>

<option value="15">15</option>

<option value="16">16</option>

<option value="17">17</option>

<option value="18+">18+</option>
</div></select>

<div class="form-group">
			<label id="tex">Gender -></label>
<input type="radio" name="gender" value="m">Male

<input type="radio" name="gender" value="f">Female
</div>
<div class="form-group">
<label id="mcv">MINECRAFT VERSION :</label>


<select id="mcv1" name="phoneCode">

<option selected hidden value="">Select Version: </option>

<option value="1.18.12">1.18.12 - latest✅ (recomended)</option>

<option value="1.19.0">1.19.0 - beta</option>

<option value="1.19.0">1.18.30 - beta</option>

<option value="1.18.12">1.18.12</option>

<option value="1.18.10">1.18.10</option>

<option value="1.18.2">1.18.2</option>

<option value="1.18.0">1.18.1</option>

<option value="1.18.1">1.18.0</option>

<option value="1.17.41">1.17.41</option>

<option value="1.17.40">1.17.40</option>

<option value="1.17.30">1.17.30</option>

<option value="1.17.10">1.17.10</option>

<option value="1.17.0">1.17.0 -</option>
</select>
</div>
<div class="form-group">
			<label>Facebook profile</label>
			<input type="text" class="form-control
			id="username" name="fbprof">
		</div>
<div class="form-group">
			<label>Discord account</label>
			<input type="text" class="form-control"
			id="dsnm" name="dsnm">
		</div>
	<small id="emailHelp" class="form-text text-muted">
		
			Make sure to type correctly
			</small>
		</div>	
	
		<button type="submit" class="btn btn-primary" value="Signup">
		SignUp
		</button>
	</form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>
	
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>
	
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous">
</script>
</body>
</html>
