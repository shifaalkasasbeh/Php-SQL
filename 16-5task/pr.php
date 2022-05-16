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
$cheackconnection=mysqli_connect('localhost','root','','animal');
if ($cheackconnection==false){
    die ("EROR: could not connect.".mysqli_connect_error());

}
echo"connection sucses".mysqli_get_host_info($cheackconnection)
?>

</body>
</html>