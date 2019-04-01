<?php
	$connect=mysql_connect('localhost','root','');
	$db=mysql_select_db("election"); 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head >
	<body background="voting.jpg" >
	<title>Online Voting Plateform</title>
</head>
</body>
</html>

<form style="text-align: center;" action="VOTING1.php" method="POST">
  <div class="imgcontainer" >
    <img src="login1.png" alt="Avatar" style="width:100px; height:100px;" class="avatar" >
  </div>

  <div class="container">
    <label><b>Voter ID:</b></label><br>
    <input type="text" placeholder="Enter Voter ID" name="uname" ><br><br>

    <label><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" ><br><br>

    <button type="submit" name="Login">Login</button><br><br>
    <button type="submit" name="Result">Result</button>

  </div>
</form>

<?php
		if (isset($_POST["Login"])) {
			
				$ID=$_POST["uname"];
				$pwd=$_POST["psw"];?>
				<h2>Please type valid Id or Password!</h2>
				<?php

				$query_run = mysql_query("SELECT * FROM id WHERE ID='$ID' AND PWD='$pwd'");

				if(mysql_num_rows($query_run)){
					
					$_SESSION['ID'] = $ID;
					$_SESSION['pwd'] = $pwd;
					header("Location:VOTING2.php");
					
				}
			
		}
		if (isset($_POST["Result"])) {
			header("Location:VOTING3.php");}

		?>


