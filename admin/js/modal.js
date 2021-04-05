const progForm = document.querySelector(".prog-form");
const subForm = document.querySelector(".sub-form");
console.log("progForm: ", progForm);

const showModal = (option) => {
  switch (option) {
    case "prog":
      showElement(progForm);
      break;
    case "sub":
      showElement(subForm);
      break;
  }
};

const hideModal = (option) => {
  switch (option) {
    case "prog":
      hideElement(progForm);
      break;
    case "sub":
      hideElement(subForm);
      break;
  }
};

const showElement = (el) => {
  el.style.display = "flex";
  document.onkeydown = function (evt) {
    onEscKeydown(evt, el);
  };
  setTimeout(() => {
    window.onclick = function (evt) {
      if (!document.querySelector(".sub-modal").contains(evt.target)) {
        hideElement(el);
      }
    };
  }, 1);
  setTimeout(() => {
    el.style.opacity = 1;
  }, 100);
};

const hideElement = (el) => {
  el.style.opacity = 0;
  setTimeout(() => {
    el.style.display = "none";
  }, 100);
  document.onkeydown = null;
  window.onclick = null;
};

const onEscKeydown = (evt, el) => {
  evt = evt || window.event;
  if (evt.key == "Escape") {
    hideElement(el);
  }
};