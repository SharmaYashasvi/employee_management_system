
<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$pid = (isset($_GET['pid']) ? $_GET['pid'] : '');
$sql = "SELECT pid, project.eid, pname, duedate, subdate, mark, points, firstName, lastName, base, bonus, total FROM `project` , `rank` ,`employee`, `salary`  WHERE project.eid = $id AND pid = $pid";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $eid = mysqli_real_escape_string($conn, $_POST['eid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  

  $mark = mysqli_real_escape_string($conn, $_POST['mark']);
  $points = mysqli_real_escape_string($conn, $_POST['points']);
  $base = mysqli_real_escape_string($conn, $_POST['base']);
  $bonus = mysqli_real_escape_string($conn, $_POST['bonus']);
  $total = mysqli_real_escape_string($conn, $_POST['total']);

  $upPoint = $points+$mark;
  
  $upBonus = $bonus +  $mark;
  $upSalary = $base + ($upBonus*$base)/100; 
  echo "$upBonus";
  echo "string";
  echo "$upSalary";
 
 $result = mysqli_query($conn, "UPDATE `project` SET `mark`='$mark' WHERE eid=$eid and pid = $pid");

 $result = mysqli_query($conn, "UPDATE `rank` SET `points`='$upPoint' WHERE eid=$eid");
 $result = mysqli_query($conn, "UPDATE `salary` SET `bonus`='$upBonus' ,`total`='$upSalary' WHERE id=$eid");




 echo ("<SCRIPT LANGUAGE='JavaScript'>
   
    window.location.href='assignproject.php  ';
    </SCRIPT>");

  
}
?>




<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $pid = (isset($_GET['pid']) ? $_GET['pid'] : '');
  $sql1 = "SELECT pid, project.eid, project.pname, project.duedate, project.subdate, project.mark, rank.points, employee.firstName, employee.lastName, salary.base, salary.bonus, salary.total FROM `project` , `rank` ,`employee`, `salary`  WHERE project.eid = $id AND project.pid = $pid AND project.eid = rank.eid AND salary.id = project.eid AND employee.id = project.eid AND employee.id = rank.eid";
  $result1 = mysqli_query($conn, $sql1);
  if($result1){
  while($res = mysqli_fetch_assoc($result1)){
  $pname = $res['pname'];
  $duedate = $res['duedate'];
  $subdate = $res['subdate'];
  $firstName = $res['firstName'];
  $lastName = $res['lastName'];
  $mark = $res['mark'];
  $points = $res['points'];
  $base = $res['base'];
  $bonus = $res['bonus'];
  $total = $res['total'];
  
}
}

?>

<html>
<head>
  <title>MARKS</title>
  
    <link href="assignmark.css" rel="stylesheet" media="all">
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
    <div class="loginbox">
    <img src="emplog.png" class="avtar">
    <h1>PROJECT MARKS</h1>
  
    <form id = "registration" action="mark.php" method="POST">



                        
                        <h1>PROJECT NAME</h1>
                            <input  type="text"  name="pname" value="<?php echo $pname;?>" readonly>
                       
                       
                        
                        
                            <h1>EMPLOYEE NAME</h1>
                            <input  type="text" name="firstName" value="<?php echo $firstName;?> <?php echo $lastName;?>" readonly>
                       

                       


                        
                            <h1>DUE DATE</h1>
                                     <input  type="text" name="duedate" value="<?php echo $duedate;?>" readonly>
                              
                                     <h1>SUBMISSION DATE</h1>
                                    <input  type="text"  name="subdate" value="<?php echo $subdate;?>" readonly>
                               


                                    <h1>ASSIGN MARK</h1>
                            <input  type="text"  name="mark" value="<?php echo $mark;?>">
                       

                       
                        <input type="hidden" name="eid" id="textField" value="<?php echo $id;?>" required="required">
                        <input type="hidden" name="pid" id="textField" value="<?php echo $pid;?>" required="required">
                         <input type="hidden" name="points" id="textField" value="<?php echo $points;?>" required="required">
                        <input type="hidden" name="base" id="textField" value="<?php echo $base;?>" required="required">
                        <input type="hidden" name="bonus" id="textField" value="<?php echo $bonus;?>" required="required">
                        <input type="hidden" name="total" id="textField" value="<?php echo $total;?>" required="required">
                      
                        <div class="p-t-20">
		              	<button class="btn btn--radius btn--green" type="update" style="float: left; margin-right: 60px" style="text-decoration: none; color:black" name="update">ASSIGN MARKS</button>
	                    	</div>


                        
                            
                       
                        
                    </form>
                   
                </div>
           


</body>
</html>
