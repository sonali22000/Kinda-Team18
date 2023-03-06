<?php
$title = "Read data from db";
include "headerr.php";
?>
<?php
include 'db.php';
$sql = "select * from teachersinfo ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>Teacher ID</th><th>Teacher Name</th><th>Phone No</th><th>Email</th><th>Address</th><th>Bio</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td>$row[teid]</td>
    <td>$row[tname]</td>
    <td>$row[phone]</td>
    <td>$row[email]</td>
    <td>$row[address]</td>
    <td>$row[bio]</td>
    </tr>
     ";
    }
    echo"</table>";
}
else{
    echo"No Result";
}
$conn->close();
?>


<div class="col-md-6">
<br>
<a class="btn btn-danger" href="createteacersinfo.php" role="button">Back</a>
</div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> 


<?php
include "footer1.php";
?>