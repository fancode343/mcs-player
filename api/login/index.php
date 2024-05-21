<?php
session_start();

include("/var/task/user/api/connection.php");
include("/var/task/user/api/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Check if inputs are not empty and username is not numeric
    if (!empty($username) && !empty($email) && !is_numeric($username)) {
        // Use prepared statements to prevent SQL injection
        if ($query = $con->prepare("SELECT * FROM Users WHERE username = ? LIMIT 1")) {
            $query->bind_param("s", $username);
            $query->execute();
            $result = $query->get_result();

            // Check if the query returned a result
            if ($result) {
                if ($result->num_rows > 0) {
                    $user_data = $result->fetch_assoc();

                    // Verify the email
                    if ($user_data['email'] === $email) {
                        // Set session variable
                        $_SESSION['user_id'] = $user_data['user_id'];
                        
                        // Check if season exists in user_data
                        if (isset($user_data['season'])) {
                            $_SESSION['season'] = $user_data['season'];  // Store season in session
                        } else {
                            $_SESSION['season'] = null; // Or handle this case as needed
                        }

                        // Debugging line to verify session is set
                        if (isset($_SESSION['user_id'])) {
                            // Optional: Log session information for debugging
                            // file_put_contents('/path/to/logfile.txt', "Session user_id set to: " . $_SESSION['user_id'] . PHP_EOL, FILE_APPEND);

                            // Forward to dashboard
                            header("Location: dashboard");
                            exit;
                        } else {
                            echo "Failed to set session user_id.";
                        }
                    } else {
                        echo "Incorrect email for the given username.";
                    }
                } else {
                    echo "That Gamertag is not registered.";
                }
            } else {
                echo "Database query failed.";
            }

            // Close the statement
            $query->close();
        } else {
            echo "Failed to prepare the SQL statement.";
        }
    } else {
        echo "Please enter a valid username and email.";
    }
}

// Close the database connection
$con->close();
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
