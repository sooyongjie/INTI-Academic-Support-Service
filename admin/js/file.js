const input = document.querySelector("#upload-input");
const ssIDInput = document.querySelector("#ssID");
const subIDInput = document.querySelector("#subID");
const tokenInput = document.querySelector("#token");

const triggerInput = () => {
  input.click();
};

const updateSelectedSubject = (ssID, subID) => {
  ssIDInput.value = ssID;
  subIDInput.value = subID;
};

const onInsertFile = () => {
  const inputName = document.querySelector(".input-name");
  const inputIcon = document.querySelector(".input-icon");
  let fileName = input.files[0].name;
  let fileType = fileName.split(".").pop();

  if (fileName.length > 25) {
    fileName = fileName.substring(0, 25) + `... (${fileType})`;
  }

  inputName.textContent = fileName;

  switch (fileType) {
    case "pdf":
      inputIcon.className = "fas fa-file-pdf";
      break;
    case "docx" || "doc":
      inputIcon.className = "fas fa-file-word";
      break;
  }
};

const checkInput = () => {
  if (input.files.length == 0) {
    alert("No file selected");
  } else uploadFile(input.files[0]);
};

const uploadFile = (file) => {
  var fileName = generateFileName();
  var fileRef = storageRef.child(fileName);
  var fileImagesRef = storageRef.child(fileName);

  fileRef.name === fileImagesRef.name;
  fileRef.fullPath === fileImagesRef.fullPath;
  fileRef.put(file).then((snapshot) => {
    uploadToDB(fileName);
  });
};

const generateFileName = () => {
  let sessName = document.querySelector("#sess-name").value;
  return `${subIDInput.value} ${sessName}`;
};

const uploadToDB = (name) => {
  storageRef
    .child(name)
    .getDownloadURL()
    .then((url) => {
      // window.open(url);
      let token = url.split("=").pop();
      tokenInput.value = token;
      document.querySelector(".course-structure-form").submit();
    })
    .catch((error) => {
      console.log("error: ", error);
    });
};
