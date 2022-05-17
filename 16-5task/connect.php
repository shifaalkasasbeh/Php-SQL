
<?php 
$server_name ='localhost';
$user_name='root';
$password='';
$db= 'animal';


try{
    $dsn = "mysql:host=$server_name;dbname=$db";
    $connect = new PDO($dsn , $user_name , $password);
}
catch(PDOException $e){
    die("connected fialed".$e->getMessage());
}

?>

