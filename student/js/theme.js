window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (e) => {
    const newTheme = e.matches ? "dark" : "light";
    localStorage.setItem("theme", newTheme);
    toastMessage.textContent = "Updating theme...";
    setTimeout(() => {
      window.location.reload();
    }, 1000);
    // if(newTheme == "light") {
    //   setTheme("light")
    // } else setTheme("dark")
  });

checkPrefferedTheme = () => {
  if (
    !localStorage.getItem("theme") &&
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    localStorage.setItem("theme", "dark");
  } else localStorage.setItem("theme", "light");
  setTheme(localStorage.getItem("theme"));
  showToast("Welcome 👋🏻");
};

document.getElementById("theme-btn").addEventListener("click", () => {
  if (localStorage.getItem("theme") == "light") {
    localStorage.setItem("theme", "dark");
    setTheme("dark");
  } else {
    localStorage.setItem("theme", "light");
    setTheme("light");
  }
  document.body.classList.toggle("dark");
});

setTheme = (theme) => {
  console.log(`Loading ${localStorage.getItem("theme")} theme...`);
  if (theme == "light") {
    document.querySelector(".inti-logo").src = "../img/inti-logo-half.svg";
    themeIcon.className = "fad fa-moon-cloud";
    setTimeout(() => {
      themeIcon.className = "fad fa-sun shown";
    }, 300);
  } else {
    document.querySelector(".inti-logo").src = "../img/inti-logo-half-dark.svg";
    themeIcon.className = "fad fa-sun";
    setTimeout(() => {
      themeIcon.className = "fad fa-moon-cloud shown";
    }, 300);
  }
};

const links = document.getElementsByTagName("link");
const linkList = Array.prototype.slice.call(links);
const themeIcon = document.getElementById("theme-icon");

if (!localStorage.getItem("theme")) {
  checkPrefferedTheme();
} else {
  setTheme(localStorage.getItem("theme"));
  if (localStorage.getItem("theme") == "dark") {
    document.body.classList.toggle("dark");
  }
}
// console.log(window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches);
