<!DOCTYPE html>
<?php include "headerr.php" ?>
<div class="row">
<img class="header-image" src="https://i.pinimg.com/originals/64/07/f8/6407f8b72e8c1afa198ddd37b81baef6.jpg  " alt="background image"class="rounded" width="500" height="400">>
</div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <div class="row">
        <div class="col-md-12 text-center">
        <h4><b><i>ADMISSION OPEN FOR 2023</i></b></h4>
        </div>
    </div>  
    <div class="row">
        <div class="col-md-12 text-center">
        <h5><b> Download our enrollment form and email to</b></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
        <h6><b> info@twinklingstars.fi</b></h6>  
    </div>

<br><br>


<div class="row">
            <div class="col-md-6">
            

            </div>

                <div class="col-md-4 text-middel">
        
   
    
 


            </div>

            <div class="col-md-6" style="color: aliceblue;">


          </div>
        
<!-- creating form for program in enrollmentform-->

<form  method="post"  action="" onsubmit="return validateForm()" name="enrol application"> 


<div class="row">

<div class="col-md-6">
<h4><b>Why you should enroll your child to our kindergarten</b> <br> <br></h4>
<p>Enrolling them in kindergarten is crucial for their learning and growth, and preparing them early will go a long way.
<br><br>Educating your child privately is simply too large an investment to make without seeking professional advice.
And we are ensure the best for your kid</p>
<img src="image/bb.jpg" alt="image" class="rounded" width="550" height="300" style="align-items: right;">






</a>

</div>

   <div class="col-md-6">
  
    

   
   <input type="int" name="programid" required placeholder="programid" class="form-control"> <br>


  <input type="int" name="kidsid" required placeholder="Kidsid" class="form-control" > <br>

  <input type="date" name="enrollmentdate" required placeholder="Enrollmentdate" class="form-control" > <br>


  <input type="int" name="academicyear" required placeholder="Academicyear" class="form-control" >  <br> 

 

  

  <input type="submit" value="Apply" name="Apply" <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; >
                 
  
<br><li><a href="enrollment.php"><i class="material-icons" style="font-size:100px;color:RED;text-center;">book</i>Enrollment Form</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="enrollmentform.php"></a></li>
</span></li>

  <br> <br> <br> <br> <br> <br>
                
                
   </div>

  

</div>



</form>



<?php


//Getting values from end user

if(isset($_POST['Apply'])){
   $programid=$_POST['programid'];
   $kidsid=$_POST['kidsid'];
   $enrollmentdate=$_POST['enrollmentdate'];
   $academicyear=$_POST['academicyear'];
   include 'db.php';
   $sql="insert into enrollment(programid,kidsid,enrollmentdate,academicyear)
   values('$programid','$kidsid','$enrollmentdate','$academicyear')";
   if($conn->query($sql)===TRUE){
               
     echo"Your datas are added successfully";

 }
 else{

     echo"Error:" .$conn->error;

 }
}

?>
       
               













<?php include "footer1.php" ?>