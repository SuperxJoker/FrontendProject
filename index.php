<?php

//start session

session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');


//create instance of Createdb class
$database = new CreateDb("Productdb","Producttb");

if(isset($_POST['add'])){
  //print_r($_POST['product_id']);

  if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'],'product_id');

    if(in_array($_POST['product_id'],$item_array_id)){
      echo "<script> alert('Product is already added in the cart')</script>";
      echo "<script>window.location = 'index.php'</script>";

    }else{

      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id' => $_POST['product_id']
      );

      $_SESSION['cart'][$count] = $item_array;
      

    }
    //print_r($_SESSION['cart']);

  }else{
    $item_array = array(
      'product_id' => $_POST['product_id']
    );

    //Create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);


  }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    
    
</head>
<body>
    
  <!--Navigation bar-->
    <nav class="nav">
    
        
       <div class="wrapper">
        <a class="navbar-brand" href="index.php">
            <div class="logo-image">
                <img src="images/nobgLogo.png" class="img-fluid" alt="img" style="max-width: 10rem; max-height: 5em">
        
            </div>
        </a>

        
        <ul class="nav-list">
         

            <div class="nav-links">
            
            <li class="hover-services"><a href="#" class="desktop-item">SERVICES</a>
              <input type="checkbox" id="showMega">
              <label for="showMega" class="mobile-item">SERVICES</label>
              

                    <div class="dropdown-content">
                        <div class="content">

                            <div class="row">
                                <header> &nbsp PRODUCT CATEGORIES</header>
                                 <ul class="mega-links">
                            
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Accesories

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Alchool

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Art

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Books

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Drink

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Electronics

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Flower & Plants

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Food

                                </a>

                            </li>

                        </ul></div>

                        <div class="row">
                            <header><br></header>
                           <ul class="mega-links">

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Gadgets

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Garden

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Grocery

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Home

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Jewelry

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Kids & Baby

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Men's Fashion

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Mobile

                                </a>

                            </li>

                        </ul></div>

                        <div class="row">
                            <header><br></header>
                        <ul class="mega-links">

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Motorcycles

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Movies

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Music

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Office

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Pets

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Romantic

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Sport

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Toys

                                </a>

                            </li>

                        </ul></div>

                        <div class="row">
                            <header> &nbsp SALE</header>
                        <ul class="mega-links">

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Accessories

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Alchool

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Art

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Books

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Drink

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Electronics

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Flower & Plants

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Food

                                </a>

                            </li>

                        </ul></div>
                        
                        <div class="row">
                            <img src="images/imgnav.jpg" alt="">
                        </div>

                    </div>
                    </div>

                   
                 
          </li>
      
        </li>
        <li><a href="#">COMPANY</a></li>
        <li><a href="#">LIBRARY</a></li>
        <li><a href="#">CONTACT US</a></li>
      
        <li class="select-menu">
        <div class="custom-select">
          <select class="currency">
                <option value="us">US</option>
                <option value="eur">EUR</option>
                <option value="ron">RON</option>
        </select>

        </div>

        </li>
        <li class="select-menu">
        <div class="custom-select">
          <select class="currency">
                <option value="EN">EN</option>
                <option value="RO">RO</option>
                <option value="FR">FR</option>
        </select>

        </div>

        </li>
    </div>
 

    <div class="icon-menu">
      <li><a href=""><i class="fa fa-search" style="font-size:20px"></i></a></li>
      <li><i id="show-login" class="fa fa-user" style="font-size:20px"></i></li>


      
      <li>
        <div >
        <a href=""><i class="fa fa-heart" style="font-size:20px"></i></a>
        </div>
      </li>
    
      <li>
        <div >
        <a href="cart.php" class="nav-item nav-link active" style="text-decoration:none"><i class="fa fa-shopping-bag" style="font-size:20px"></i>
        <!--<span id="cart_count" class="text-warning bg-light" style="color:yellowgreen;text-align: center;border-radius: 3rem;font-size:19px;font-weight:600;">0</span>-->    
        <?php 
        
        if(isset($_SESSION['cart'])){
          $count = count($_SESSION['cart']);
          echo "<span id=\"cart_count\" class=\"text-warning bg-light\" style=\"color:yellowgreen;text-align: center;border-radius: 3rem;font-size:19px;font-weight:600;\">$count</span>";
        }
        else{
          echo "<span id=\"cart_count\" class=\"text-warning bg-light\" style=\"color:yellowgreen;text-align: center;border-radius: 3rem;font-size:19px;font-weight:600;\">0</span>";
        }

        ?>
        
        </a>
       <!-- <span class='badge badge-warning' id='lblCartCount'> 5 </span> -->
        </div>
      
      </li>
    </div>
      
    </div>
    </nav>

    


    <!--Popup login form-->

    <div class="popup">
      <div class="close-btn">&times;</div>
      <div class="form" id="form" >
        <h2>Sign in</h2>
        <div class="form-element">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email" >
          <span id="emailText"></span>
        </div>
        <div class="form-element">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter password">
          <span id="passwordText"></span>
          <i class="fa fa-eye" id="font" onclick="togglePW()" aria-hidden="true"></i>
         

        </div>
        <div class="form-element">
          <button onclick="validateEmail()">LOGIN</button>
        </div>
        <div class="form-element">
          <a id="show-singup" href="#">I don't have an account</a>
        </div>
        <div class="form-element">
          <a href="#">Forgot password?</a>
        </div>
      </div>
    </div>


   


    <!--Cookie policy-->
    <div id="cookiePopup" class="wrapper2 hide">
      <div class="content">
        <header>This website uses cookies</header>
        <p>Osf academy uses it's own third party cookies for statistical purposes, to know you preferences, for website performace <br>
           and interaction with social media offering publicity tailored to your interests. If you continue browsing, we consider that you accept its use. <br>
           You can expand this information consulting our <a href="#"> Cookies Policy Page</a></p>
           <div class="buttons">
            <button id="acceptCookie" class="item">ACCEPT</button>
           </div>
      </div>
    </div>

    
   

    <!--Image slider start-->

    <div class="slider">
      
      <div class="slides">
        
        <!--Radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
       <!--Radio buttons end-->

       <!--Slide images start-->
       <div class="slide first">
        <img src="images/carusel1.jpg" alt="" id="active">
        <button class="view"  ><a id="link" href="#product1" style="font-size:32px;color:white;text-decoration:none;" >View More</a></button>

       </div>

       <div class="slide">
        <img src="images/carusel1.jpg" alt="">
       </div>

       <div class="slide">
        <img src="images/carusel1.jpg" alt="">
       </div>

       <div class="slide">
        <img src="images/carusel1.jpg" alt="">
       </div>
       


      

       <!--Slide images end-->

       <!--Automatic slide start-->
       <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>


       </div>
       <!--Autoamtic slide end-->
     


      </div>
      
      

      <!--Manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>        
      </div>
      <!--Manual navigation end-->

    

    </div>
   <!--Image slider end-->

   <!--Script for image slider-->
    <script  type="text/javascript">

      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
          counter= 1;
        }
      },5000);
    </script>

    <!--Popular items section-->
    <section id="product1" class="section-p1">
  <h2>Popular items</h2>
  <hr>
  <div class="pro-container" >
    <?php
      $result = $database->getData();
      while($row = mysqli_fetch_assoc($result)){
        component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
      }
   
    ?>
    
   
    

  </div>

  
  <!--

  <button onclick="loadData()" class="load-btn">Load More</button>-->

 



 
  
    </section>


    <!--Banner OSF container-->
    <div class="banner-container">
 
    <img src="images/banner.jpg" alt="">
  
    </div>

    <!--Featured products slider-->
    <section id="product2" class="swiper mySwiper section-p2">
    <h2>Featued Products</h2>

    
    <hr>
    <div class="swiper-wrapper pro-container2">
    <?php
      $result = $database->getData();
      while($row = mysqli_fetch_assoc($result)){
        component2($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
      }
   
    ?>
     
     
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween:150,
    slidesPerGroup: 4,
    
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      spaceBetween:150,
    },
    navigation: {
      
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
    </script>


    <!--Benefit content-->
    <section class="benefit-content">
  <div class="icon1 box"><i class="fa fa-archive" style="font-size:100px;color:yellowgreen"></i></div>
  <div class="left box">
    <h3>FOCUS</h3>
    <div class="content">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi, animi, earum vitae veritatis fugit temporibus mollitia fuga nam voluptas modi nesciunt fugiat nemo dolores cupiditate tempore similique expedita unde?</p>

    </div>

  </div>

  <div class="icon2 box"><i class="fa fa-recycle" style="font-size:100px;color:yellowgreen"></i></div>

 <div class="center box">
  <h3>METHOD</h3>
  <div class="content">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur molestiae, ea accusamus fugiat sapiente soluta tenetur nam veritatis, nobis recusandae eveniet aut exercitationem facere sit necessitatibus optio debitis quod beatae?</p>

  </div>
 </div>

 <div class="icon3 box">
  <div class="content"><i class="fa fa-clipboard" style="font-size:100px;color:yellowgreen">
  </i></div></div>

 <div class="right box">
  <h3>KNOWLEDGE</h3>
  <div class="conte">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit maxime sunt fugiat impedit in asperiores rem odit magni, perferendis minus delectus tempore voluptas quam ex hic ratione nobis, ipsum consectetur?</p>

  </div>
 </div>

    </section>

    <!--Footer-->
    <footer>
      <div class ="main-content">
        <div class="left box">
          <p>&copy Copyright <script>document.write(new Date().getFullYear())</script> <br> All Rights reserved.</p>
          <br>
          <h3>CONTACT</h3>
          <br>
          <div class="content">

            <p>Headquarters:<br> 5600, Blvd. des Galeries, Bur 530 <br> Quèbec, Quèbec G2K 2H6 <br><br> <a href="mailto:contact@osf-global.com">contact@osf-global.com</a> <br><br> <a href="tel:+1 (888) 548-4344">+1 (888) 548-4344</a></p>
          </div>

        </div> 

        <div class="center box">
          <h3>CATEGORIES</h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">Alchool</a><br><br>
            <a class href="error.html">Art</a><br><br>
            <a class href="error.html">Books</a><br><br>
            <a class href="error.html">Drinks</a><br><br>
            <a class href="error.html">Electronics</a><br><br>
            

          </div>

        </div>

        <div class="center2 box">
          <h3><br></h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">Home</a><br><br>
            <a class href="error.html">Jewelry</a><br><br>
            <a class href="error.html">Kids & Baby</a><br><br>
            <a class href="error.html">Men's Fashion</a><br><br>
            <a class href="error.html">Mobile</a><br><br>
            <a class href="error.html">Motorcycles</a><br><br>
            <a class href="error.html">Movies</a><br><br>
            <a class href="error.html">Music</a><br><br>
            

          </div>

        </div>

        <div class="center3 box">
          <h3><br></h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">Sport</a><br><br>
            <a class href="error.html">Toys</a><br><br>
            <a class href="error.html">Travel</a><br><br>
            <a class href="error.html">Women's Fashion</a><br><br>
            

          </div>

        </div>

        <div class="center4 box">
          <h3>ABOUT</h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">About us</a><br><br>
            <a class href="error.html">Delivery</a><br><br>
            <a class href="error.html">Testimonials</a><br><br>
            <a class href="error.html">Contact</a><br><br>

          </div>

        </div>

        




        <div class="right box">
          <div class="content">
            <a href="https://www.facebook.com/"><span class="fa fa-facebook " style="font-size:32px;color:grey" >&nbsp</span></a>
            <a href="https://plus.google.com/"><span class="fa fa-google-plus" style="font-size:36px;color:grey">&nbsp</span></a>
            <a href="https://twitter.com/"><span class="fa fa-twitter" style="font-size:36px;color:grey">&nbsp</span></a>
            <a href="https://pinterest.com/"><span class="fa fa-pinterest" style="font-size:36px;color:grey">&nbsp</span></a>
          </div>

        </div>
      </div>
      


    </footer>

    <!--Scripts-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="scripts/cookie.js"></script>
    <script src="scripts/popup.js"></script>
    <script src="scripts/error.js"></script>
    <script src="scripts/cart.js"></script>
    <script src="scripts/load.js"></script>
    

    

  
</body>
</html>

