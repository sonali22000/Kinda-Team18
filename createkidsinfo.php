<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<!-- creating form for kidsinfo-->

<form  method="post"  action=""> 
<div class="row">
    
              
    <div class="form-group mb-4" style="color: black;>
              <label for="kidsid">Kids ID:</label>
              <input id="kidsid" type="int" name="kidsid" class="form-control" placeholder="Example: 001" style="width: 500px" required></input>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="kidsname">Kids Name:</label>
              <input id="kidsname" type="text" name="kidsname" class="form-control" placeholder="Example: Situ Anna" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="parentsname">Parents Name:</label>
              <input id="parentsname" type="text" name="parentsname" class="form-control" placeholder="Example: Nura Pekka" style="width: 500px" required>
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
              <label for="email">E-mail Address:</label>
              <input  type="text" name="email" class="form-control" placeholder="Example: xxxxxxxa@xxxxx.xxx" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="address">Address:</label>
              <input id="address" type="text" name="address" class="form-control" placeholder="Example: Kaivoselantie 4, Hameenlinna"  style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <button type="submit" class="btn btn btn-yellow btn-outline" >
              <input type="Submit" value="Submit" name="submit" style="color:coral; font-weight: bold; background-color: blanchedalmond;" class="btn btn btn-yellow btn-outline">
            <div>
        
        </div>


<?php
if (isset($_POST ['submit'])){
    $kidsid = $_POST['kidsid'];
    $kidsname = $_POST['kidsname'];
    $parentsname = $_POST['parentsname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    include 'db.php';
    $sql = "insert into kidsinfo (kidsid,kidsname,parentsname,dob,phone,email,address)
    values('$kidsid','$kidsname','$parentsname','$dob','$phone','$email','$address')"; 

    if ($conn ->query($sql) === TRUE){
        echo "Your information is added Successfully";
    }
    else {
        echo "Error:" . $conn->error;
    }

}

?>

<?php include "footer1.php" ?>