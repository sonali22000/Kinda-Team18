<?php
$title="crup app for kindergarten";
include "headerr.php"?>

 <div class="row">

 <div class="col-md-6" style="text-align: left;">
 <br><br>
    <h5><b>Our Teachers</b></h5>
    <p>We are often asked what makes the teachers in Twinkling Stars Kindergarten so highly skilled and what are the 
      secrets behind one of the most competent teacher. The teachers in Twinkling Stars Kindergarten are expected 
      to have a certain set of skills which are anticipated from qualified teachers that help to manage 
      work with pupils, establish the goals for learning, and collaborate with other teachers and 
      professionals at Twinkling Stars Kindergarten. We have defined our Teacher profile – the four characteristics 
      that describe what qualities Twinkling Stars Kindergarten teachers hold in general. All these characteristics or 
      competencies can be learnt and adapted.</p>
      <img src="image/teachersinfo.jpg" class="teachers-img" alt="image" class="rounded" width="550" height="400" style="align-items: center;">
      <br><br>
      
    </div>

    
<!--Creating form-->
<br><br>

    <div class="col-md-6" style="text-align:left;">
    <br><br>
    <form method="post" action=""  name="formt" onsubmit="return formtval()">
    <input  type="int" name="teid" class="form-control" placeholder="Teacher ID:"required ><br>
    <input  type="text" name="tname" class="form-control" placeholder="Teacher Name:" required><br>
    <input  type="int" name="phone" class="form-control" placeholder="Phone Number:" required><br>
    <input  type="email" name="email" class="form-control" placeholder="E-mail Address:" required><br>
    <input  type="text" name="address" class="form-control" placeholder="Address:" required><br>
    <textarea name="bio" class="form-control"  rows="3" placeholder="Bio:"  required></textarea><br>
    

    <input type="Submit" value="CreateTeacherProfile" name="submit" <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 </span>
    <button onclick="window.location.href='viewteachersinfo.php';">
       <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 Meet Our Teachers</span></button>
                 
<br> <br>
<a class="btn btn-danger" href="contact.php" role="button">Back</a>

<br> <br> <br> <br> <br> <br> <br> <br> <br> 

    
    </div>
    
 </div>    
 
</form>



<!--Getting values from end user-->

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