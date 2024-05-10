const hamburger = document.getElementById("nav-hamburger");
const body = document.getElementsByTagName("body")[0];
const navToggle = document.getElementById("nav-toggle");
const navCollapse = document.getElementsByClassName("nav-collapse")[0];
const navList = document.getElementsByClassName("nav-list")[0];
const navHamburgerIcon = document.querySelector("#nav-hamburger img");
const headerImg = document.querySelector("#header-img");
const newsTitle = document.querySelectorAll(".news-title a");
const newsText = document.querySelectorAll(".news-text");

newsTitle.forEach((title, i) => {
    if (title.classList.contains("main")) {
        if (title.innerText.length > 36) {
            title.innerText = title.innerText.slice(0, 36);
            title.innerText += "...";
        }
    } else if (title.classList.contains("leading")) {
        if (title.innerText.length > 24) {
            title.innerText = title.innerText.slice(0, 48);
            title.innerText += "...";
        }
    } else {
        if (title.innerText.length > 24) {
            title.innerText = title.innerText.slice(0, 24);
            title.innerText += "...";
        }
    }
});
newsText.forEach((text, i) => {
    if (text.classList.contains("main")) {
        if (text.innerText.length > 300) {
            text.innerText = text.innerText.slice(0, 300);
            text.innerText += "...";
        }
    }
    if (text.classList.contains("leading")) {
        if (text.innerText.length > 500) {
            text.innerText = text.innerText.slice(0, 500);
            text.innerText += "...";
        }
    } else {
        if (text.innerText.length > 50) {
            text.innerText = text.innerText.slice(0, 50);
            text.innerText += "...";
        }
    }
});

let navToggleActive = false;
hamburger.addEventListener("click", (e) => {
    navToggleActive = !navToggleActive;
    navToggleFunction();
});
const navToggleFunction = () => {
    if (navToggleActive) {
        navHamburgerIcon.src = `/assets/cross-small.svg`;
        body.style.overflow = "hidden";
        navList.style.left = 0;
    } else {
        navHamburgerIcon.src = `/assets/menu-burger.svg`;
        body.style.overflow = "auto";
        navList.style.left = "100vw";
    }
};
headerImg.addEventListener("load", (e) => {
    headerImg.style.animationName = "example";
});
