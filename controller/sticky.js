document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const sticky = navbar.offsetTop;

    const stickNavbar = () => {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    };

    window.onscroll = () => {
        stickNavbar();
    };
});
