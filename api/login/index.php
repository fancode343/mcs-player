<?php 

session_start();

	include("../connection.php");
	include("../functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];

		if(!empty($username) && !empty($email) && !is_numeric($username))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['email'] === $email)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../dashboard");
						die;
					}
				}
			}
			
			echo "that Gamertag not registered";
		}else
		{
			echo "that Email not registered";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
  
    <style>
        body {
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPfjZG8H5i0WSKlQ8-i_JPnWnTwIx_rO_eTrJfPjpGC0GCsQdHGnPM-BU&s=10');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
	<title>Login</title>
 <link rel="shortcut icon" href="logo.png" sizes="196x196" type="image/png">
  <meta property="og:title" content="Login to our website">
 <meta property="og:description" content="The website of GranGuorgeMC and Kormit the pog">
<meta property="og:type" content="article">
  <meta property="og:image" content="https://guormit.cf/logo.png">
  <meta property="og:site_name" content="Guormit archives">
</head>
<body>
<!DOCTYPE html>
<html>
  <head>

  </head>

</html>
	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
<img src="logo.png" alt="Trulli" width="300" height="100">

			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>



			<input id="text" type="text" name="username"autofocus placeholder="Gamertag"><br><br>
			<input id="text" type="text" name="email"autofocus placeholder="email"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="../register">dont have an account</a><br><br>
		</form>
	</div>
</body>
</html>
