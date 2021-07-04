let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('list-menu');

btnMenu.addEventListener('click',function(){
    menu.classList.toggle('show');
});


window.addEventListener("resize", function(){
    if(window.innerWidth > 768){
        menu.classList.remove('show');
    }
})