document.addEventListener("DOMContentLoaded", function () {
    // Popups
    const showLoginBtn = document.querySelector("#show-login");
    const showSignupBtn = document.querySelector("#show-signup");
    const loginPopup = document.querySelector(".popup.login-popup");
    const signupPopup = document.querySelector(".popup.signup-popup");
    const closeBtns = document.querySelectorAll(".popup .close-btn");
    const buyButtons = document.querySelectorAll('.subscription form button');

    // Sidebar
    const sidebar = document.querySelector('.sidebar');
    const menuButton = document.querySelector('.menu-button');
    const closeButton = document.querySelector('.sidebar-close-btn');

    // Form popup
    const openFormBtn = document.querySelector("#openFormBtn");
    const formPopup = document.querySelector("#formPopup");
    const formCloseBtn = document.querySelector(".popup-form .close-btn");

    // Function to close all popups
    function closeAllPopups() {
        loginPopup?.classList.remove("active");
        signupPopup?.classList.remove("active");
        formPopup?.classList.remove("active");
    }

    // Toggle popup visibility
    function togglePopup(popup) {
        if (popup.classList.contains("active")) {
            popup.classList.remove("active"); // Close the popup if already active
        } else {
            closeAllPopups(); // Close any other active popups
            popup.classList.add("active"); // Open the designated popup
        }
    }

    // Event listeners for opening login/signup popups
    if (showLoginBtn) {
        showLoginBtn.addEventListener("click", function () {
            togglePopup(loginPopup);
        });
    }

    if (showSignupBtn) {
        showSignupBtn.addEventListener("click", function () {
            togglePopup(signupPopup);
        });
    }

    // Buy buttons now also trigger signup popup
    buyButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent form submission
            togglePopup(signupPopup);
        });
    });

    // Event listeners for closing popups
    closeBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
            const popup = this.closest(".popup");
            popup?.classList.remove("active");
        });
    });

    // Event listeners for opening form popup
    if (openFormBtn) {
        openFormBtn.addEventListener("click", function () {
            formPopup.classList.add("active");
        });
    }

    // Close the form popup when the close button is clicked
    if (formCloseBtn) {
        formCloseBtn.addEventListener("click", function () {
            formPopup.classList.remove("active");
        });
    }

    // Close popups when clicking outside
    document.addEventListener("click", function (event) {
        if (
            !event.target.closest(".popup") &&
            !event.target.matches("#show-login") &&
            !event.target.matches("#show-signup") &&
            !event.target.closest('.subscription form button') &&
            !event.target.closest("#formPopup") &&
            !event.target.matches("#openFormBtn")
        ) {
            closeAllPopups();
        }
    });

    // Smooth scrolling for home link
    const homeLink = document.querySelector('.nav-links li a[href="index.php"]');
    if (homeLink) {
        homeLink.addEventListener("click", (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    }

    // Toggle sidebar
    if (menuButton && sidebar) {
        menuButton.addEventListener('click', function () {
            sidebar.classList.toggle('active');
        });
    }

    // Close sidebar when close button is clicked
    if (closeButton && sidebar) {
        closeButton.addEventListener('click', function () {
            sidebar.classList.remove('active');
        });
    }
});
