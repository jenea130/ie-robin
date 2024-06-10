import "../vue/vue-app.js";
// import fixedHeader from "./modules/header/fixed-header";
import {mainMenu} from "./modules/menu";
import menuScroll from "./modules/scroll/menuScroll";
import tabs from "./modules/tabs"

document.addEventListener("DOMContentLoaded", function () {
    mainMenu();
    // fixedHeader();
    menuScroll();
    tabs();
});
