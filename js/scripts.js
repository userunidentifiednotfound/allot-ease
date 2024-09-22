// JavaScript for transition and step-by-step registration
window.onscroll = function() {
    var nav = document.querySelector("nav");
    if (window.pageYOffset > 50) {
       nav.style.backgroundColor = "#444";
    } else {
       nav.style.backgroundColor = "#333";
    }
 };
document.querySelector('.next-btn').addEventListener('click', function() {
    document.getElementById('register-step1').classList.add('hidden');
    document.getElementById('register-step2').classList.remove('hidden');
});

// Toggle between login and register
document.querySelector('.container').addEventListener('click', function(event) {
    if (event.target.closest('.login-box') || event.target.closest('.register-box')) {
        this.classList.toggle('active');
    }
});
