<?php 
include "connect.php ";

$animalname = $_POST['name'];
$animalage = $_POST['age'];
$animaldescribtion = $_POST['animalde'];
$animalsize = $_POST['size'];
$animalcolor = $_POST['color'];

 echo '<br>'."Hi".$animalname .'<br>';

$query = "INSERT INTO animal (name,age, animalde ,size,color)
 VALUSE('$animalname','$animalage','$animaldescribtion','$animalsize','$animalcolor')";
if (mysqli_query ($cheackconnection,$query))
{
    echo "new record in animal";
}
else
{
  echo "error:".mysqli_error($cheackconnection);
}
?>