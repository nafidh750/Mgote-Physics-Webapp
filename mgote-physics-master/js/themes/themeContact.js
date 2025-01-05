let themeToggler = document.querySelector("#themeToggler");
let darkMode = localStorage.getItem("dark-mode")
toggleDarkMode = () => {
    themeToggler.classList.replace("fa-toggle-off", "fa-toggle-on");

    let contactSection = document.querySelector(".contact-section");
    let navbarSection = document.querySelector(".navbar");
    let backToTop = document.querySelector(".back-to-top");

    // navbar section
    if (navbarSection.classList.contains("navbar")) {
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

    // contact section
    if (contactSection.classList.contains("contact-section")) {
        contactSection.classList.replace("contact-section", "contact-section-dark-mode");
    } else {
        contactSection.classList.replace("contact-section-dark-mode", "contact-section");
    }

    localStorage.setItem("dark-mode", "enabled");
}

toggleLightMode = () => {
    themeToggler.classList.replace("fa-toggle-on", "fa-toggle-off");

    let contactSection = document.querySelector(".contact-section-dark-mode")
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

    // contact section
    if (contactSection.classList.contains("contact-section-dark-mode")) {
        contactSection.classList.replace("contact-section-dark-mode", "contact-section")
    } else {
        contactSection.classList.replace("contact-section", "contact-section-dark-mode")
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

    document.body.classList.toggle("dark");
})