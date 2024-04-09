document.addEventListener("DOMContentLoaded", () => {
    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const barA = document.querySelector(".bar1");
    const barB = document.querySelector(".bar2");
    const barC = document.querySelector(".bar3");
    const navLinks = document.querySelector(".navLinks");

    hamburgerMenu.addEventListener("click", () => {
        hamburgerMenu.classList.toggle("change");
        barA.classList.toggle("barAniA");
        barB.classList.toggle("barAniB");
        barC.classList.toggle("barAniC");
        navLinks.classList.toggle("active");
    });
});