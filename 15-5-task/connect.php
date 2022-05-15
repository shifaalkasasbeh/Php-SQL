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
$server_name ='localhost';
$user_name='root';
$password='';
$db= 'animal';
$connect=mysqli_connect($server_name ,$user_name,$password,$db);

if ($connect){
echo "sucsess connection";
}
else 
{
    echo "wrong connection";
}




?>
</body>
</html>