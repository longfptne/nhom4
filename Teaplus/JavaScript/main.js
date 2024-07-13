// js thuộc phần main <main>
// import handleUpgradeCart from "./cart.js"
const product = document.querySelectorAll(".product");


product.forEach((element, index) => {
  element.addEventListener("mouseover", function () {
    const activeShow = document.querySelectorAll(".product-icon-cart-heart");
    activeShow[index].classList.add("active_show_cart_heart");
    const productCart = document.querySelectorAll(".product_cart");
    const productHeart = document.querySelectorAll(".product_heart");
    productCart[index].classList.add("active_rotate");
    productHeart[index].classList.add("active_rotate");
    return  getValueHeart(index);
  });
  element.addEventListener("mouseout", function () {
    const activeShow = document.querySelectorAll(".product-icon-cart-heart");
    activeShow[index].classList.remove("active_show_cart_heart");
    const productCart = document.querySelectorAll(".product_cart");
    const productHeart = document.querySelectorAll(".product_heart");
    productCart[index].classList.remove("active_rotate");
    productHeart[index].classList.remove("active_rotate");
    // 

  });
});
const heartArr = {};

function getValueHeart(index){
  let valueHeart = index;
  
let heartNumber = 0;
let icClickLike = 0;
const heart = document.querySelectorAll(".heart");
console.log(heart)
if(heart){

  let isLike = false;
  heart[valueHeart].addEventListener("click",()=>{
    isLike = true;
    heartNumber++;
    if(isLike){
      heart[valueHeart].classList.add("isLike");
      

    }
    const productHeartActive = document.querySelector(".heart.isLike");
    setTimeout(()=>{
      productHeartActive.classList.remove("isLike");
      isLike = false;

    },250)
  })
}
}



// ---------------show menu choice---------------
// ----------- close and open menu ----------------
// const containOverlayProductDetail = document.querySelector(
//   ".contain-overlay-product-detail"
// );
// const productCart = document.querySelectorAll(".product_cart");
// const closeShow = document.querySelector(".close_show");
// const closeText = document.querySelector(".close-text");

// let isClose = false;
// productCart.forEach((element, index) => {
//   element.addEventListener("click", () => {
//     isClose = true;
//     if (isClose) {
//       containOverlayProductDetail.style.display = "flex";
//     }  
//     console.log(isClose);
//   });
// });

// // ----------------------------Đóng mở menu--------------------------------
// if(closeShow){
//   closeShow.addEventListener("click", () => {
//     isClose = false;
//     console.log(isClose);
  
//     if (!isClose) {
//       containOverlayProductDetail.style.display = "none"; 
//     }
//   });


//   closeText.addEventListener("click", () => {
//     isClose = false;
//     console.log(isClose);
  
//     if (!isClose) {
//       containOverlayProductDetail.style.display = "none";
//     }
//   });

// }


// ---------------------- logic tính toán tiền-------------------------

const subtract = document.querySelector(".subtract");
const add = document.querySelector(".add");
const productQuantity = document.querySelector(".product_quantity");
const result = document.querySelector(".result");

const input = document.querySelectorAll(".input");

var quantity = 1;
const handleAdd = () => {
  quantity++;
  return handleQuantity();
};

const handleSubtract = () => {
  quantity--;
  if (quantity <= 0) {
    quantity = 1;
  }
  return handleQuantity();
};

const handleQuantity = () => {
  

    productQuantity.innerHTML = quantity;
  
  return quantity;
};
const handleResult = (sugarValue = 0,  sizeValue = 0, iceValue = 0,  toppingValue = 0) => {
  const blockUpPrice = document.querySelector(".block_up-price").value;
  const inputQuantity = document.querySelector("input[name='quantity']");

  const quantity = handleQuantity();
  inputQuantity.value = quantity;
  
  let totalMenu =
  parseInt(sugarValue, 10) +
  parseInt(sizeValue, 10) +
  parseInt(iceValue, 10) +
  parseInt(toppingValue, 10);
  if(totalMenu == 0 ){

    var total = ( parseInt(blockUpPrice, 10)) * quantity
  }
  else{
  
    
    var total = (totalMenu + parseInt(blockUpPrice, 10)) * quantity;
  }
  
  result.innerHTML = total.toLocaleString() + "đ";
};
input.forEach((element) => {
  element.addEventListener("change", function (e) {
    const sugar = document.querySelectorAll("input[name='sugar']");
    const size = document.querySelectorAll("input[name='size']");
    const iceRock = document.querySelectorAll("input[name='ice-rock']");
    const topping = document.querySelectorAll("input[name='topping[]']");

    let sugarValue;
    let sizeValue;
    let iceRockValue;
    let toppingValue = 0;

    for (var i = 0; i < sugar.length; i++) {
      if (sugar[i].checked) {
        sugarValue = sugar[i].value;
        
      }
    }
    for (var i = 0; i < size.length; i++) {
      if (size[i].checked) {
        sizeValue = size[i].value;
      }
    }
    for (var i = 0; i < iceRock.length; i++) {
      if (iceRock[i].checked) {
        iceRockValue = iceRock[i].value;
      }
    }
    for (var i = 0; i < topping.length; i++) {
      if (topping[i].checked) {
        toppingValue += parseInt(topping[i].value, 10);
      }
    }

    return getValue(sugarValue, sizeValue, iceRockValue, toppingValue);
  });
});

var getSugarValue = 0;
var getSizeValue = 0;
var getIceRockValue = 0;
var getToppingValue = 0;
function getValue(sugarValue, sizeValue, iceRockValue, toppingValue) {
  handleResult(sugarValue, sizeValue, iceRockValue, toppingValue);
  getSugarValue = sugarValue;
  getSizeValue = sizeValue;
  getIceRockValue = iceRockValue;
  getToppingValue = toppingValue;
}
let isClickQuantity = false;
if(add){
  add.addEventListener("click", () => {
    
    handleAdd();
    isClickQuantity = true;
    // handleUpgradeCart(isClickQuantity)
    handleResult(getSugarValue, getSizeValue, getIceRockValue, getToppingValue);
  });


  subtract.addEventListener("click", () => {
    handleSubtract();
    isClickQuantity = true;
    // handleUpgradeCart(isClickQuantity)
  
  
    handleResult(getSugarValue, getSizeValue, getIceRockValue, getToppingValue);
  });
}




