<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
include "connect.php ";

$animalname = $_POST['name'];
$animalage = $_POST['age'];
$animaldescribtion = $_POST['animalde'];
$animalsize = $_POST['size'];
$animalcolor = $_POST['color'];

 echo '<br>'."Hi".$animalname .'<br>';

$query = "INSERT INTO animalinformation (name,age, animalde ,size,color)
 VALUES('$animalname','$animalage','$animaldescribtion','$animalsize','$animalcolor')";
if (mysqli_query ($connect,$query))


$select=mysqli_query( $connect,"SELECT * FROM animalinformation");
?>

<table >
    <tr>
        <th>Name </th>
        <th>age</th>
        <th>animal description</th>
        <th>size</th>
        <th>color</th>
    </tr>
    <?php while($row= mysqli_fetch_assoc ($select)): ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['animalde']; ?></td>
    <td><?php echo $row['size']; ?></td>
    <td><?php echo $row['color']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>






</body>
</html>