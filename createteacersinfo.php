<?php
$title="crup app for kindergarten";
include "headerr.php"?>

<!-- creating form for teachersinfo-->
<form  method="post"  action=""> 
<div class="row">
    
              
    <div class="form-group mb-4" style="color: black;>
              <label for="teid"></label>
              <input  type="int" name="teid" class="form-control" placeholder="Teacher ID:" style="width: 500px" required></input>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="tname"></label>
              <input  type="text" name="tname" class="form-control" placeholder="Teacher Name:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="phone"></label>  
              <input  type="int" name="phone" class="form-control" placeholder="Phone Number:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="email"></label>
              <input  type="text" name="email" class="form-control" placeholder="E-mail Address:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="address"></label>
              <input  type="text" name="address" class="form-control" placeholder="Address:"  style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="bio"></label>
              <textarea name="bio" class="form-control" style="width: 500px" rows="4" placeholder="Bio:"  required></textarea>
            </div>
            <div class="form-group my-4" >
        
              <input type="Submit" value="Submit" name="submit" <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 </span>
            <div>
        
        </div>
        
        
    </div>


    <?php
if (isset($_POST ['submit'])){
    $teid = $_POST['teid'];
    $tname = $_POST['tname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $bio = $_POST['bio'];
    include 'db.php';
    $sql = "insert into teachersinfo (teid,tname,phone,email,address,bio)
    values('$teid','$tname','$phone','$email','$address','$bio')"; 

    if ($conn ->query($sql) === TRUE){
        echo "Your information is added Successfully";
    }
    else {
        echo "Error:" . $conn->error;
    }

}


?>

<?php include "footer1.php" ?>