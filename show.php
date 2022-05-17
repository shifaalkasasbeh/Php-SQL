<?php
    require 'connect.php';
    if (isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['category'])){
        $prd_name = $_POST['name'];
        $prd_price = $_POST['price'];
        $prd_category = $_POST['category'];
        
        $sql = "INSERT INTO items (name, price,categories_id) VALUES (:name, :price , :category)";
        $stat = $connect->prepare($sql);


        $stat->execute([':name'=>$prd_name,':price'=>$prd_price , ':category'=>$prd_category]);


    }
    }
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

<?php

    $sqlSelect = "SELECT items.id , items.name , items.price , categories.categories_name
    FROM items 
    LEFT JOIN categories 
    ON items.categories_id = categories.categories_id 
    ";

    $stat = $connect->query($sqlSelect);
  echo "
  <table class='table'>
  <thead>
    <tr>
      <th >#</th>
      <th >Name</th>
      <th >Price</th>
      <th >Category</th>
      <th >Action</th>
    </tr>
  </thead>
  ";
?>
<?php 
  echo "<tbody>";
?>
  

  </tbody>
</table>

</body>
</html>