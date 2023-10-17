<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My CART</h1>
            </div>

            <div class="col-lg-8">


            <table class="table">
               <thead>
                   <tr>
                   <th scope="col">Sr.No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                   <th scope="col"></th>
                </tr>
              </thead>
             <tbody class ="text-center">
              <?php 
                   $total=0;
                  if(isset($_SESSION['cart'])) 
                  {

                  
                   foreach($_SESSION['cart'] as $key =>$value)
                   {
                       $total=$total+$value['Price'];
                       echo"
                       <tr>
                       <td>1</td>
                       <td>$value[Item_Name]</td>
                        <td>$value[Price]</td>
                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
                        <td>
                        <form action='manage_cart.php'>
                        <button class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                       </form>
                        </tr>
                 
                           ";
                    }
                }
              
              ?>
              
    
  </tbody>
</table>

            </div>




            <div>
            <div class="col-lg-4">
                <h4>Total:</h4>
                <h5><?php echo $total?></h5>
                <br>
                <form>
  
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cash On Delivery
  </label>
  <br>
</div>
                    <button class="btn btn-primary btn-block">Make Purchase</button>
               </form>
            </div>
            </div>
</div>
</div>
</body>
</html>
