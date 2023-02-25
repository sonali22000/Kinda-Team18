<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<!-- creating form for enrollment-->

<from method="post" action="">
<div class="row">

         <div class="form-group mb-4" style="color: black;>
              <label for="kidsname">Kids Name:</label>
              <input name="kidsname" type="text" name="kidsname" class="form-control" placeholder="Example: Noah Fedrick" style="width: 500px" required></input>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="parentsdetails">Parents Name and Relationship:</label>
              <input id="parentsdetails" type="text" name="parentsdetails" class="form-control" placeholder="Example: Elisbeth-Mother" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="email">email:</label>
              <input id="email" type="int" name="email" class="form-control" placeholder="Example: abcde@gmail.com" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="Address">Address:</label>
              <input id="Address" type="text" name="address" class="form-control" placeholder="Example: No 23 G 75 Helsinki" style="width: 500px" required>
              </div>
              <div class="form-group my-4" style="color: black;>
              <label for="dob">Kids Birth Day:</label>
              <input id="dob" type="date" name="dob" class="form-control" placeholder="Example: 05.05.2020" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="phone">Contact Number:</label>
              <input id="phone" type="int" name="phone" class="form-control" placeholder="Example: 01234567890"  style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <button type="submit" class="btn btn btn-yellow btn-outline" >
              <input type="Submit" value="Submit" name="submit" style="color:coral; font-weight: bold; background-color: blanchedalmond;" class="btn btn btn-yellow btn-outline">
            <div>
        
        </div>





<?php
if (isset($_POST ['submit'])){
    
    $kidsname = $_POST['kidsname'];
    $parentsnameandrelationship = $_POST['parentsnameandrelationship'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
   
    
    include 'db.php';
    $sql = "insert into enrollmentform (kidsname,parentsnameandrelationship,email,address,dob,phone)
    values('$kidsname','$parentsnameandrelationship','$email','$dob','$address','$dob','$phone')"; 

    if ($conn ->query($sql) === TRUE){
        echo "Your information is added Successfully";
    }
    else {
        echo "Error:" . $conn->error;
    }

}


?>

<?php include "footer1.php" ?>