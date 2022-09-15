const shopping_cart = document.querySelector('.shopping-cart');
const cart_btns = document.querySelectorAll('.add-to-cart');





for(cart_btn of cart_btns){

    cart_btn.onclick = (e)=>{

        shopping_cart.classList.add('active');
        let product_count = Number(shopping_cart.getAttribute('data-product-count')) || 0;
        shopping_cart.setAttribute('data-product-count', product_count + 1);

        setTimeout(() => {
            shopping_cart.classList.remove('active');
        },1000);



        
    }



}


const heart_cart = document.querySelector('.heart-cart');
const heart_btns = document.querySelectorAll('.add-to-heart');

for(heart_btn of heart_btns){

    heart_btn.onclick = (e)=>{

        heart_cart.classList.add('active');
        let heart_count = Number(heart_cart.getAttribute('data-heart-count')) || 0;
        heart_cart.setAttribute('data-heart-count', heart_count + 1);

        setTimeout(() => {
            heart_cart.classList.remove('active');
        },1000);

    }


}


