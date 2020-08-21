window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.subheader__menu'),
    menuItem = document.querySelectorAll('.subheader__item'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('subheader__menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('subheader__menu_active');
        })
    })
})