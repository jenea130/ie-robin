import { bodyUnlock } from "../functions";
export default function menuScroll() {
  const is_home = document.querySelector("body.home");
  const menu_links = document.querySelectorAll("#js-main-menu a");
  const header = document.querySelector(".main-header");
  menu_links.forEach((link) => {
    link.addEventListener("click", function (e: any) {
      e.preventDefault();
      clearLiActive();
      const li = link.closest("li");
      if (li) {
        li.classList.add("current-menu-item");
      }
      const href = e.currentTarget?.getAttribute("href");
      const hash = href?.split("#")[1];
      if (is_home) {
        if (hash) {
          const element = document.querySelector(href);
          const offset_top = hash == "why-us" ? -30 : 0;
          clearActive();
          element.classList.add("active");
          const element_top = element.offsetTop;
          menuClose();
          window.scrollTo({
            top: element_top - offset_top,
            behavior: "smooth",
          });
        } else {
          window.location.href = href;
        }
      } else {
        if (hash) {
          window.location.href = window.location.origin + href;
        } else {
          window.location.href = href;
        }
      }
    });
  });
  if (is_home) {
    document.addEventListener(
      "scroll",
      function () {
        const scrollPosition =
          document.documentElement.scrollTop || document.body.scrollTop;
        menu_links.forEach((link) => {
          const href = link.getAttribute("href");
          const hash = href?.split("#")[1];
          if (hash) {
            const element = document.querySelector(href);
            if (
              scrollPosition >= element.offsetTop - 100 &&
              scrollPosition < element.offsetTop + element.offsetHeight - 100
            ) {
              clearActive();
              const li = link.closest("li");
              if (!li?.classList.contains("current-menu-item")) {
                clearLiActive();
                li?.classList.add("current-menu-item");
              }
            }
          }
        });
      },
      { passive: true }
    );
  }

  // my scroll

  let lastScroll = 0;
  const defaultOffset = 500;

  const scrollPosition = () =>
    window.pageYOffset || document.documentElement.scrollTop;
  const containFixed = () => header?.classList.contains("hide");

  window.addEventListener("scroll", () => {
    if (
      scrollPosition() > lastScroll &&
      !containFixed() &&
      scrollPosition() > defaultOffset
    ) {
      // scroll down
      header?.classList.add("hide");
      header?.classList.remove("fixed");
      console.log("down");
    } else if (scrollPosition() < lastScroll && containFixed()) {
      // scroll up
      console.log("up");
      header?.classList.remove("hide");
      header?.classList.add("fixed");
    }

    if (scrollPosition() < defaultOffset) {
      header?.classList.remove("fixed");
    }
    lastScroll = scrollPosition();
  });


  function clearActive() {
    menu_links.forEach((link: any) => {
      link.classList.remove("active");
    });
  }
  function clearLiActive() {
    const li = document.querySelectorAll("#js-main-menu li");
    li.forEach((el) => {
      el.classList.remove("current-menu-item");
    });
  }
  function menuClose() {
    const menu = document.querySelector("#js-main-menu");
    const sandwichWrap = document.querySelector("#js-sandwitch-wrap");
    menu?.classList.remove("fixed");
    sandwichWrap?.classList.toggle("sandwitch--active");
    bodyUnlock(0);
  }
}
