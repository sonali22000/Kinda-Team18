<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<!-- creating form for kidsinfo-->

<form  method="post"  action=""> 
 <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="Teachers First Name" class="form-control" ></div>
    
    <div class="col">
    <input type="text" name="lname" required placeholder="Teachers Last Name" class="form-control"></div>

    <div class="col">
    <input type="text" name="email" required placeholder="Teachers Email" class="form-control"> <br></div>
 </div> 


 <div class="row">
   <div class="col">
   <input type="text" name="phone" required placeholder="Phone Number" class="form-control" > </div>

   <div class="col">
   <input type="text" name="address" required placeholder="Address" class="form-control" ><br> </div>

   <div class="col">
   <input type="text" name="bio" required placeholder="Teachers Biography" class="form-control" > </div>
 </div>


 <div class="row"> 
   <div class="col">
   <input type="submit" value="Submit" name="Submit"></div>
 </div>
</form>



<?php
//Getting values from end user
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $bio=$_POST['bio'];
    include 'db.php';
    $sql="insert into kidsinfo(fname,lname,parentsname,dob,phone,address)
    values('$fname','$lname','$parentsname', '$dob', '$phone', '$address')";
    if($conn->query($sql)===TRUE){
        echo"Your information is added successfully";
    }
    else{
        echo"Erro: .$conn->error";
    }
}
?>

<?php include "footer1.php" ?>