<?php
	$connect=mysql_connect('localhost','root','');
	$db=mysql_select_db("election"); 
	session_start();
 ?>
 <!DOCTYPE html>
<html>
<head >
	<body background="tricolor.jpg" >
	<title>Online Voting Plateform</title>
</head>
</body>
</html>

 <form style="text-align: center;" action="VOTING2.php" method="POST">
  <h3>Your voter id: <?php echo $_SESSION['ID'] ?></h3>


 <div class="container">
 	<h4>Choose for your vote</h4>
    <select name="candidate">
    	<?php
    	$query=mysql_query("SELECT * from candidate");
    	while ($res=mysql_fetch_assoc($query)) {
    		$name=$res["Name"];
    		$id=$res["can_id"];?>
    		<option value="<?php echo $id ?>"><?php echo $name ;?></option>
    	<?php } ?>
  	</select>
   <button type="submit" name="Vote">Vote</button><br><br>
    </div>
</form>

<?php
		if (isset($_POST["Vote"])) {
	$CanID= $_POST["candidate"];
 	$query1=mysql_query("SELECT * from candidate WHERE can_id ='$CanID'");
 	$res=mysql_fetch_assoc($query1);
	$iVotes=$res["Votes"];
	$fVotes=$iVotes+1;
 	$query=mysql_query("UPDATE candidate SET Votes='$fVotes' WHERE can_id='$CanID'");
 	header("Location:VOTING1.php");
 }
 ?>