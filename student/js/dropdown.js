const dropdownInit = (input, dropdown, dropdownArray, valueArray) => {
  dropdownArray.forEach((item) => {
    valueArray.push(item.textContent);
  });

  console.log('valueArray: ', valueArray);

  input.addEventListener("input", () => {
    dropdown.classList.add("open");
    let inputValue = input.value.toLowerCase();
    if (inputValue.length > 0) {
      for (let j = 0; j < valueArray.length; j++) {
        if (
          !(
            inputValue.substring(0, inputValue.length) ===
            valueArray[j].substring(0, inputValue.length).toLowerCase()
          )
        ) {
          dropdownArray[j].classList.add("closed");
        } else {
          dropdownArray[j].classList.remove("closed");
        }
      }
    } else {
      for (let i = 0; i < dropdownArray.length; i++) {
        dropdownArray[i].classList.remove("closed");
      }
    }
  });

  dropdownArray.forEach((item) => {
    item.addEventListener("click", (evt) => {
      input.value = item.textContent;
    });
  });

  input.addEventListener("focus", () => {
    dropdown.classList.add("open");
    dropdownArray.forEach((dropdown) => {
      dropdown.classList.remove("closed");
    });
  });

  input.addEventListener("blur", () => {
    dropdown.classList.remove("open");
  });

  document.addEventListener("click", (evt) => {
    const isdropdown = dropdown.contains(evt.target);
    const isInput = input.contains(evt.target);
    if (!isdropdown && !isInput) {
      dropdown.classList.remove("open");
    }
  });
};

const inputs = [
  document.querySelector(".prog-input"),
  document.querySelector(".sess-input"),
  document.querySelector(".sub-input"),
];
const dropdowns = [
  document.querySelector(".prog-list"),
  document.querySelector(".sess-list"),
  document.querySelector(".sub-list"),
];
const dropdownArrays = [
  [...document.querySelectorAll(".prog-value")],
  [...document.querySelectorAll(".sess-value")],
  [...document.querySelectorAll(".sub-value")],
];

let valueArrays = [[],[],[]];

for (i = 0; i < dropdowns.length; i++) {
  dropdownInit(inputs[i], dropdowns[i], dropdownArrays[i], valueArrays[i]);
}
