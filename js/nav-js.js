const links=document.querySelectorAll(".nav-links>li");
function toggleFun(x) {
    x.classList.toggle("change");
    
    document.querySelector(".nav-links").classList.toggle("nav-toggle-show");
}

document.querySelector(".dropdown").addEventListener('click', function(){
    document.querySelector(".nav-dropdown").classList.toggle("nav-dropHide");
})