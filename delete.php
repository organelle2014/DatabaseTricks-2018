<html>
<title>Delete Data</title>

<body><br>
<a href="dashboard.php">Dashboard</a> 
	<a href="view.php">View Records</a> 
	<a href="logout.php">Logout</a><br>
	
	<head>Update Record</head><br>

	<?php
		//request the id from the view table using get method and will be used in updating the data
		$id=$_GET['id'];
		//create connection to database
		$con=mysql_connect("localhost","root","");
		//select the database that we need to put into use
		$db=mysql_select_db("databasetricks",$con);
		
		$query=mysql_query("select *from new_record where id='$id'", $con);
		$row=mysql_fetch_assoc($query);//this will fetch data from the database then show them on the form as is. 
		
		//the user now has the ability of changing the values sent in the database
		if(isset($_POST['new'])&&($_POST['new'])){
			//use the request method to pull the id once again ready for update. 
			//then declare the other stored variables in the database.
			$id=$_REQUEST['id'];
			$date=date("Y-m-d H:i:s");
			$name=$_REQUEST['name'];
			$age=$_REQUEST['age'];
			
			//after requesting the new data from the forms, its time to update the info into the database now. 
			$query=mysql_query("delete from new_record where id='$id'",$con);
			header("Location: view.php");
			echo"<script>javascript.alert(Delete successful...!!)</script>";
		}
	mysql_close($con);//disconnect from server after the process. 
	?>

	<form name="form" method="post">
		<table border=1>
			<tr><td><input type="hidden" name="new" value="1" /></td></tr>
			<tr><td><input name="id" type="hidden" value="<?php echo $row['id'];?>" </td></tr>
			<tr><td><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>"/></td></tr>
			<tr><td><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>"/></td></tr>
			<tr><td><input name="submit" type="submit" value="Delete" /></td></tr>
		</table>
	</form>
</body>
</html>