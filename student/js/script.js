const toast = document.querySelector(".toast-container");
const toastMessage = document.querySelector(".toast-message");
const fabActions = document.querySelector(".fab-actions");
const fab = document.querySelector(".fab");
const fabActionButtons = [
  ...document.querySelectorAll(".fab-action-btn"),
].reverse();
const scrollButton = document.querySelector(".scroll-btn");

var fabOpened = 0;
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

goBack = () => {
  console.log("window.history: ", window.history);
  if (window.history.length == 1) {
    window.location.href = "./home.html";
  } else {
    window.history.go(-1);
  }
};

showToast = (message) => {
  if (toast.className == "toast-container active") {
    clearToast();
    clearTimeout(timeout)
  }
  document.querySelector(".toast-message").textContent = message;
  setTimeout(() => {
    toast.className = "toast-container active";
    timeout = setTimeout(() => {
      clearToast();
    }, 3000);
  }, 100);
};

clearToast = () => {
  toast.className = "toast-container";
};

document.addEventListener("click", function (event) {
  var isClickInside = fab.contains(event.target);

  if (!isClickInside && fabOpened == true) {
    toggleFab();
    fabOpened = false;
  }
});

toggleFab = () => {
  if (fabOpened) {
    fabOpened = false;
    gsap.to(fabActionButtons, {
      opacity: "0",
      duration: 0.2,
      stagger: 0.05,
    });
  } else {
    fabOpened = true;
    gsap.to(fabActionButtons, {
      delay: "0.2",
      opacity: "1",
      duration: 0.2,
      stagger: 0.05,
    });
  }
  fabActions.classList.toggle("shown");
  fab.classList.toggle("expanded");
};

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 71) {
    scrollButton.classList = "scroll-btn shown";
  } else {
    scrollButton.classList = "scroll-btn";
  }
});

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}