<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<!-- creating form for kidsinfo-->

<form  method="post"  action=""> 
<div class="row">
    
              
    <div class="form-group mb-4" style="color: black;>
              <label for="kidsid"></label>
              <input id="kidsid" type="int" name="kidsid" class="form-control" placeholder="Kids ID:" style="width: 500px" required></input>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="kidsname"></label>
              <input id="kidsname" type="text" name="kidsname" class="form-control" placeholder="Kids Name:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="parentsname"></label>
              <input id="parentsname" type="text" name="parentsname" class="form-control" placeholder="Parents Name:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="dob"></label>
              <input id="dob" type="date" name="dob" class="form-control" placeholder="Kids Birth Day:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="phone"></label>
              <input id="phone" type="int" name="phone" class="form-control" placeholder="Contact Number:"  style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="email"></label>
              <input  type="text" name="email" class="form-control" placeholder="E-mail Address:" style="width: 500px" required>
            </div>
            <div class="form-group my-4" style="color: black;>
              <label for="address"></label>
              <input id="address" type="text" name="address" class="form-control" placeholder="Address:"  style="width: 500px" required>
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