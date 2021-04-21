let paginationForm = document.querySelector(".pagination");
let offset = document.getElementById("offset").value;
let offsetInput = document.getElementById("offset-input");
let limit = document.getElementById("limit").value;

const addOffset = () => {
  let newOffset = offsetInput.value * limit;
  offsetInput.value = newOffset;
  console.log(`Currently displaying ${offset} offset ${limit} at once`);
  console.log(`Will offset ${newOffset} on refresh`);
  paginationForm.submit();
};
