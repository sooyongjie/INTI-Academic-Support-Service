var gsap = gsap.timeline();

window.addEventListener("load", function () {
  document.querySelector(".loading-screen").style.opacity = 0;
  setTimeout(() => {
    document.querySelector(".loading-screen").remove();
    gsap.to(".section", {
      delay: "0.1",
      opacity: "1",
      duration: 0.2,
      stagger: 0.04,
    });
  }, 50);
});
