// Tạo loader chuột hamster 

const container = document.querySelector(".container");
const loading = document.querySelector(".container1");

function redirect (link,time){
    container.style.display="none";
    loading.style.display="flex";
    setTimeout(()=>{
        window.open(link,'_blank')
        container.style.display="flex";
        loading.style.display="none";
    },time)

}
function redirect2(link,time){
    container.style.display="none";
    loading.style.display="flex";
    setTimeout(()=>{
        window.location.href = link;
        // container.style.display="flex";
        // loading.style.display="none";
    },time)
// 
}