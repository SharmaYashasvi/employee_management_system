<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	//$salary = mysqli_real_escape_string($conn, $_POST['salary']);





	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`nid`='$nid',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	
}
}

?>

<html>
<head>
	<title>EDIT EMPLOYEE</title>
	
    <link href="editempl.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>GROUP-11</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">ADD EMPLOYEE</a></li>
				<li><a class="homered" href="viewemp.php">VIEW EMPLOYEE</a></li>
				<li><a class="homeblack" href="elogin.html">LOG OUT</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>




    <div class="loginbox">
    <img src="emplog.png" class="avtar">
    <h1>EDIT EMPLOYEE INFORMATION</h1>
                    <form id = "registration" action="edit.php" method="POST">

                    <h1>FIRST NAME</h1>
                                     <input type="text" name="firstName" value="<?php echo $firstname;?>" >
                                
                           
                                     <h1>LAST NAME</h1>
                                    <input  type="text" name="lastName" value="<?php echo $lastname;?>">
                               





                      <h1>EMAIL</h1>
                            <input type="text"  name="email" value="<?php echo $email;?>">
                        
                            <h1>BIRTHDAY</h1>
                                    <input  type="date" name="birthday" value="<?php echo $birthday;?>">
                                   
                                    <h1>GENDER</h1>
									<input  type="text" name="gender" value="<?php echo $gender;?>">
                                
                        
                                    <h1>CONTACT NUMBER</h1>
                            <input  type="text" name="contact" value="<?php echo $contact;?>">
                        

                            <h1>N-ID</h1>
                            <input  type="text" name="nid" value="<?php echo $nid;?>">
                            <h1>ADDRESS</h1>
                            <input  type="text"  name="address" value="<?php echo $address;?>">
                        

                            <h1>DEPARTMENT</h1>
                            <input  type="text" name="dept" value="<?php echo $dept;?>">
                       

                            <h1>DEGREE</h1>
                            <input  type="text" name="degree" value="<?php echo $degree;?>">
                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        

                        <div class="p-t-20">
			<button class="btn btn--radius btn--green" type="update" style="float: left; margin-right: 60px" style="text-decoration: none; color:black" name="update">UPDATE</button>
		</div>
                            
                        
                        
                    </form>
                </div>


     
</body>
</html>
