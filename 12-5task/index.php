
  <?php
session_start();
//session_unset();//delete all var 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
   button{
    background-color:#EC5F88  ;
color:white;
width: 100px;
height: 40px;
margin: 10px;


    }

    fieldset{
padding: 15px;

    }
    body{
      padding: 0px 0px 200px 0px;
    }

    


th img{
width: 40%;

} 
h2,h3{

  font-size: 15px !important;
padding: auto;
}

th {
  color:black;
  font-size: 15px !important;
}


</style>
    </style>
  </head>
  <body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style=" background-color: #EC5F88 !important;">
        <a href="" class="navbar-brand" style="font-family:'Hurricane', cursive; font-weight: bold; font-size:larger;">codestor</a>
       <a href="#shifa" data-toggle="collapse" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
        </a>
        <div id="shifa" class="collapse navbar-collapse">
        <ul class="nav navbar-nav justify-content-end" style="margin-left:70%;" >
          <li class="nav-item"><a href=" http://localhost/php-project-mini-ecommerce/project/" class="nav-link">add product</a></li>
          <li class="nav-item"><a href="http://localhost/php-project-mini-ecommerce/project/card.php" class="nav-link">view</a></li>
            
                 
        </ul>
       </div>
      </nav>
    </div>

    <form action="index.php" method="post" enctype="multipart/form-data" >
      
 <fieldset>
  <legend>product information</legend>
  <label for="proname"> product name :  </label> <input type="text" name="proname"> 
  <br><br>
  <label for="prodes"> product describtion : </label> <input type="text" name="prodes"><br><br>

  <label for="prodsize"> product size: </label> <input type="text" name="prodsize"><br><br>
  <label for="productprice"> product price: </label> <input type="text" name="productprice"><br><br>

  <label for="pic"> product image: </label> <input type="text" name="productimage"><br><br>
  <button type ="file" >submit</button>
 
<br>

</fieldset>
</form>

<form action="../project/index.php" method="post">
<button type ="submit" >all oroduct </button>
</form>

<form action="card.php " method="post">
<button type ="submit" >veiw</button>
</form>

<?php
$pro = array();
if(!empty($_POST['proname'])){
    
    if(!empty($_POST['prodes'])){
        if(!empty($_POST['prodsize'])){
            if(!empty($_POST['productprice'])){
                if(!isset( $_SESSION['productimage'])){
              move_uploaded_file($_FILES['productimage']['tamp_name'],'image/'.$_FILES ['productimage']['name'])      
                }
//$img_url = "https://m.media-amazon.com/images/I/4154HhMt46S.jpg  ";
    if(!isset( $_SESSION['pro'])){
    $_SESSION['pro'] = array() ;
    }
    array_push( $pro , $_POST['proname']);
    array_push( $pro , $_POST['prodes']);
    //array_push( $pro ,$img_url );
    array_push( $pro , $_FILES['productimage']['name']);
    array_push( $pro , $_POST['prodsize']);
    array_push( $pro , $_POST['productprice']);

    array_push($_SESSION['pro'] , $pro );


} }}}


?>



<table class="table">
<thead>
  <tr>
    <th scope="col">Product Image</th>
    <th scope="col">Product Name </th>
    <th scope="col">Product Describtion </th>
    <th scope="col">Product Size</th>
    <th scope="col">Product Price </th>
  </tr>
  </thead>
<?php


for ($i=0; $i < count($_SESSION['pro']); $i++) { 
   $p =$_SESSION['pro'][$i]; 
   echo ' 
<div class="">


<tr>
<th scope="row"><img src= "image/'. $p[2] .'"class="grid-item" ></th>
<td "class="grid-item"><h2>'.$p[0].'<h2></td>
<td "class="grid-item"><h3 >'.$p[1].'<h3></td>
<td "class="grid-item"><h3 >'.$p[3].'<h3></td>
<td "class="grid-item"><h3 >'.$p[4].'<h3></td>


</div>    
 </tr>
</tbody>
'; 
}?>
</table>
<br>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    


  </body>

  <footer class="text-center text-white fixed-bottom" style="background-color: #EC5F88;">
  <!-- Grid container -->
  <div class="container p-4">
    
</div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #EC5F88;">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>