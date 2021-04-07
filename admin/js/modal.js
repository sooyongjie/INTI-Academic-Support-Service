const modal = document.querySelector(".modal-container");

const showModal = () => {
  showElement(modal);
};

const hideModal = () => {
  hideElement(modal);
};

const showElement = (el) => {
  el.style.display = "flex";
  document.onkeydown = function (evt) {
    onEscKeydown(evt, el);
  };
  setTimeout(() => {
    window.onclick = function (evt) {
      if (!document.querySelector(".modal form").contains(evt.target)) {
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
