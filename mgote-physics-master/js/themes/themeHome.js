let themeToggler = document.querySelector("#themeToggler");
let darkMode = localStorage.getItem("dark-mode")


// Dark Mode
const toggleDarkMode = () => {
    themeToggler.classList.replace("fa-toggle-off", "fa-toggle-on");
    let navbarSection = document.querySelector(".navbar");
    let backToTop = document.querySelector(".back-to-top");
    let headerCarousel = document.querySelector(".header-carousel");
    let aboutSection = document.querySelector(".about-section");
    let packageSection = document.querySelector(".package-section");
    let teamSection = document.querySelector(".team-section");

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

    // header carousel
    if (headerCarousel.classList.contains("header-carousel")) {
        headerCarousel.classList.add("header-carousel-dark-mode");
    } else {
        headerCarousel.classList.remove("header-carousel-dark-mode");
    }

    // about section
    if (aboutSection.classList.contains("about-section")) {
        aboutSection.classList.add("about-section-dark-mode");
    } else {
        aboutSection.classList.remove("about-section-dark-mode");
    }

    // package section
    if (packageSection.classList.contains("package-section")) {
        packageSection.classList.add("package-section-dark-mode");
    } else {
        packageSection.classList.remove("package-section-dark-mode");
    }

    // team section
    if (teamSection.classList.contains("team-section")) {
        teamSection.classList.add("team-section-dark-mode");
    } else {
        teamSection.classList.remove("team-section-dark-mode");
    }

    console.log("Dark mode is enabled");
    localStorage.setItem("dark-mode", "enabled")
}


// Light Mode
const toggleLightMode = () => {
    themeToggler.classList.replace("fa-toggle-on", "fa-toggle-off");
    let navbarSection = document.querySelector(".navbar-dark-mode");
    let backToTop = document.querySelector(".back-to-top");
    let headerCarousel = document.querySelector(".header-carousel");
    let aboutSection = document.querySelector(".about-section");
    let packageSection = document.querySelector(".package-section");
    let teamSection = document.querySelector(".team-section");


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

    // header carousel
    if (headerCarousel.classList.contains("header-carousel-dark-mode")) {
        headerCarousel.classList.remove("header-carousel-dark-mode");
    } else {
        headerCarousel.classList.add("header-carousel-dark-mode")
    }

    // about section
    if (aboutSection.classList.contains("about-section-dark-mode")) {
        aboutSection.classList.remove("about-section-dark-mode");
    } else {
        aboutSection.classList.add("about-section-dark-mode")
    }

    // package section
    if (packageSection.classList.contains("package-section-dark-mode")) {
        packageSection.classList.remove("package-section-dark-mode");
    } else {
        packageSection.classList.add("package-section-dark-mode")
    }

    // team section
    if (teamSection.classList.contains("team-section-dark-mode")) {
        teamSection.classList.remove("team-section-dark-mode");
    } else {
        teamSection.classList.add("team-section-dark-mode")
    }

    console.log("Dark mode is disabled");
    localStorage.setItem("dark-mode", "disabled")
}

if (darkMode == "enabled") {
    toggleDarkMode();   // toggle default when page loads
}

// switching between dark and light mode
themeToggler.addEventListener("click", () => {
    window.location.reload();
    darkMode = localStorage.getItem("dark-mode");

    if (darkMode === "disabled") {
        toggleDarkMode();
    } else {
        toggleLightMode();
    }
})

