window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (e) => {
    const newColorScheme = e.matches ? "dark" : "light";
    alert(newColorScheme);
  });

checkPrefferedTheme = () => {
  if (
    !localStorage.getItem("theme") ||
    (window.matchMedia &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
    localStorage.setItem("theme", "dark");
  } else localStorage.setItem("theme", "light");
  setTheme(localStorage.getItem("theme"));
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
  document.body.classList.toggle("dark");
});

setTheme = (theme) => {
  if (theme == "light") {
    linkList[3].href = "../css/student/student.css";
    document.querySelector(".inti-logo").src = "../img/inti-logo.png";
  } else {
    linkList[3].href = "../css/student/student-dark.css";
    document.querySelector(".inti-logo").src = "../img/inti-logo-dark.png";
  }
  console.log(`Loading ${theme} theme...`);
  document.body.classList.toggle("dark");
};

const links = document.getElementsByTagName("link");
const linkList = Array.prototype.slice.call(links);

if (!localStorage.getItem("theme")) {
  checkPrefferedTheme();
} else {
  setTheme(localStorage.getItem("theme"));
}
