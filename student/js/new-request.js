const subjectForm = document.querySelector(".form");
const inputField = subjectForm.querySelectorAll("input");
let subjectArray = [];

const getSubject = () => {
  let temp = [];
  for (let i = 0; i < inputField.length; i++) {
    if (inputField[i].value == "") {
    } else {
      temp.push(inputField[i].value);
      //   Cookies.set('name', 'value')
    }
  }
  if (temp.length == 3) {
    subjectArray.push(temp);
    showToast("Subject added");
    console.log("subjectArray: ", subjectArray);
  } else {
    showToast("Please fill in the form");
  }
};
