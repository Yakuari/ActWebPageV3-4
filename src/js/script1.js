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

    // Function to close sidebar
    function closeSidebar() {
        sidebar?.classList.remove('active');
    }

    // Toggle popup visibility
    function togglePopup(popup) {
        if (!popup) return; // Guard clause
        
        if (popup.classList.contains("active")) {
            popup.classList.remove("active");
        } else {
            closeAllPopups();
            closeSidebar(); // Close sidebar when opening popup
            popup.classList.add("active");
        }
    }

    // Event listeners for opening login/signup popups
    showLoginBtn?.addEventListener("click", (e) => {
        e.preventDefault();
        togglePopup(loginPopup);
    });

    showSignupBtn?.addEventListener("click", (e) => {
        e.preventDefault();
        togglePopup(signupPopup);
    });

    // Buy buttons event listeners
    buyButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            togglePopup(signupPopup);
        });
    });

    // Popup close buttons
    closeBtns.forEach((btn) => {
        btn.addEventListener("click", function() {
            const popup = this.closest(".popup");
            popup?.classList.remove("active");
        });
    });

    // Form popup events
    openFormBtn?.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup?.classList.add("active");
    });

    formCloseBtn?.addEventListener("click", () => {
        formPopup?.classList.remove("active");
    });

    // Close popups and sidebar when clicking outside
    document.addEventListener("click", function(event) {
        const target = event.target;
        const isPopupClick = target.closest(".popup");
        const isLoginClick = target.matches("#show-login");
        const isSignupClick = target.matches("#show-signup");
        const isBuyButtonClick = target.closest('.subscription form button');
        const isFormPopupClick = target.closest("#formPopup");
        const isOpenFormClick = target.matches("#openFormBtn");
        const isMenuButtonClick = target.closest('.menu-button');
        const isSidebarClick = target.closest('.sidebar');

        // Close popups if clicking outside
        if (!isPopupClick && !isLoginClick && !isSignupClick && 
            !isBuyButtonClick && !isFormPopupClick && !isOpenFormClick) {
            closeAllPopups();
        }

        // Close sidebar if clicking outside
        if (!isMenuButtonClick && !isSidebarClick) {
            closeSidebar();
        }
    });

    // Smooth scrolling for home link
    const homeLink = document.querySelector('.nav-links li a[href="index.php"]');
    homeLink?.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });

    // Sidebar toggle
    menuButton?.addEventListener('click', (e) => {
        e.preventDefault();
        sidebar?.classList.toggle('active');
        closeAllPopups(); // Close popups when opening sidebar
    });

    // Sidebar close button
    closeButton?.addEventListener('click', () => {
        closeSidebar();
    });
});