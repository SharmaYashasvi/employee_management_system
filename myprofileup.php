<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
 


 $result = mysqli_query($conn, "UPDATE `employee` SET `email`='$email',`contact`='$contact',`address`='$address' WHERE id=$id");

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='myprofile.php?id=$id  ';
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
  // $salary = $res['salary'];
}
}

?>

<html>
<head>
  <title>Update Profile</title>
  
    <link href="myprofileup.css" rel="stylesheet" media="all">
</head>
<body>
  <header>
    <nav>
      <h1>GROUP-11</h1>
      <ul id="navli">
        <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>"">MY PROFILE</a></li>
        <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">APPLY LEAVE</a></li>
        <li><a class="homeblack" href="elogin.html">LOG OUT</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="divider"></div>
  

  <div class="loginbox">
    
    <h1>UPDATE YOUR INFORMATION</h1>
                    <form id = "registration" action="myprofileup.php" method="POST">



                    <h1>EMAIL</h1>
                            <input  type="text"  name="email" value="<?php echo $email;?>">
                        
                       
                        
                            <h1>CONTACT</h1>
                            <input  type="text" name="contact" value="<?php echo $contact;?>">
                       

                       

                        
                            <h1>ADDRESS</h1>
                            <input  type="text"  name="address" value="<?php echo $address;?>">
                       

                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    
                    <button class="btn btn--radius btn--green" onclick="window.location.href = 'changepassemp.php?id=<?php echo $id?>';">Change Password</button>
                </div>
            


</body>
</html>
