<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
<header>
        <nav>
            <h1></h1>
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
	
		<h2 style="font-family: serif; font-size: 25px; text-align: center;">EMPLOYEE LEADER-BOARD</h2>
    	<table>

			<tr bgcolor="#f4abaa">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Points</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		</table>

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color:black"> RESET POINTS</button>
		</div>

		
	</div>
</body>
</html>