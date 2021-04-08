// Navegation Menu

const btnMenu = document.querySelector(".btn-menu");
const Menu = document.querySelector(".lists");





btnMenu.addEventListener('click', ()=>{
    Menu.classList.toggle("spread")
})

window.addEventListener('click', e =>{
    if(Menu.classList.contains('spread') 
        && e.target != Menu && e.target != btnMenu){
        console.log('show')
        Menu.classList.toggle("spread")
       
    }
})

