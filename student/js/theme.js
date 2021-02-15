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
    (window.matchMedia &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
    localStorage.setItem("theme", "dark");
  } else localStorage.setItem("theme", "light");
  setTheme(localStorage.getItem("theme"));
  showToast();
};

document.getElementById("theme-btn").addEventListener("click", () => {
  if (localStorage.getItem("theme") == "light") {
    localStorage.setItem("theme", "dark");
    setTheme("dark");
  } else {
    localStorage.setItem("theme", "light");
    setTheme("light");
  }
  console.log(`Loading ${localStorage.getItem("theme")} theme...`);
});

setTheme = (theme) => {
  if (theme == "light") {
    linkList[3].href = "../css/student/student.css";
    document.querySelector(".inti-logo").src = "../img/inti-logo-half.svg";
    themeIcon.className = "fad fa-moon-cloud";
    setTimeout(() => {
      themeIcon.className = "fad fa-sun shown";
    }, 300);
  } else {
    linkList[3].href = "../css/student/student-dark.css";
    document.querySelector(".inti-logo").src = "../img/inti-logo-half-dark.svg";
    themeIcon.className = "fad fa-sun";
    setTimeout(() => {
      themeIcon.className = "fad fa-moon-cloud shown";
    }, 300);
  }
  console.log(`Loading ${theme} theme...`);
  if (document.body.classList.length == 0) {
    document.body.classList.toggle("dark");
  }
};

const links = document.getElementsByTagName("link");
const linkList = Array.prototype.slice.call(links);
const themeIcon = document.getElementById("theme-icon");

if (!localStorage.getItem("theme")) {
  checkPrefferedTheme();
} else {
  setTheme(localStorage.getItem("theme"));
}
// console.log(window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches);