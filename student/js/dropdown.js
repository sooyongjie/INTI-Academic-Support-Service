const dropdownInit = (input, inputID, dropdown, dropdownArray, valueArray) => {
  for (let j = 0; j < dropdownArray.length; j++) {
    let values = [dropdownArray[j].value, dropdownArray[j].id];
    valueArray.push(values);
  }
  console.log("dropdownArray: ", dropdownArray);
  console.log("valueArray: ", valueArray);

  input.addEventListener("input", () => {
    dropdown.classList.add("open");
    let inputValue = input.value.toLowerCase();
    if (inputValue.length > 0) {
      for (let j = 0; j < valueArray.length; j++) {
        if (
          !(
            inputValue.substring(0, inputValue.length) ===
            valueArray[j][0].substring(0, inputValue.length).toLowerCase()
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

  // prog, sess, sub HTML element
  dropdownArray.forEach((item) => {
    item.addEventListener("click", (evt) => {
      input.value = item.value;
      inputID.value = item.id;
      dropdownArray.forEach((dropdown) => {
        dropdown.classList.add("closed");
      });
    });
  });

  // when textbox is clicked
  input.addEventListener("focus", () => {
    dropdown.classList.add("open"); // textbox is expanded
    dropdownArray.forEach((inputs) => {
      inputs.classList.remove("closed");
    });
  });

  input.addEventListener("blur", () => {
    dropdown.classList.remove("open");
  });

  document.addEventListener("click", (evt) => {
    const isdropdown = dropdown.contains(evt.target);
    const isInput = input.contains(evt.target);
    if (!isdropdown && !isInput) {
      console.log("no");
      dropdown.classList.remove("open");
      dropdownArray.forEach((dropdown) => {
        dropdown.classList.add("closed");
      });
    }
  });
};

const inputs = [
  document.querySelector(".prog-input"),
  document.querySelector(".sess-input"),
  document.querySelector(".sub-input"),
];

const inputIDs = [
  document.querySelector(".prog-id"),
  document.querySelector(".sess-id"),
  document.querySelector(".sub-id"),
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

let valueArrays = [[], [], []];

for (i = 0; i < dropdowns.length; i++) {
  dropdownInit(
    inputs[i],
    inputIDs[i],
    dropdowns[i],
    dropdownArrays[i],
    valueArrays[i]
  );
}
