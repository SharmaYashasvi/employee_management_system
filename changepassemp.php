<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['password']){
            $sql = "UPDATE `employee` SET `password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Password Updated')
                window.location.href='myprofile.php?id=$id';</SCRIPT>"); 
          
        }

        else{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Update Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
        }

  
}
?>




<!-- <?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $old = $res['password'];
  echo "$old";
}
}

?> -->

<html>
<head>
  <title>Change Password</title>
 
    <link href="changepassemp.css" rel="stylesheet" media="all">
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
    
    <h1>TIME IS VERY PRECIOUS THING !!! </h1>
    <h1>NEVER WASTE IT BY CLICKING ON FORGOT PASSWORD!!! </h1>
                    <form id = "registration" action="changepassemp.php" method="POST">

                    <h1>ENTER OLD PASSWORD</h1>
                                     <input  type="Password" placeholder="OLD PASSWORD" name = "oldpass" required >
                               
                                     <h1>ENTER NEW PASSWORD</h1>
                                    <input type="Password" placeholder="NEW PASSWORD" name="newpass" required>
                               

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">UPDATE</button>
                        </div>
                        
                    </form>
                    
                    </div>


</body>
</html>
