const productContainers = [...document.querySelectorAll(".pro-container")];
const nxtBtn =[...document.querySelectorAll(".next-button")];
const preBtn = [...document.querySelectorAll(".prev-button")];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})


/*var slidermain = document.getElementById("product2");
var item = document.getElementsByClassName("pro-container");


function next(){
    slidermain.append(item[0]);
}

function prev(){
    slidermain.prepend(item[item.length - 1]);
}*/