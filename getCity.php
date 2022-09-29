<?php
include 'config/config.php';
$stateId=$_POST['id'];

$data=mysqli_query($con,"select * from cities where state_id='$stateId' ");
echo "<select>";
while($row=mysqli_fetch_array($data))
{
    echo "<option value=".$row['id'].">".$row['name']."</option>"; 
}
echo "</select>";

?>