<!DOCTYPE html>
<?php include "headerr.php" ?>

            <!-- creating different activities in kindergarten-->               
                <div class="row">
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
                      <p class="card-text" > <h4>EXCURSIONS</h4> Children go out and explore places such as museum, zoo or they go for picnic in a fun way. These excurstions also are packed with many interesting snacks.</p>
                    </div>
                  </div>
                </div>
            </div>
<br>



 <!-- creating form for program in kindergarten-->

<form  method="post"  action=""> 


<div class="row">
   <div class="col-md-3">
   <select name="pname">
    <option value="CURRICULAR ACTIVITIES"> CURRICULAR ACTIVITIES </option>
    <option value="SPORTS ACTIVITIES"> SPORTS ACTIVITIES </option>
    <option value="EXCURSIONS"> EXCURSIONS </option>
    </select><br></div>
   
   <div class="col-md-3">
   <input type="text" name="description" required placeholder="Description" class="form-control"> <br></div>


<div class="row">
  <div class="col-md-3">
  <input type="date" name="startdate" required placeholder="Please Enter Program Start Date" class="form-control" > </div>

  <div class="col-md-3">
  <input type="date" name="enddate" required placeholder="Please Enter Program End Date" class="form-control" > <br> </div>
</div>

<div class="row">
  <div class="col-md-3">
  <input type="int" name="capacity" required placeholder="Capacity" class="form-control" >  <br> </div>
</div>


<div class="row">
  <div class="col-md-3">
  <input type="int" name="kidsid" required placeholder="Kidsid" class="form-control" > <br> </div>
</div>

<div class="row">
  <div class="col-md-3">
  <input type="int" name="teid" required placeholder="Teid" class="form-control" >  <br> </div>
</div>



<div class="row"> 
  <div class="col-md-3">
  <input type="submit" value="Submit" name="Submit"> <br> </div>
</div>
</form>


<?php
//Getting values from end user
if(isset($_POST['Submit'])){
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
        
               
</body> 
</html>

<br>
<?php include "footer1.php" ?>






