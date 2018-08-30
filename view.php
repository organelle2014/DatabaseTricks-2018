<html>
<title>Send Data</title>

<body>

	<a href="dashboard.php">Dashboard</a> 
	<a href="view.php">View Records</a> 
	<a href="logout.php">Logout</a><br>
	
	<head>Insert New Record</head><br>
	<form name="form" method="post">
		<table border=1>
	<?php
		//establish server connection 
		$con=mysql_connect("localhost","root","");
		if(!$con){
			echo"Failed to Connect to Database";
		}else{
			//select database to use
			$db=mysql_select_db("databasetricks",$con);
			//query database for the information now
			$result=mysql_query("select *from new_record",$con);
			
			
			//after selecting the values, we then have then in a table using a loop
			echo'<table border="1" style="border-collapse:collapse;">
				<thead>';
			echo'<tr>';
			echo'<th><strong>S.No</strong></th>';
			echo'<th><strong>Name</strong></th>';
			echo'<th><strong>Age</strong></th>';
			echo'<th><strong>Edit</strong></th>';
			echo'<th><strong>Delete</strong></th>';
		
		//using the while loop we then fetch data from the database. 
		while($row = mysql_fetch_array($result)){?>
				<tr><td><?php echo $count; ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['age']?></td>
					<td><a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
				<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
		<?php $count++; }} ?>
	
	</table>
	</form>
	<button><a href="insert.php">New User</a></button>
	
</body>
</html>