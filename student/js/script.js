const toast = document.querySelector(".toast-container");
const toastMessage = document.querySelector(".toast-message");

var gsap = gsap.timeline();

window.addEventListener("load", function () {
  document.querySelector(".loading-screen").style.opacity = 0;
  setTimeout(() => {
    document.querySelector(".loading-screen").remove();
    gsap.to(".section", {
      delay: "0.1",
      opacity: "1",
      duration: 0.2,
      stagger: 0.02,
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
    }, 3000);
  }, 500);
};

clearToast = () => {
  toast.className = "toast-container";
};

// test toast
// showToast()