<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Products</title>
</head>



<body >
<nav  class="navbar navbar-light navbar-expand-lg" style="background-color:#eee;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

<div class="collapse navbar-collapse" id="navbarTogglerDemo02" > 
    <ul class="navbar-nav mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="Product.php" style = "font-size:30px;margin-left : 30px;"> Simply Nature <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="Product.php" style = "font-size:25px;margin-left : 900px;">Add Products <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="view.php"  style = "font-size:25px; margin-left : 50px">Home</a>
    </li>
    </ul>
  </div>
</nav>
<div class="p-2 my-2" style ="text-align:center;">
        <h1> Show Products </h1>
</div>
<?php 

if (!empty ( $_SESSION ['Item'])) {
  $_SESSION ['Item'] ;
  $_SESSION ['Price'];
  $_SESSION ['image'];
  $arr1 = explode("<br>",$_SESSION ['Item']) ;
  $arr2 = explode("<br>",$_SESSION ['Price']) ;
  $arr3 = explode("<br>",$_SESSION ['image']) ;

  for ($i=0 ; $i<count($arr1)-1 ; $i++){
      echo "<div class='col-md-3 mt-2'>
      <div class='card '>
      <div class='card-body'>
      <img class='card-img-top' src='uploads/".$arr3[$i]."' height='250px'>
      </div>
      <div class='card-body'>
        <h2 class='mb-2'>"."Name: ". $arr1[$i]."</h2>
        <p class='card-text'>Price :". $arr2[$i]."$"."</p>
        </div>
      </div>
      </div>
    ";
 } 
}else {
 echo '<h1>There is no products.</h1>'  ;
}
?>

</body>

</html>

