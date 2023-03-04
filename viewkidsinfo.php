<?php
$title = "Read data from db";
include "headerr.php";
?>
<?php
include 'db.php';
$sql = "select * from kidsinfo ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>Kids ID</th><th>Kids Name</th><th>Parents Name</th><th>D.O.B</th><th>Contact No</th><th>Email</th><th>Address</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td>$row[kidsid]</td>
    <td>$row[kidsname]</td>
    <td>$row[parentsname]</td>
    <td>$row[dob]</td>
    <td>$row[phone]</td>
    <td>$row[email]</td>
    <td>$row[address]</td>
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
<?php
include "footer1.php";
?>