// Show menu burger

const button_menu = document.querySelector('.button_menu')
const menu = document.querySelector('.nav_links')
const container_menu = document.querySelector('.container_nav_links')

button_menu.addEventListener('click', open_menu)

function open_menu () {
    menu.classList.add('show_nav_links')
    container_menu.classList.add('show_container_nav_links')
}


