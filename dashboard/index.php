<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>MEMBER</title>
<head>
  
    <style>
        body {
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPfjZG8H5i0WSKlQ8-i_JPnWnTwIx_rO_eTrJfPjpGC0GCsQdHGnPM-BU&s=10');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>

<style>

  h1 {font-size: 40px;}
  h1 {border: 3px solid #415663 ;
    padding: 30px;}
  p {font-size: 20px;}
  p {border: 3px solid #415663 ;
    padding: 30px;}
    

 </style>
</head>   
<body>

	<a href="../logout.php">Logout</a>
	<h1>Member Profile</h1>

<b><p style="color:brown"><?php echo $user_data['username']; ?> </b></p>
</body>
<body>
<!DOCTYPE html>
<html>
  <head>

  </head>
</html>
<br>
<br>
<b> Remember this ID NUMBER:
<br><p style="color:red">ID NUMBER > <?php echo $user_data['id']; ?> </b></p>
<br>
<b> Your user id > <?php echo $user_data['user_id']; ?> </b>
<br>
<br>
<b> 
>Your answer<<p style="color:red"><?php echo $user_data['wdywtj']; ?></p>
<br>
Age >  <?php echo $user_data['age']; ?>
<br>
<br>
fb profile >  <?php echo $user_data['fbprof']; ?>
<br>
<br>
Discord profile > <?php echo $user_data['dsnm']; ?>
<br>
<br>
MC VERSION > <?php echo $user_data['phoneCode']; ?>
</b>
<b>=====================================</b>
<br>
<b>>NAME< <p style="color:darkred";>GuormitSMP</p></b>
<br>
<b>>IP ADDRESS< <p style="color:darkred";>mc.guormit.cf</p></b>
<br>
<b>>PORT< <p style="color:darkred";>27783</p></b>
<br>
<b>=====================================</b>
<br>
<p style="color:darkred">
You cant join?
<br>
You need to our Discord server or Pm "Gran Guorge", "Hanma shuji" in Messenger</p>
<p style="color:red">
<a href="https://discord.gg/wcUdMCeT8S">link for Discord</a>
<br>

<body>
 FOR MORE Question</a></p>
<br>
</body>
</html>
