<?php
	$connect=mysql_connect('localhost','root','');
	$db=mysql_select_db("election"); 
	session_start();
 ?>
 <?php


 	$query1=mysql_query("SELECT * from candidate");
 	?><h2> ID    Name    Votes</h2> <?php
 	while ($res=mysql_fetch_assoc($query1)) {
 		?><h3><?php echo $res['can_id']?>   <?php echo $res['Name']?>   <?php echo $res['Votes']?></h3>
 	<?php } ?>
	
 