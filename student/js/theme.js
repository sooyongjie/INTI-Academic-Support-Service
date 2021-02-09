window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (e) => {
    const newColorScheme = e.matches ? "dark" : "light";
    alert(newColorScheme);
  });

checkPrefferedTheme = () => {
  if (localStorage.getItem("theme")) {
    console.log(
      'localStorage.getItem("theme"): ',
      localStorage.getItem("theme")
    );
  } else if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    localStorage.setItem("theme", "dark");
  } else localStorage.setItem("theme", "light");
  console.log('localStorage.getItem("theme"): ', localStorage.getItem("theme"));
};

checkPrefferedTheme();
