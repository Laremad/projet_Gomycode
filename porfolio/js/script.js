// script.js

// Toggle the hamburger menu
alert("Bienvenu sur mon portfolio"),
document.getElementById('hamburger').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('active');
});

// Change navbar color on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('header-fixed');
    } else {
        navbar.classList.remove('header-fixed');
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});