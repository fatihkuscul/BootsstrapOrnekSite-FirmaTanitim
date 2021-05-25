// whatsapp başı
let destek = document.querySelector('#ackapa');
let cevap = document.querySelector('.trwpwhatsappballon');
let x = document.querySelector('#kapatac');
cevap.style.display = "none";

destek.addEventListener('click',function(e){
    cevap.style.display = (cevap.style.display === "block") 
    ? "none"
    : "block";
});

x.addEventListener('click',function(e){
    cevap.style.display = (cevap.style.display === "block") 
    ? "none"
    : "block";
});
// whatsapp sonu

// # ile sayfa içi link verince Navbar içerik üstüne gelmemesi için
function offsetAnchor() {
    if(location.hash.length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - 100);
    }
}

window.addEventListener("hashchange", offsetAnchor);
window.setTimeout(offsetAnchor, 1); // tekrar çalıştırabilir olmak için
 

