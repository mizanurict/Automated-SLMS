<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seminar Library System</title>
<link href="./css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="./css/vstylesheet.css" rel="stylesheet" type="text/css" />
</head>
	<body>
	<div id="banner">
		<span class="head"><a href="index.php"> <img src="./images/logo2.png"  width="50" height="50"> </a> Seminar Library System</span><br />
		<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Information and Communication Technology
		</marquee>
	</div>
		<br>
		<div align="center">
		<div id="wrapper">
		<br />
		<br />
		<span class="SubHead">Total Teachers</span>
		<br />
		<br />

		<table id="customers">
			<tr>
                <th>Teacher ID</th>
                <th>Name</th>		
				<th>Phone</th>                
                <th>Department</th>                
                <th>Email</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","library");
			$sql = "SELECT * FROM teachers";
			$result = $conn->query($sql);

			if($result->num_rows >0){
				while($row = $result-> fetch_assoc()) {
					echo "<tr><td>" . $row["sid"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["branch"] . "</td><td>" . $row["email"] . "</td><td>"; 					
				}
			}
			else {
				echo "No Results";
			}
			$conn->close();

			?>
		</table>
		<br />
		<br />
		<a href="adminhome.php" class="link">Go Back</a>
		<br />
		<br />

		</div>
		</div>
	</body>
</html>







