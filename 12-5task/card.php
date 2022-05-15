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

img{
width: 30%;
padding:30px;

}


.card {
  box-shadow: 5px 4px 8px 5px pink;
  transition: 0.3s;
  width: 95%;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 10px 16px 20px 16px;

}

h2,h3{

  font-size: 15px !important;
padding: auto;
}

body{
      padding: 0px 0px 200px 0px;
    }
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
          <li class="nav-item"><a href="http://localhost/php-project-mini-ecommerce/project/card.php" class="nav-link">veiw</a></li>
             
                 
        </ul>
       </div>
      </nav>
    </div>

      


  <?php
session_start();
for ($i=0; $i < count($_SESSION['pro']); $i++) { 
   $p =$_SESSION['pro'][$i]; 


   echo ' 
<div class="">.
<div class="container">
 <div class="card">
    <div class="card-body">
    <div><img src= " '. $p[2] .'"class="grid-item" > </div>
      <h4 class="card-title">'.$p[0].'</h4>
      <p class="card-text"><div  "class="grid-item"><h3 >'.$p[1].'<h3></div>
      <div  "class="grid-item"><h3 >'.$p[3].'<h3></div>
      <div  "class="grid-item"><h3 >'.$p[4].'<h3></div>
      </p>
      
     
    </div>
  </div>
</div>
</div>'; 
}?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body>

<footer class="text-center text-white fixed-bottom" style="background-color: #EC5F88;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #EC5F88;">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>
