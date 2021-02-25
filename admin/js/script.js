var gsap = gsap.timeline();

window.addEventListener("load", function () {
  document.querySelector(".loading-screen").style.opacity = 0;
  setTimeout(() => {
    document.querySelector(".loading-screen").remove();
    gsap.to(".section", {
      opacity: "1",
      duration: 0.2,
      stagger: 0.05,
    });
  }, 50);
});

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}