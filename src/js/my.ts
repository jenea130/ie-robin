import "../vue/vue-app.js";
import gsapSticky from "./modules/animations/gsapSticky";
// import fixedHeader from "./modules/header/fixed-header";
import {mainMenu} from "./modules/menu";
import menuScroll from "./modules/scroll/menuScroll";
import tabs from "./modules/tabs"

document.addEventListener("DOMContentLoaded", function () {
    const about = document.querySelector('.about')

    if (about && window.innerWidth > 768) {
        gsapSticky()
    }

    mainMenu();
    // fixedHeader();
    menuScroll();
    tabs();
});
