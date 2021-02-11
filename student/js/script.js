window.addEventListener("load", function () {
  document.querySelector(".loading-screen").style.opacity = 0;
  setTimeout(() => {
    document.querySelector(".loading-screen").remove();
  }, 400);
});

goBack = () => {
  console.log('window.history: ', window.history);
  if(window.history.length == 1) {
    window.location.href ='./home.html'
  } else {
    window.history.go(-1);
  }
}
