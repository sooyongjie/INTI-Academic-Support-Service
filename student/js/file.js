const input = document.querySelector("#receipt-input");
const tokenInput = document.querySelector("#token");

const onInsertFile = () => {
  const inputName = document.querySelector(".input-name");
  const inputIcon = document.querySelector(".input-icon");
  let fileName = input.files[0].name;
  console.log("fileName: ", input.files[0]);
  let fileType = fileName.split(".").pop();

  if (fileName.length > 15) {
    fileName = fileName.substring(0, 15) + `... (${fileType})`;
  }

  inputName.textContent = fileName;
  console.log("fileType: ", fileType);

  if (fileType == "jpeg" || fileType == "png") {
    inputIcon.className = "fas fa-file-image";
    uploadFile(input.files[0]);
  } else {
    alert("Not jpeg or png");
  }
};

const checkInput = () => {
  if (input.files.length == 0) {
    alert("No file selected");
  } else uploadFile(input.files[0]);
};

const generateFileName = () => {
  let reqID = document.querySelector("#request-id").value;
  console.log("reqID: ", reqID);
  return `req#${reqID}`;
};

const uploadToDB = (name) => {
  storageRef
    .child(name)
    .getDownloadURL()
    .then((url) => {
      // window.open(url);
      let token = url.split("=").pop();
      console.log("token: ", token);
      tokenInput.value = token;
      //   document.getElementById("receipt-form").submit();
    })
    .catch((error) => {
      console.log("error: ", error);
    });
};

// compress image
function uploadFile(imageFile) {
  console.log("originalFile instanceof Blob", imageFile instanceof Blob); // true
  console.log(`originalFile size ${imageFile.size / 1024 / 1024} MB`);

  var options = {
    maxSizeMB: 1,
  };
  imageCompression(imageFile, options)
    .then(function (compressedImage) {
      console.log("compressedImage: ", compressedImage);
      console.log(
        "compressedImage instanceof Blob",
        compressedImage instanceof Blob
      ); // true
      console.log(
        `compressedImage size ${compressedImage.size / 1024 / 1024} MB`
      ); // smaller than maxSizeMB
      var fileName = generateFileName();
      var fileRef = storageRef.child(fileName);
      var fileImagesRef = storageRef.child(fileName);

      fileRef.name === fileImagesRef.name;
      fileRef.fullPath === fileImagesRef.fullPath;
      fileRef.put(compressedImage).then((snapshot) => {
        uploadToDB(fileName);
      });
    })
    .catch(function (error) {
      console.log(error.message);
    });
}
