<?php

require_once ('process/dbh.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Salary Table</title>
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
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				
				
				<th align = "center">Base Salary</th>
				<th align = "center">Bonus</th>
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";
					
					

				}


			?>
			
			</table>
</body>
</html>