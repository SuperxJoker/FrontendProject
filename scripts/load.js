

let container = document.querySelector(".load-info");
let loadMoreButton = document.querySelector(".load-btn");
let http = new XMLHttpRequest();

http.open('GET','data.json');

http.send();

function loadData(){
    let products = JSON.parse(http.responseText);
    let out = "";
    let counter = 0;

    for(let item of products){
        out +=`

    
       
        <div class="pro">
        <div>
  
          <a href="pages/productpage.html">
            <img src="${item.image}" alt="">
              </a>
  
        <div class = "des">
          
            <a href="pages/productpage.html" style="text-decoration:none;color:black">
           <h3>${item.name}</h3>
           <h4>${item.price}</h4>
           </a>
  
           
           <div>
           <button class="btn-1 add-to-cart">BUY NOW</button>
          </div>
        </div>
         <button class="btn add-to-cart"><i class="fa fa-plus" style="font-size:24px;color:green"></i></button>
        <button class="btn add-to-heart"><i class="fa fa-heart" style="font-size:24px;color: red;"></i></button>
        </div>
        
          
        
  
    
      </div>
      
        
        `;
    }

    container.insertAdjacentHTML('beforeend', out);

}


