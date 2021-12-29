<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
            <form action = "manage.php" method = "POST">
              <div class="card">
                <img src="img/cbiryani.jpg" class="card-img-top">
                 <div class="card-body text-center">
                 <h5 class="card-title">CHICKEN BIRYANI</h5>
                 <p class="card-text">Price: 150</p>
                 <button type = "submit" name = "Add_To_Cart" class="btn btn-info">Add To Cart</button>
                 <input type = "hidden" name = "Item_Name" value = "CHICKEN BIRYANI">
                 <input type = "hidden" name = "Price" value = "150">
            </div>
         </div>
   </form>
</div>

<div class="col-lg-3">
            <form action = "manage.php" method = "POST">
              <div class="card">
                <img src="img/mbiryani.jpg" class="card-img-top">
                 <div class="card-body text-center">
                 <h5 class="card-title">MUTTON BIRYANI</h5>
                 <p class="card-text">Price: 200</p>
                 <button type = "submit" name = "Add_To_Cart" class="btn btn-info">Add To Cart</button>
                 <input type = "hidden" name = "Item_Name" value = "MUTTON BIRYANI">
                 <input type = "hidden" name = "Price" value = "200">
            </div>
         </div>
       </form>
    </div>

    <div class="col-lg-3">
            <form action = "manage.php" method = "POST">
              <div class="card">
                <img src="img/matka.jfif" class="card-img-top">
                 <div class="card-body text-center">
                 <h5 class="card-title">SPECIAL MATKA BIRYANI</h5>
                 <p class="card-text">Price: 250</p>
                 <button type = "submit" name = "Add_To_Cart" class="btn btn-info">Add To Cart</button>
                 <input type = "hidden" name = "Item_Name" value = "SPECIAL MATKA BIRYANI">
                 <input type = "hidden" name = "Price" value = "250">
            </div>
         </div>
</form>
    </div>
    </div>
    </div>
</body>
</html>