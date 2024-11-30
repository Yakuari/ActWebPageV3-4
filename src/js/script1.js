document.addEventListener("DOMContentLoaded", function () {
    const showLoginBtn = document.querySelector("#show-login");
    const showSignupBtn = document.querySelector("#show-signup"); // Signup button
    const loginPopup = document.querySelector(".popup.login-popup");
    const signupPopup = document.querySelector(".popup.signup-popup");
    const closeBtns = document.querySelectorAll(".popup .close-btn");

    // Toggle popup visibility
    function togglePopup(popup) {
        if (popup) {
            popup.classList.toggle("active");
        }
    }

    // Event listeners for opening popups
    showLoginBtn?.addEventListener("click", function () {
        togglePopup(loginPopup);
    });

    showSignupBtn?.addEventListener("click", function () {
        togglePopup(signupPopup);
    });

    // Event listeners for closing popups
    closeBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
            const popup = this.closest(".popup");
            popup?.classList.remove("active");
        });
    });

    // Close popup when clicking outside
    document.addEventListener("click", function (event) {
        if (
            !event.target.closest(".popup") &&
            !event.target.matches("#show-login") &&
            !event.target.matches("#show-signup")
        ) {
            loginPopup?.classList.remove("active");
            signupPopup?.classList.remove("active");
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // Smooth scrolling for home link
    const homeLink = document.querySelector('.nav-links li a[href="index.php"]');
    
    if (homeLink) {
        homeLink.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Popup functionality
    const loginBtn = document.getElementById('show-login');
    const signupBtn = document.getElementById('show-signup');
    const loginPopup = document.querySelector('.login-popup');
    const signupPopup = document.querySelector('.signup-popup');
    const closeButtons = document.querySelectorAll('.close-btn');

    loginBtn.addEventListener('click', () => {
        loginPopup.classList.add('active');
    });

    signupBtn.addEventListener('click', () => {
        signupPopup.classList.add('active');
    });

    closeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            loginPopup.classList.remove('active');
            signupPopup.classList.remove('active');
        });
    });
});