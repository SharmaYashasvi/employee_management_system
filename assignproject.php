<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `project` order by subdate desc";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Project Status</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
<header>
        <nav>
            <h1>GROUP-11</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homered" href="addemp.php">ADD EMPLOYEE</a></li>
                <li><a class="homeblack" href="viewemp.php">VIEW EMPLOYEE</a></li>
                <li><a class="homeblack" href="assign.php">ASSIGN PROJECT</a></li>
                <li><a class="homeblack" href="assignproject.php">PROJECT STATUS</a></li>
                <li><a class="homeblack" href="salaryemp.php">SALARY TABLE</a></li> 
                <li><a class="homeblack" href="empleave.php">EMPLOYEE LEAVE</a></li>
                <li><a class="homeblack" href="alogin.html">LOG OUT</a></li>
            </ul>
        </nav>
    </header>
	
	<div class="divider"></div>
	<div id="divimg">

		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Submission Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['eid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>"; 

				}


			?>

		</table>
		
	
</body>
</html>