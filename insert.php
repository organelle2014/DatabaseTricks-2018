<html>
<title>Send Data</title>

<body>
	<?php
		//establish connection 
		$con=mysql_connect("localhost","root","");
		//select database
		$db=mysql_select_db("databasetricks",$con);
		if(isset($_POST['submit'])){//if the submit is set, collect data from all the variables as follows
			$date=date("Y-m-d H:i:s");
			$name=$_POST['name'];
			$age=$_POST['age'];
			
			//insert function using myql_query 
		$query=mysql_query("insert into new_record (trn_date, name, age)values('$date','$name','$age')");
			header("Location: view.php");
			echo"Record Successfully added";
			
		}
	mysql_close($con);
	?><br>
	<a href="dashboard.php">Dashboard</a> 
	<a href="view.php">View Records</a> 
	<a href="logout.php">Logout</a><br>
	
	<head>Insert New Record</head><br>
	
	<form name="form" method="post">
		<table border=1>
			<tr><td><input type="hidden" name="new" value="1" /></td></tr>
			<tr><td><input type="text" name="name" placeholder="Enter Name" required /></td></tr>
			<tr><td><input type="text" name="age" placeholder="Enter Age" required /></td></tr>
			<tr><td><input name="submit" type="submit" value="Submit" /></td></tr>
		</table>
	</form>
</body>
</html>