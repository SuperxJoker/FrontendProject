<?php 

$conn = new mysqli('localhost','root','','productdb');


if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['price']) ){
        $name = $_POST['name'];
        $price = $_POST['price'];
        

        $query = "INSERT INTO producttb(product_name,product_price,product_image) VALUES('$name','$price','images/1.jpg')";

        $run = mysqli_query($conn,$query);

        if($run){
            echo "<script> alert('Submitted')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }
        else{
            echo "<script> alert('Not submitted')</script>";
            echo "<script>window.location.replace('forum.php')</script>";
        }

      
    }
    else{
        echo "<script> alert('All fields required')</script>";
        echo "<script>window.location.replace('forum.php')</script>";
    }


}





?>
