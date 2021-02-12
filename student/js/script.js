const toast = document.querySelector(".toast-container");
const toastMessage = document.querySelector(".toast-message");

var gsap = gsap.timeline();

window.addEventListener("load", function () {
  document.querySelector(".loading-screen").style.opacity = 0;
  setTimeout(() => {
    document.querySelector(".loading-screen").remove();
    gsap.to(".card", {
      delay: "0.1",
      opacity: "1",
      duration: 0.2,
      stagger: 0.05,
    });
  }, 50);
});

goBack = () => {
  console.log("window.history: ", window.history);
  if (window.history.length == 1) {
    window.location.href = "./home.html";
  } else {
    window.history.go(-1);
  }
};

showToast = () => {
  setTimeout(() => {
    toast.className = "toast-container active";
    setTimeout(() => {
      clearToast();
    }, 2500);
  }, 500);
};

clearToast = () => {
  toast.className = "toast-container";
};