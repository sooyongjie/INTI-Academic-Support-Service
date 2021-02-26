const toast = document.querySelector(".toast-container");

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

showToast();
