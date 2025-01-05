let themeToggler = document.querySelector("#themeToggler");
let darkMode = localStorage.getItem("dark-mode")
toggleDarkMode = () => {
    themeToggler.classList.replace("fa-toggle-off", "fa-toggle-on");
    let premiumSection = document.querySelector(".premium-section");

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

    // premium section
    if (premiumSection.classList.contains("premium-section")) {
        premiumSection.classList.replace("premium-section", "premium-section-dark-mode");
    } else {
        premiumSection.classList.replace("premium-section-dark-mode", "premium-section");
    }

    localStorage.setItem("dark-mode", "enabled");
}

toggleLightMode = () => {
    themeToggler.classList.replace("fa-toggle-on", "fa-toggle-off");

    let premiumSection = document.querySelector(".premium-section-dark-mode")
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

    // premium section
    if (premiumSection.classList.contains("premium-section-dark-mode")) {
        premiumSection.classList.replace("premium-section-dark-mode", "premium-section")
    } else {
        premiumSection.classList.replace("premium-section", "premium-section-dark-mode")
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