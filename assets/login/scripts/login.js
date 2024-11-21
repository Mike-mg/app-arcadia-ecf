const button_login = document.querySelector('.button_login')
const form_login = document.querySelector('.form_login')

button_login.addEventListener('click', open_login_form)

function open_login_form () {
    form_login.classList.add('show_form_login')
}