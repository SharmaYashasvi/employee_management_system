<!DOCTYPE html>
<html>

<head>
   

    
    <link href="assign.css" rel="stylesheet" media="all">
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

    <div class="loginbox">
    <img src="emplog.png" class="avtar">
    <h1>Assign Project</h1>
        <form action="process/assignp.php" method="POST" enctype="multipart/form-data">

                    <p>EMPLOYEE ID</p>
                    <input type="text" placeholder="Employee ID" name="eid" required="required">
            <p>PROJECT NAME</p>
            <input  type="text" placeholder="Project Name" name="pname" required="required">

            <p>DUE DATE</p>
            <input  type="date" placeholder="date" name="duedate" required="required">

             

            <input type="submit" name="login-submit" value="SUBMIT">
           
           </form>
           
       </div>
               
               
   </body>
   </html>



    