<?php

$title = "Update and delete  teachers data";

include "headerr.php";
include 'db.php';

$a = $_GET['teid'];
$result = mysqli_query($conn, "select * from teachersinfo where teid = '$a'");

$row = mysqli_fetch_array($result)

?>
<h2> Update or Delete teacher data below </h2>

<form  name="update"  method="post"  action=""> 
 <div class="row">
 <div class="col-md-6">
   
  <input type="text" name="tname" required value = "<?php echo $row['tname'];?>" placeholder="Teacher Name:" class="form-control"> <br>
  <input type="int" name="phone" required value = "<?php echo $row['phone'];?>" placeholder="Phone Number:" class="form-control" > <br>
  <input type="text" name="email" required value = "<?php echo $row['email'];?>" placeholder="E-mail Address:" class="form-control" > <br>
  <input type="text" name="address" required value = "<?php echo $row['address'];?>" placeholder="Address:" class="form-control" >  <br> 
  <textarea name="bio" class="form-control"  rows="3" placeholder="Bio:"  required value = "<?php echo $row['bio'];?>"></textarea><br>
  
  <input type ="submit" value ="Update your data" name="update"  <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 </span>  
                 <br> <br> 
  <input type ="submit" value ="Delete your data" name="delete"   <span onmouseover="this.style.color='red';
                 this.style.backgroundColor='black';
                 this.style.fontSize='1em'; ";
      onmouseout="
                 this.style.color='blue';
                 this.style.backgroundColor='white';
                 this.style.fontSize='1.1em';"; > 
                 </span> 
                 <br> <br> 
  <a class="btn btn-danger" href="viewteachersinfo.php" role="button">Back</a>
<br> <br> <br> <br> <br> <br> 
                
 </div>
 </div>
</form>

<?php

    if (isset($_POST['update'])){
        $tname=$_POST['tname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $bio=$_POST['bio'];
        $query = mysqli_query($conn, "UPDATE teachersinfo set 
        tname = '$tname', phone = '$phone', email = '$email', address = '$address', bio = '$bio'
        where teid = '$a'");

            if ($query){

                echo "<h2>Data Updated Successfully </h2>";
            }
            else{
                echo "<h2> Update failed </h2>";
            }
         
            
    }
    



    if (isset($_POST['delete'])){
        
        $query = mysqli_query($conn, "delete from teachersinfo where teid = '$a'");

            if ($query){

                echo "<h2>Data Deleted Successfully </h2>";
            }
            else{
                echo "<h2> Delete failed </h2>";
            }
    }

?>

<?php include "footer1.php" ?>
