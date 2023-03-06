<?php
$title = "Read data from db";
include "headerr.php";
?>
<?php
include 'db.php';
$sql = "select * from teacherscareer ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>Reference No</th><th>First Name</th><th>Last Name</th><th>Addres</th><th>Postal Code</th><th>Email</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td>$row[refno]</td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[address]</td>
    <td>$row[postalcode]</td>
    <td>$row[contactno]</td>
    <td>$row[emailid]</td>
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
<a class="btn btn-danger" href="index.php" role="button">Back</a>
</div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> 


<?php
include "footer1.php";
?>