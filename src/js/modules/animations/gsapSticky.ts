import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function gsapSticky() {
  gsap.registerPlugin(ScrollTrigger);
  const wrap = document.querySelector('.about__wrap');
  const img = document.querySelector('.about__col:first-of-type');
  const img_height = img.offsetHeight;
  const content = document.querySelector(".about__col:last-of-type");
  const content_height = content.offsetHeight;
  const total_height = content_height - img_height;
  ScrollTrigger.create({
    trigger: wrap,
    start: "-90 0",
    // end: "bottom 90%",
    end: () => `+=${total_height}`,
    pin: img,
    pinSpacing: false,
    // markers: true,
  });
}