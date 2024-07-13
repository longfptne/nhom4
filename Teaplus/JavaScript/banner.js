// slide của banner

const banner = document.querySelector(".banner");
const bannerImg = document.querySelectorAll(".banner_img")
const backBanner = document.querySelector(".banner_back");
const nextBanner = document.querySelector(".banner_next");
function slideInfoProduct(slide) {
    const infoProduct = document.querySelectorAll(".info_product");
    const activeInfoProduct = document.querySelector(".info_product.active_info");

    activeInfoProduct.classList.remove("active_info");

    infoProduct[slide].classList.add("active_info");
}
function choseInfoProduct() {


    const infoProduct = document.querySelectorAll(".info_product");
    infoProduct.forEach((info, index) => {
        info.addEventListener("click", function () {

            const activeInfoProduct = document.querySelector(".info_product.active_info");
            activeInfoProduct.classList.remove("active_info");
            infoProduct[index].classList.add("active_info");

            banner.style.transform = `translateX(-${index * 100}%)`;

            return slideImg(index)
        })

    })
    // 

}






var slide = 0;
function slideNextBanner() {
    slide++;
    if (slide > bannerImg.length - 1) {
        slide = 0;
    }


    return slideImg()
}
function slideBackBanner() {
    slide--;
    if (slide < 0) {
        slide = bannerImg.length - 1;
    }
    return slideImg()
}
function slideImg(index) {
    if (index || index === 0) {
        slide = index;
        return slide;
    }

    return banner.style.transform = `translateX(-${slide * 100}%)`;

}
var timerId;
function autoSlide() {
    timerId = setInterval(function () {
        slideNextBanner();
        slideInfoProduct(slide);

    }, 10000);

}
if(backBanner){
backBanner.addEventListener("click", () => {

    slideBackBanner();
    slideInfoProduct(slide);

})
nextBanner.addEventListener("click", () => {

    slideNextBanner();
    slideInfoProduct(slide);

})
backBanner.addEventListener("mouseover", () => {
    clearInterval(timerId);

})
backBanner.addEventListener("mouseout", () => {
    autoSlide()
})
nextBanner.addEventListener("mouseover", () => {
    clearInterval(timerId);
})
nextBanner.addEventListener("mouseout", () => {
    autoSlide();

})
choseInfoProduct()

autoSlide();
}