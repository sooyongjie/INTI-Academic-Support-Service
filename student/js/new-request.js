const subjectForm = document.querySelector(".form");
const inputField = subjectForm.querySelectorAll("input");
let subjectArray = [];

const getSubject = () => {
  let tempArr = [];

  for (let i = 0; i < inputField.length; i++) {
    if (inputField[i].value == "") {
    } else {
      tempArr.push(inputField[i].value);
    }
  }

  if (tempArr.length == 3) {
    subjectArray.push(tempArr);
    if (checkRepeatedSubjects(subjectArray)) {
      showToast("The subject is already added");
      subjectArray.pop();
    } else {
      showToast("Subject added");
      console.log("subjectArray: ", subjectArray);
    }
  } else {
    showToast("Please fill in the form");
  }
};

checkRepeatedSubjects = (arr) => {
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
