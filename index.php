<!DOCTYPE html>
<?php
$title="crup app for kindergarten";
include "headerr.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
   <div class="card text-bg-dark">
           <img src="image/home.jpg" class="card-img" alt="image"class="rounded" width="500" height="425">
           <div class="card-img-overlay">
         <h3 class="card-text"><b>When you <br> enter this <br> Loving School <br>Consider yourself <br> One of the special <br>
           Members of an <br> Extraordinary Family</b></b></h3>
   </div>
</div>
<br><h2><b>We are group of teachers  who really  love children's and enjoy every moment of teaching and playing with 
        our students.</b></h2><br><br><br><br>

<p>     The Twinkling Stars Kindergarten District recognizes the significant importance of early education and its impact on 
        future academic success. Twinkling Stars test results show students exposed to full-day kindergarten have greater 
        success in learning essential early academic skills. </p>
        <br><br><br><br>

<p>     Twinkling Stars's full-day kindergarten program is developmentally and individually appropriate in addressing cognitive, 
        social, emotional and physical areas of development. The extra time for the full-day program allows teachers 
        to challenge students, provide for differentiated instruction, and spend extra time on difficult concepts.</p>      

<!-- creating form for applying a teacher-->

<br><br><br><br><br><br><br>
<div class="row">
    <div class="col">
    <h4><b>Applying for the post of Kindergarden Teacher</b></h4><br><br>
    </div>
 </div> 

<div class="row">
<div class="col-md-6">
<div class="career image">
           <img src="image/career.png" class="career-img" alt="image" class="rounded" width="500" height="300">
</div>
</div>

<div class="col-md-6">
<div class="career image">
           <img src="image/career1.jpg" class="career1-img" alt="image" class="rounded" width="530" height="300">
           <br><br><br>
</div>
</div>
</div>   


 <div class="row">
 <div class="col-md-6" style="text-align: left;">
    <h5><b>Description</b></h5>
    <p>We are looking for an enthusiastic kindergarten teacher to foster and facilitate the intellectual 
        and social development of the children. Teaching in kindergarten includes planning, implementing 
        and assessing lessons. You will teach children with patience and creativity. Kindergarten Teacher
        duties include designing a teaching plan and using activities and instructional methods to motivate
        children.</p>
   
   <br><br>

    <h5><b>Responsibilities </b></h5>
    <p>* Design and follow a complete teaching plan</p>
    <p>* Teach alphabet and numeracy along with personal,social and emotional skills </p>
    <p>* Organize learning material and resources</p>
   <br><br>

    <h5><b>Requirements</b></h5>
    <p>* Excellent knowledge of child development and latest education theories and practices</p>
    <p>* Teaching and organisation skills</p>
    <p>* Creative and artistic teaching abilities</p>
    <p>* Patience and flexibility</p>
    <p>* Strong communication skills</p>
    <br><br>
    </div>
 
<!--Creating form-->

    <div class="col-md-6" style="text-align:left;">
    <form method="post" action="" onsubmit="return validateForm()"name="form1">
    <input type="text" name="fname" required placeholder="First Name" class="form-control" ><br>
    <input type="text" name="lname" required placeholder="Last Name" class="form-control" ><br>
    <input type="text" name="address" required placeholder="Postal Address" class="form-control"><br>
    <input type="int" name="postalcode" required placeholder="Postal Code" class="form-control"><br>
    <input type="int" name="contactno" required placeholder="Contact Number" class="form-control"><br>
    <input type="text" name="emailid" required placeholder="Email" class="form-control"><br><br>
    <span class="material-icons" style="font-size:60px;color:darkblue;">
      upload_file
   </span>Upload CV <input type="file" id="myFile" name="filename"><br><br><br>

   <input type="submit" value="Apply" name="Apply" <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; >
    </div>
 </div>    
 
</form>

<!--Getting values from end user-->

<?php 
if(isset($_POST['Apply'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $contactno = $_POST['contactno'];
    $emailid = $_POST['emailid'];
    include 'db.php';
    $sql="insert into teacherscareer(fname,lname,address,postalcode,contactno,emailid)
    values('$fname', '$lname', '$address', '$postalcode','$contactno', '$emailid')";

if ($conn->query($sql)===true){

        echo "Your information is added successflly";
}
else{
        echo "Error:" . $conn->error;
}
}

?>
 
</script>
<!--end of form validation-->

<?php include "footer1.php" ?>




