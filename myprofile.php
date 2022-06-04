<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $sql2 = "SELECT total from `salary` WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn , $sql2);
  $salary = mysqli_fetch_array($result2);
  $empS = ($salary['total']);
 
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
  $pic = $res['pic'];
}
}

?>

<html>
<head>
  <title>MY PROFILE</title>
  
    <link href="myprofile.css" rel="stylesheet" media="all">
</head>
<body>
  <header>
    <nav>
      <h1>GROUP-11</h1>
      <ul id="navli">
        <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>"">MY PROFILE</a></li>
        <li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">MY PROJECT</a></li>
        <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">APPLY LEAVE</a></li>
        <li><a class="homeblack" href="elogin.html">LOG OUT</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="divider"></div>
  

  <div class="loginbox">
    <img src="process/<?php echo $pic;?>" class="avtar">
    <h1>YOUR INFORMATION</h1>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >

                        


                    <h1>FIRST NAME</h1>
                                     <input  type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
                    <h1>LAST NAME</h1>
                                    <input  type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
                                





                                <h1>EMAIL</h1>
                            <input  type="text"  name="email" value="<?php echo $email;?>" readonly>
                            <h1>DATE OF BIRTH</h1>
                                    <input  type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                   
                                    <h1>GENDER</h1>
                                  <input  type="text" name="gender" value="<?php echo $gender;?>" readonly>
                               
                        
                                  <h1>CONTACT NUMBER</h1>
                            <input  type="text" name="contact" value="<?php echo $contact;?>" readonly>
                       

                        
                            <h1>N-ID</h1>
                            <input  type="text" name="nid" value="<?php echo $nid;?>" readonly>
                        

                        
                            <h1>ADDRESS</h1>
                            <input  type="text"  name="address" value="<?php echo $address;?>" readonly>
                       

                            <h1>DEPARTMENT</h1>
                            <input  type="text" name="dept" value="<?php echo $dept;?>" readonly>
                           
                            <h1>DEGREE</h1>
                            <input  type="text" name="degree" value="<?php echo $degree;?>" readonly>
                      


                            <h1>TOTAL SALARY</h1>
                            <input  type="text" name="degree" value="<?php echo $empS;?>" readonly>
                       

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >UPDATE INFORMATION</button>
                        </div>
                        
                    </form>
                    </div>
</body>
</html>
