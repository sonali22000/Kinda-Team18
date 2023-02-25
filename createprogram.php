<!DOCTYPE html>
<?php include "headerr.php" ?>

 <!-- creating different activities in kindergarten-->               
 <div class="row">

    <h4><b>A place where a child can play, explore and learn!</b> <br> <br></h4>
    <p>
    Preschool days are the most important phase for a child’s emotional development; It’s when the child builds his/her confidence, self esteem and 
    creative expression. To help our children excel in life skills, we organize regular activities where our children across branches come together and 
    mesmerize everyone with their confidence and charisma. Stage exposure bolsters children’s creative expression, self-esteem and interpretation 
    skills- all of which can go a long way can go long way in empowering them. <br> <br></p>
    
                    <div class="col-md-4 text-center">
            
                <div class="card" style="wwidth: 18rem;">
                    <img src="image/activities1.jpg" class="card-img-top" alt="CURRICULAR ACTIVITIES">
                    <div class="card-body">
                      <p class="card-text"><h4>CURRICULAR ACTIVITIES</h4> Your kids will involve through a range of fun-filled activities like story-telling, rhymes and songs sessions, which can improve their personality.</p>
                    </div>
                  </div>
                </div>
            
                <div class="col-md-4 text-center">
                  <div class="card" style="wwidth: 18rem;">
                    <img src="image/activities2.jpg" class="card-img-top" alt="SPORTS ACTIVITIES">
                    <div class="card-body">
                      <p class="card-text"> <h4>SPORTS ACTIVITIES</h4> With an aim to build flexibility with teamspirit ans confidence amongst childrens, many sports activities such as yoga, taekwondo are organaised</p>
                    </div>
                  </div>
                </div>
            
            
                <div class="col-md-4 text-center">
                  <div class="card" style="wwidth: 18rem;">
                    <img src="image/activities3.jpg" class="card-img-top" alt="EXCURSIONSS">
                    <div class="card-body">
                      <p class="card-text" > <h4>EXCURSIONS</h4> Children go out and explore places such as museum, zoo or they go for picnic in a fun way. These excurstions are packed with interesting snacks.</p>
                    </div>
                   
                  </div>
                  <br><br><br>
                </div>

  

 </div>


 <!-- creating form for program in kindergarten-->

<form  method="post"  action="" onsubmit="return validateForm()"> 


<div class="row">

<div class="col-md-6">
<h4><b>Different types of program in our kindergarten</b> <br> <br></h4>
<p>Our program table provides parents and guardians with a detailed schedule of daily activities, including the name of the activity, the time and duration of the activity, and the teacher or staff member responsible for the activity. We also include any special events or holidays that may affect the regular schedule.
<br><br>We believe that parental involvement is key to the success of our program, and we encourage parents to stay informed and involved in their children's education and development. Our program table is just one of the many tools we use to keep parents informed and engaged in their children's learning journey.</p>
</div>

   <div class="col-md-6">
   <select name="pname">
    <option value="CURRICULAR ACTIVITIES"> CURRICULAR ACTIVITIES </option>
    <option value="SPORTS ACTIVITIES"> SPORTS ACTIVITIES </option>
    <option value="EXCURSIONS"> EXCURSIONS </option>
    </select><br> <br>

   
   <input type="text" name="description" required placeholder="Description" class="form-control"> <br>


  <input type="date" name="startdate" required placeholder="Please Enter Program Start Date" class="form-control" > <br>

  <input type="date" name="enddate" required placeholder="Please Enter Program End Date" class="form-control" > <br>


  <input type="int" name="capacity" required placeholder="Capacity" class="form-control" >  <br> 

  <input type="int" name="kidsid" required placeholder="Kidsid" class="form-control" > <br> 

  <input type="int" name="teid" required placeholder="Teid" class="form-control" >  <br> 


  <input type="submit" value="AddProgram" name="AddProgram"  <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 </span> <br> <br> <br> <br> <br> <br>  </div>



</div>



</form>


<?php
//Getting values from end user
if(isset($_POST['AddProgram'])){
   $pname=$_POST['pname'];
   $description=$_POST['description'];
   $startdate=$_POST['startdate'];
   $enddate=$_POST['enddate'];
   $capacity=$_POST['capacity'];
   $kidsid=$_POST['kidsid'];
   $teid=$_POST['teid'];
   include 'db.php';
   $sql="insert into program(pname,description,startdate,enddate,capacity,kidsid,teid)
   values('$pname','$description', '$startdate', '$enddate', '$capacity' , '$kidsid', '$teid')";
   if($conn->query($sql)===TRUE){
               
     echo"Your datas are added successfully";

 }
 else{

     echo"Error:" .$conn->error;

 }
}

?>
       
               



<?php include "footer1.php" ?>






