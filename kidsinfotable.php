<?php
$title="crup app for kindergarten";
include "../layout/headerr.php"?>


<!-- creating form for kidsinfo-->

<form  method="post"  action=""> 
 <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="Kids First Name" class="form-control" ></div>
    
    <div class="col">
    <input type="text" name="lname" required placeholder="Kids Last Name" class="form-control"></div>

    <div class="col">
    <input type="text" name="parentsname" required placeholder="Parents Name" class="form-control"> <br></div>
 </div> 


 <div class="row">
   <div class="col">
   <input type="text" name="dob" required placeholder="Birth Date" class="form-control" > </div>

   <div class="col">
   <input type="text" name="phone" required placeholder="Phone Number" class="form-control" > </div>

   <div class="col">
   <input type="text" name="address" required placeholder="Address" class="form-control" ><br> </div>
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
    $parentsname=$_POST['parentsname'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
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

<?php include "../layout/footer1.php" ?>