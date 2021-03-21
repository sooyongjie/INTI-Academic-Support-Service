const doneBtn = document.querySelector(".done-btn");
const subjectForm = document.querySelector(".form");
const inputField = subjectForm.querySelectorAll("input");
let requestArray = [];

const getSubject = () => {
  let tempArr = [];

  for (let i = 0; i < inputField.length; i++) {
    if (inputField[i].value == "") {
    } else {
      tempArr.push(inputField[i].value);
    }
  }

  if (tempArr.length == 3) {
    requestArray.push(tempArr);
    if (checkRepeatedValues(requestArray)) {
      showToast("The subject is already added");
      requestArray.pop();
    } else {
      doneBtn.classList = "done-btn active";
      doneBtn.style.pointerEvents = "visible";
      showToast("Subject added");
      console.log("requestArray: ", requestArray);
    }
  } else {
    showToast("Please fill in the form");
  }
};

const submitForm = () => {
  if (requestArray.length != 0) {
    const newForm = createForm();
    document.body.appendChild(newForm);
    newForm.submit();
  } else {
    showToast("Please fill in the form");
  }
};

const checkRepeatedValues = (arr) => {
  let valuesSoFar = [];
  for (let i = 0; i < arr.length; ++i) {
    let value = arr[i];
    if (value in valuesSoFar) {
      return true;
    }
    valuesSoFar[value] = true;
  }
  return false;
};

const createForm = () => {
  const inputName = ["prog", "sess", "sub"];
  const newForm = document.createElement("form");

  newForm.setAttribute("method", "post");
  newForm.setAttribute("action", "./request-confirmation.php");

  for (let i = 0; i < requestArray.length; i++) {
    for (let j = 0; j < inputName.length; j++) {
      const newInput = document.createElement("input");
      newInput.setAttribute("name", `${inputName[j]}${i + 1}`);
      newInput.setAttribute("value", requestArray[i][j]);
      newForm.appendChild(newInput);
    }
  }
  return newForm;
};
