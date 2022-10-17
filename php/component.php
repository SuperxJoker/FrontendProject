<?php

function component($productname, $productprice, $productimg,$productid){
    $element = "
    <div class=\"pro\">
    <form action = \"index.php\" method=\"post\">
      <div>

        <a href=\"productpage.php\">
          <img src=\"$productimg\" alt=\"\">
            </a>

      <div class = \"des\">
        
          <a href=\"productpage.php\" style=\"text-decoration:none;color:black\">
         <h3>$productname</h3>
         <h4>$ $productprice</h4>
         </a>

         
         <div>
         <button class=\"btn-1 add-to-cart\" name=\"add\" >BUY NOW</button>
        </div>
      </div>
       <button class=\"btn add-to-cart\" name=\"add\" ><i class=\"fa fa-plus\" style=\"font-size:24px;color:green\"></i></button>
       <input type='hidden' name='product_id' value='$productid'>
      <button class=\"btn add-to-heart\"><i class=\"fa fa-heart\" style=\"font-size:24px;color: red;\"></i></button>
    
      </div>
      
        
      

    </form>
    </div>
    
    ";
    echo $element;
}



function cartElement($productimg,$productname,$productprice,$productid){
  $element="
  
  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                        <div class=\"border rounded\">
                            <div class=\"row bg-white\">
                                <div class=\"col-md-3 pl-0\">
                                    <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6\">
                                    <h5 class=\"pt-2\">$productname</h5>
                                    <small class=\"text-secondary\">Seller : Alexia</small>
                                    <h5 class=\"pt-2\">$ $productprice</h5>
                                    <button type=\"submit\" class=\"btn btn-warning\">Save for later</button>
                                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                                <div class=\"col-md-3 py-5\">
                                    <div>
                                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-minus\"></i></button>
                                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-plus\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
  ";


  echo $element;
}


function component2($productname, $productprice, $productimg,$productid){

  $element="
  <div class=\"swiper-slide pro2\">
    <form action = \"index.php\" method=\"post\">
        <div>
           <a href=\"productpage.html\">
            <img src=\"$productimg\" alt=\"\">
              </a>

        <div class = \"des\">
          
            <a href=\"productpage.html\" style=\"text-decoration:none;color:black\">
           <h3>$productname</h3>
           <h4>$ $productprice</h4>
           </a>

           <div>
           <button class=\"btn-1 add-to-cart\" name=\"add\" >BUY NOW</button>
          </div>
        </div>
        <button class=\"btn add-to-cart\" name=\"add\" ><i class=\"fa fa-plus\" style=\"font-size:24px;color:green\"></i></button>
        <input type='hidden' name='product_id' value='$productid'>
        <button class=\"btn add-to-heart\"><i class=\"fa fa-heart\" style=\"font-size:24px;color: red;\"></i></button>
        </div>
        
          
        

        </form>
      </div>
  
  
  ";

  echo $element;

}

function component3($productname, $productprice, $productimg,$productid){
  $element = "
  <div class=\"pro\">
  <form action = \"productpage.php\" method=\"post\">
    <div>

      <a href=\"productpage.php\">
        <img src=\"$productimg\" alt=\"\">
          </a>

    <div class = \"des\">
      
        <a href=\"productpage.php\" style=\"text-decoration:none;color:black\">
       <h3>$productname</h3>
       <h4>$ $productprice</h4>
       </a>

       
       <div>
       <button class=\"btn-1 add-to-cart\" name=\"add\" >BUY NOW</button>
      </div>
    </div>
     <button class=\"btn add-to-cart\" name=\"add\" ><i class=\"fa fa-plus\" style=\"font-size:24px;color:green\"></i></button>
     <input type='hidden' name='product_id' value='$productid'>
    <button class=\"btn add-to-heart\"><i class=\"fa fa-heart\" style=\"font-size:24px;color: red;\"></i></button>
  
    </div>
    
      
    

  </form>
  </div>
  
  ";
  echo $element;
}




?>