const toggleButton = document.querySelector('.menu');
const navbar = document.querySelector('.navbar');
toggleButton.addEventListener('click', () => {
    if (navbar.style.display == 'none') {
        navbar.style.display = 'flex';
    } else if (navbar.style.display != 'none') {
        navbar.style.display = 'none';
    }
});