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
<img src="image/down.jpg">


<br><br><br><br><br><br><li><a href="enrollmentform.php"><i class="material-icons" style="font-size:60px;color:black text-center;">contacts</i>Enrollment Form</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="enrollmentform.php"></a></li>
</span></li>



</a>

</div>

   <div class="col-md-6">
   <select name="pname">
    <option value="ORDER BOOK LIST"> ORDER BOOK LIST </option>
    <option value="ORDER SCHOOL BAG"> ORDER SCHOOL BAG </option>
   
    </select><br> <br>

   
   <input type="text" name="Name of the kid" required placeholder="Name of the kid" class="form-control"> <br>


  <input type="text" name="Guardian Details" required placeholder="Please Enter Mother or Father's name" class="form-control" > <br>

  <input type="date" name="Birth Date" required placeholder="Birth Date" class="form-control" > <br>


  <input type="int" name="phone number" required placeholder="Phone Number" class="form-control" >  <br> 

  <input type="int" name="KidsId" required placeholder="Kidsid" class="form-control" > <br> 

  <input type="int" name="Age of Kid" required placeholder="Age of Kid" class="form-control" >  <br> 
 

  <input type="submit" value="Apply" name="Apply"  <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 
  


  <br> <br> <br> <br> <br> <br>
                
                
   </div>

  

</div>



</form>



<?php


//Getting values from end user

if(isset($_POST['Apply'])){
   $pname=$_POST['pname'];
   $description=$_POST['Name of the Kid'];
   $startdate=$_POST['Please enter Mother or Fathers name'];
   $enddate=$_POST['Birth Date'];
   $capacity=$_POST['Phone Number'];
   $kidsid=$_POST['kidsid'];
   $teid=$_POST['Age of Kid'];
   include 'db.php';
   $sql="insert into program(pname,Name of the Kid,Please enter Mother or Fathers name,Birth Date,Phone Number,KidsId,Age of Kid)
   values('$pname,$NameoftheKid,$PleaseEnterMotherorFathersname,$BirthDate,$PhoneNumber,$KidsId,$AgeofKid')";
   if($conn->query($sql)===TRUE){
               
     echo"Your datas are added successfully";

 }
 else{

     echo"Error:" .$conn->error;

 }
}

?>
       
               













<?php include "footer1.php" ?>