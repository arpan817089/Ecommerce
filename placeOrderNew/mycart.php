<?php 
include("header.php"); 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-To-Cart</title>
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table">
  <thead class = "text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class = "text-center">
      <?php
      $count = 0;
      //Key is $count. Value is array
      if (isset($_SESSION['cart']))
      {
        foreach ($_SESSION['cart'] as $key => $value) 
        {
            $count++;
            echo"
            <tr>
            <td>$count</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]<input type = 'hidden' class = 'tprice' value = '$value[Price]'></td>
            <td><input class = 'text-center iquantity' onchange = 'subTotal()' type = 'number' value ='$value[Quantity]' min = '1' max = '5'></td>
            <td class = 'stotal'></td>
            <td>
            <form action = 'manage.php' method = 'POST'>
            <button name = 'remove' class = 'btn btn-sm btn-outline-danger'>REMOVE</button></td>
            <input type = 'hidden' name = 'Item_Name' value = '$value[Item_Name]'>
            </form>
            </td>
            </tr>
            ";
        }
      }
    ?>
  </tbody>
</table>
      </div>
            <div class="col-lg-3 text-center" name = "gtotal">
               <div class = "border bg-light rounded p-4"> 
                   <h3>Grand Total</h3>
                   <h5 class = "text-right" id = 'gtotal'></h5>
                   
                   <br>
                   <form action = "https://p.paytm.me/xCTH/81b4b849">
                       <br>
                       <input type = "hidden" name = "gtotal">
                       <button class = "btn btn-primary btn-block" name = "pay">MAKE PAYMENT</button>
                   </form>
               </div> 
            </div>
        </div>
    </div>
    
    <script>
      var gt = 0;
      var tprice = document.getElementsByClassName('tprice');
      var iquantity = document.getElementsByClassName('iquantity');
      var stotal = document.getElementsByClassName('stotal');
      var gtotal = document.getElementById('gtotal');
      function subTotal() 
      {
        gt = 0;
        for (i = 0; i < tprice.length; i++) {
          stotal[i].innerText = (tprice[i].value) * (iquantity[i].value);
          gt += (tprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt;
        <?php $abc = "<script>document.write(gt)</script>"?>
      }
      subTotal();
      </script>
</body>
</html> 