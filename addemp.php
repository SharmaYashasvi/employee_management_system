<!DOCTYPE html>
<html>

<head>
   

    
    <title>ADD EMPLOYEE</title>

    

    

    
    <link href="addempl.css" rel="stylesheet" media="all">
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
    <h1>REGISTRATION INFORMATION</h1>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">

                    <p>FIRST NAME</p>
            <input type="text" name="firstName" placeholder="FIRST NAME"required="required">
            <p>LAST NAME</p>
            <input type="text" name="lastName" placeholder="LAST NAME" required="required">

            <p>EMAIL</p>
            <input type="text" name="email" placeholder="EMAIL"required="required">
            <p>BIRTHDAY</p>
            <input type="date" name="birthday" placeholder="BIRTHDAY" required="required">

            <p>CONTACT NUMBER</p>
            <input type="text" name="contact" placeholder="CONTACT NUMBER"required="required">
            <p>N-ID</p>
            <input  type="text" placeholder="NID" name="nid" required="required">

            <p>ADDRESS</p>
            <input type="text" placeholder="ADDRESS" name="address" required="required">
            <p>DEPARTMENT</p>
            <input type="text" placeholder="DEPARTMENT" name="dept" required="required">


            <p>DEGREE</p>
            <input  type="text" placeholder="DEGREE" name="degree" required="required">
            
            <p>SALARY</p>
            <input type="text" placeholder="SALARY" name="salary">

            <p>GENDER</p>
            <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male">MALE</option>
                                            <option value="Female">FEMALE</option>
                                            <option value="Other">OTHER</option>
                                        </select>
              <p>SELECT PHOTO</p> 
           <input  type="file" placeholder="SELECT PHOTO" name="file">
            <input type="submit" name="login-submit" value="SUBMIT">
           
           </form>
           
       </div>
               
               
   </body>
   </html>

            









            
                        

                        
                            
                                
                                    
                        





                        
                           