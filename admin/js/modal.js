const progForm = document.querySelector(".prog-form");
const subForm = document.querySelector(".sub-form");
console.log("progForm: ", progForm);

const showModal = (option) => {
  switch (option) {
    case "prog":
        showElement(progForm)
      break;
    case "sub":
        showElement(subForm)
      break;
  }
};

const showElement = (el) => {
  el.style.display = "flex";
  el.style.opacity = 1;
};
