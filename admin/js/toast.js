const toast = document.querySelector(".toast-container");

showToast = (message) => {
  if (toast.className == "toast-container active") {
    clearToast();
    clearTimeout(timeout);
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
