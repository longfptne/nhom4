// Slide của sản phẩm

const slideProduct = document.querySelector(".slide_product");
const slideProductImg = document.querySelectorAll(".slide_product_img");
const backSlideProduct = document.querySelector(".slide_product_back");
const nextSlideProduct = document.querySelector(".slide_product_next");
const fourElement = 4;

slideProductImg.forEach((element, index) => {
  element.style.transform = `translateX(${index * 26}%)`;
});

const productSlideContain = document.querySelectorAll(".contain_product_slide");
function slideInfoProduct1(slide) {
  const infoProductSlide = document.querySelectorAll(".info_slideProduct");
  const activeInfoProductSlide = document.querySelector(
    ".info_slideProduct.active_slide"
  );

  activeInfoProductSlide.classList.remove("active_slide");
  infoProductSlide[slide].classList.add("active_slide");
}
function choseInfoProduct1() {
  const infoProductSlide = document.querySelectorAll(".info_slideProduct");
  infoProductSlide.forEach((info, index) => {
    info.addEventListener("click", function () {
      const activeInfoProductSlide = document.querySelector(
        ".info_slideProduct.active_slide"
      );
      activeInfoProductSlide.classList.remove("active_slide");
      infoProductSlide[index].classList.add("active_slide");
      //

      slideProduct.style.transform = `translateX(-${index * 26}%)`;
   

      return slideImg1(index);
    });
  });
}
var slide1 = 0;
function slideNextBanner1() {
  slide1++;
  if (slide1 > slideProductImg.length - fourElement) {
    slide1 = 0;
  }

  return slideImg1();
}
function slideBackBanner1() {
  slide1--;
  if (slide1 < 0) {
    slide1 = slideProductImg.length - fourElement;
  }
  return slideImg1();
}
function slideImg1(index) {
  if (index || index === 0) {
    slide1 = index;
    return slide1;
  }

  return (slideProduct.style.transform = `translateX(-${slide1 * 26}%)`);
}
var timerId1;
function autoSlide1() {
  timerId1 = setInterval(function () {
    slideNextBanner1();
    slideInfoProduct1(slide1);
  }, 5000);
}
if(backSlideProduct){


backSlideProduct.addEventListener("click", () => {
  slideBackBanner1();
  slideInfoProduct1(slide1);
});
nextSlideProduct.addEventListener("click", () => {
  slideNextBanner1();
  slideInfoProduct1(slide1);
});
backSlideProduct.addEventListener("mouseover", () => {
  clearInterval(timerId1);
});
backSlideProduct.addEventListener("mouseout", () => {
  autoSlide1()
});
nextSlideProduct.addEventListener("mouseover", () => {
  clearInterval(timerId1);
});
nextSlideProduct.addEventListener("mouseout", () => {
  autoSlide1();
});
choseInfoProduct1();

autoSlide1();
}
