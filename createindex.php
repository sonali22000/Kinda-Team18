<?php
$title="crup app for kindergarten";
include "headerr.php"?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- creating form for applying teacher-->

<form  method="post"  action=""> 

 <div class="row">
    <div class="col-md-6">
    <h4><b>Applying for the post of Kindergarden Teacher</b></h4>
    </div>

 </div>    

 <div class="row">
 <div class="col-md-6">
    <h5>Description</h5>
    <p>We are looking for an enthusiastic kindergarten teacher to foster and facilitate the intellectual 
        and social development of the children. Teaching in kindergarten includes planning, implementing 
        and assessing lessons. You will teach children with patience and creativity. Kindergarten Teacher
        duties include designing a teaching plan and using activities and instructional methods to motivate
        children.</p>
   <br><br><br><br><br><br><br><br>
    <h5>Responsibilities </h5>
    <p1>* Design and follow a complete teaching plan</p1><br>
    <p1>* Teach alphabet and numeracy along with personal, social and emotional skills</p1><br>
    <p1>* Organize learning material and resources</p1>
   <br><br>
    <h5>Requirements</h5>
    <p1>* Excellent knowledge of child development and latest education theories and practices</p1><br>
    <p1>* Teaching and organisation skills</p1><br>
    <p1>* Creative and artistic teaching abilities</p1><br>
    <p1>* Patience and flexibility</p1><br>
    <p1>* Strong communication skills</p1>
    </div>
    <div class="col-md-6" style="text-align:left;">
    <input type="text" name="fname" required placeholder="First Name" class="form-control" ><br>
    <input type="text" name="lname" required placeholder="Last Name" class="form-control" ><br>
    <input type="text" name="address" required placeholder="Postal Address" class="form-control"><br>
    <input type="int" name="postalsode" required placeholder="Postal Code" class="form-control"><br>
    <input type="teintxt" name="contactno" required placeholder="Contact Number" class="form-control"><br>
    <input type="text" name="emailid" required placeholder="Email" class="form-control"><br><br>
    <span class="material-icons-round" style="font-size:20px;color:blue;">
      <b>upload_cv <b>
   </span><br><br><br>
   <input type="submit" value="Apply" name="Apply" >
    </div>
 </div>   
   
 
 </select>


</form>

<?php 
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $contactno = $_POST['contactno'];
    $emailid = $_POST['emailid'];
    include 'db.php';
    $sql = "insert into teacherscareer(fname,lname,address,postalcode,contactno,emailid)
    values('$fname', '$lname', '$address', '$postalcode','$contactno', '$emailid')";

if ($conn->query($sql)===true){
        echo "Your information is added successflly";
}
else{
        echo "Error:" . $conn->error;
}
}
?>
<?php include "footer1.php" ?>