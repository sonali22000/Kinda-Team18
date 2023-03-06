<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<div class="row">
 <div class="col-md-6" style="text-align:left;">
 <br><br>
    <h5><b>Our Kids</b></h5>
    <p>Early Learning captures the essence of what Your Kids Our Kids is all about, nurturing and stimulating enviroments 
      that inspire a love of learning. 'Early Learning' happens everywhere. Young children develop at an extremely fast pace 
      and everthing they encounter offers a learning experience. Research shows us that children who start ahead tend to stay 
      ahead. Significant differences in children's development are evident by age two and have a tendency not to close over 
      time. The early years provide the foundation for the rest of a child's life. Children are born ready to learn and the 
      best learning happens in nurturing, positive, stimulating environments. That's why high-quality early learning experiences 
      are so important. By creating these environments, we're providing the best opportunities for children to fulfil their 
      potential.</p>
      <img src="image/kidsinfo.jpg" class="kids-img" alt="image" class="rounded" width="550" height="400" style="align-items: center;">
      
    </div>
   
 
<!--Creating form-->

    <div class="col-md-6" style="text-align:left;">
    <br><br>
    <form method="post" action="" onsubmit="return formkval()" name="formk">
    <input id="kidsid" type="int" name="kidsid" class="form-control" placeholder="Kids ID:" required><br>
    <input type="text" name="kidsname" class="form-control" placeholder="Kids Name:" required><br>
    <input id="parentsname" type="text" name="parentsname" class="form-control" placeholder="Parents Name:" required><br>
    <input id="dob" type="date" name="dob" class="form-control" placeholder="Kids Birth Day:" required><br>
    <input id="phone" type="int" name="phone" class="form-control" placeholder="Contact Number:" required><br>
    <input  type="email" name="email" class="form-control" placeholder="E-mail Address:" required><br>
    <input id="address" type="text" name="address" class="form-control" placeholder="Address:" required><br>
    
    <input type="Submit" value="Submit" name="submit" ><span onmouseover="this.style.color='red';
=======
    <input type="Submit" value="CreateStudentProfile" name="submit" <span onmouseover="this.style.color='red';

           this.style.backgroundColor='black';
           this.style.fontSize='1em'; ";
onmouseout="
           this.style.color='blue';
           this.style.backgroundColor='white';
           this.style.fontSize='1.1em';"; > 
           </span>
        <button onclick="window.location.href='viewkidsinfo.php';">
       <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 Meet Our Kids</span></button>

                 <br> <br>
<a class="btn btn-danger" href="contact.php" role="button">Back</a>

<br> <br> <br> <br> <br> <br> <br> <br> <br> 
    </div>
 </div>    
 
</form>

<!--Getting values from end user-->

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
    }

}

?>

<?php include "footer1.php" ?>