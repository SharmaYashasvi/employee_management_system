<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `employee` where id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
	//echo "$id";
?>

<html>
<head>
	<title>Apply Leave</title>
	<link rel="stylesheet" type="text/css" href="applylave.css">
</head>
<body >
	
	<header>
		<nav>
			<h1>GROUP-11</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">MY PROFILE</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">MY PROJECTS</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">APPLY LEAVE</a></li>
				<li><a class="homeblack" href="elogin.html">LOG OUT</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="loginbox">
    
    <h1>REST IS IMPORTANT THING FOR OUR BODY!!! </h1>
    <h1>BUT BE AWARE IT SHOULD NOT BECOME A HABIT!!! </h1>
                    <form action="process/applyleaveprocess.php?id=<?php echo $id?>" method="POST">


					<h1>REASON </h1>
                            <input type="text" placeholder="REASON" name="reason">
                       
							<h1>START DATE </h1>
                                    <input type="date" placeholder="START" name="start">
                                   
									<h1>END DATE </h1>
                                    <input  type="date" placeholder="END" name="end">
                                   
                             
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            

</body>
</html>