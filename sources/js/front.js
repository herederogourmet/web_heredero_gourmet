document.addEventListener('DOMContentLoaded', function(){
    listeners()
})

function listeners() {
    logoMenu()
    btnHamburguer()
}

function logoMenu() {
    let flag = false
    window.addEventListener('scroll', function(e) {
        if(window.scrollY > 180) {
            if(!flag) {
                document.querySelector('.header').classList.remove('big')
                flag = true;
            }
        } else {
            if(flag) {
                document.querySelector('.header').classList.add('big')
                flag = false
            }
        }
    });
}

function btnHamburguer() {
    const btnMenuMobile = document.querySelector('#menu-toggle')
    const menuMobile = document.querySelector('body')
    btnMenuMobile.addEventListener('click', () => {
        btnMenuMobile.classList.toggle('open')
        menuMobile.classList.toggle('showMenu')
    })
}