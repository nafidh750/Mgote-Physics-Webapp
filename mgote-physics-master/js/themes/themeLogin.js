let themeToggler = document.querySelector("#themeToggler");
let darkMode = localStorage.getItem("dark-mode")
toggleDarkMode = () => {
    themeToggler.classList.replace("fa-toggle-off", "fa-toggle-on");
    let loginSection = document.querySelector(".login-section");
    let navbarSection = document.querySelector(".navbar");
    let backToTop = document.querySelector(".back-to-top");

    // navbar section
    if (!(navbarSection.classList.contains("navbar-dark-mode"))) {
        navbarSection.classList.add("navbar-dark-mode");
    } else {
        navbarSection.classList.remove("navbar-dark-mode");
    }


    // back to top button
    if (backToTop.classList.contains("back-to-top")) {
        backToTop.classList.add("back-to-top-dark-mode");
    } else {
        backToTop.classList.remove("navbar-dark-mode");
    }

    // about section
    if (loginSection.classList.contains("login-section")) {
        loginSection.classList.replace("login-section", "login-section-dark-mode");
    } else {
        loginSection.classList.replace("login-section-dark-mode", "login-section");
    }

    localStorage.setItem("dark-mode", "enabled");
}

toggleLightMode = () => {
    themeToggler.classList.replace("fa-toggle-on", "fa-toggle-off");

    let loginSection = document.querySelector(".login-section-dark-mode")
    let navbarSection = document.querySelector(".navbar-dark-mode");
    let backToTop = document.querySelector(".back-to-top");

    // navbar section
    if ((navbarSection.classList.contains("navbar-dark-mode"))) {
        navbarSection.classList.remove("navbar-dark-mode")
    } else {
        navbarSection.classList.add("navbar-dark-mode")
    }

    // back to top button
    if (backToTop.classList.contains("back-to-top-dark-mode")) {
        backToTop.classList.remove("back-to-top-dark-mode")
    } else {
        backToTop.classList.add("back-to-top-dark-mode")
    }

    // about section
    if (loginSection.classList.contains("login-section-dark-mode")) {
        loginSection.classList.replace("login-section-dark-mode", "login-section")
    } else {
        loginSection.classList.replace("login-section", "login-section-dark-mode")
    }


    localStorage.setItem("dark-mode", "disabled");
}

if (darkMode == "enabled") {
    toggleDarkMode();
}

// dark and light toggler
themeToggler.addEventListener("click", () => {
    window.location.reload();
    darkMode = localStorage.getItem("dark-mode");

    if (darkMode === "disabled") {
        toggleDarkMode();
    } else {
        toggleLightMode();
    }

})