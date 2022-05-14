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
    <title>Home</title>
</head>

<body >
<nav  class="navbar navbar-light navbar-expand-lg" style="background-color:#eee;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

<div class="collapse navbar-collapse" id="navbarTogglerDemo02" > 
    <ul class="navbar-nav mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="view.php" style = "font-size:30px;margin-left : 30px;"> Simply Nature <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="Product.php" style = "font-size:25px;margin-left : 900px;"> Add Products <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="view.php"  style = "font-size:25px; margin-left : 50px">Home</a>
    </li>
    </ul>
  </div>
</nav>

<div class="container">
  	<div class="p-2 my-2  rounded-3" style ="text-align:center;">
        <h1> Add Product form </h1>
        
    </div>
<div class="container"  style="background-color:#eee; padding : 25px;" >

  <br><br>
  <form  action="Product.php" method="post"  enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="Item">Product Name :</label>
        <input type="text" class="form-control" id="Item" placeholder="Enter Product Name" name="Item" required>
    </div><br>
    <div class="form-group">
      <label  for="Price">Price :</label>
        <input type="number" class="form-control" id="Price" placeholder="Enter Price" name="Price" required>
    </div><br>
    <div class="form-group">
      <label for="Image">Image :</label>
        <input type="file"  id="Image"  name="product_image" required>
     
    </div><br>
    <div class="form-group">        
      <input type="submit" class="btn"  name="button" value="Add Product" style="background-color: black;  color: white;">
  
    </div>
  </form>
</div>
<div class="container"  style="margin:25px 0px; ">
<div class="p-2 my2" style ="text-align:center;">
         
         <h1> All Products </h1>
         
     </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  <?php 

if(isset($_POST['button'])) {
    move_uploaded_file($_FILES["product_image"]["tmp_name"],"uploads/" . $_FILES["product_image"]["name"]);
    $_SESSION ['Item'] .= $_POST['Item']."<br>";
    $_SESSION ['Price'] .= $_POST['Price']."<br>";
    $_SESSION ['image'] .= $_FILES["product_image"]['name']."<br>";



    if(!empty($_POST['Item']) && !empty($_POST['Price']) ){
      $arr1 = explode("<br>",$_SESSION ['Item']) ;
      $arr2 = explode("<br>",$_SESSION ['Price']) ;
      $arr3 = explode("<br>" , $_SESSION["image"]);


      for($i = 0 ; $i<count($arr1)-1 ; $i++){
            echo "
      <tr>
      <td>" . $arr1 [$i] ."</td>
      <td> ".$arr2[$i] ."</td>
      <td><img id='tablePic' src='uploads/".$arr3[$i]."' alt=''></td>
      </tr>
        ";
      }

    }else{
      echo "<h3> please fill all field</h3>";
    }

    }

?>

</tbody>
 </table> 
</div>
</div>
<footer class="text-center text-black" style="background-color: #eee ;padding:50px">
    <div class="container">
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
    </div>
    <div
         class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"> © 2022 Copyright</div>
   
  </footer>
  
 
  
</body>

</html>

