<?php
    require 'connect.php';

    $sql = "SELECT * FROM animalinformation";

    $stat = $connect->query($sql);
    $row = $stat->fetchall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
 
<form action="index.php" method="post">
        <label>name: </label>
        <input name="name"><br>
        <label>age: </label>
        <input name="age" ><br>

        <label>animal describtion: </label>
        <input name="animalde" ><br>

        <label>size: </label>
        <input name="size"><br>
        <label>color: </label>
        <input name="color" ><br>
        


        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Categories</label>
            <select class="form-select" name = "category">
                <option selected disabled>1</option>
                <?php for($i=0 ; $i<count($row) ; $i++){ ?>
                <option value="<?php echo $row[$i]["id"] ?>"><?php echo $row[$i]["name"] ?></option>

                <?php }?>


            </select>

        </div>
        <button> add animal</button>
      </form>
      
<?php
$animalname = $_POST['name'];
$animalage = $_POST['age'];
$animaldescribtion = $_POST['animalde'];
$animalsize = $_POST['size'];
$animalcolor = $_POST['color'];

 echo '<br>'."Hi".$animalname .'<br>';

$query = $connect->prepare("INSERT INTO animalinformation (name,age, animalde ,size,color)
VALUES(:name,:age,:describtion,:size,:color)") ;

$query -> execute(['name'=>$animalname, 'age'=>$animalage ,'describtion'=>$animaldescribtion ,'size'=> $animalsize ,'color'=>$animalcolor ])

?>



</body>
</html>   