<?php 

$conn = new mysqli('localhost','root','','productdb');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $cart_query = mysqli_query($conn, "SELECT * FROM `carttb`");

    $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['product_name'] ;
         $product_price = number_format($product_item['product_price'] );
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `ordertb` (order_name, order_surname, total_products, total_price) VALUES('$name','$surname','$total_product','$price_total')") or die('query failed');
   $delquery = "DELETE FROM carttb";
   $resultdel = mysqli_query($conn,$delquery);

   if($cart_query && $detail_query && $resultdel){
         echo "<script> alert('Submitted')</script>";
            echo "<script>window.location.replace('cart.php')</script>";
        
   }
   else{
           echo "<script> alert('not submitted')</script>";
            echo "<script>window.location.replace('cart.php')</script>";
   }




}


?>
