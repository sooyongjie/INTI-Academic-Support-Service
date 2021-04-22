let paginationForm = document.querySelector(".pagination");
let offset = document.getElementById("offset").value;
let pageInput = document.getElementById("page-input");
let limit = document.getElementById("limit").value;

const addOffset = () => {
  let newOffset = parseInt(pageInput.value) + 1;
  pageInput.value = newOffset;
  console.log(`Currently displaying ${offset} offset ${limit} at once`);
  console.log(`Will offset ${newOffset} on refresh`);
  paginationForm.submit();
};

const minusOffset = () => {
  let newOffset = parseInt(pageInput.value) - 1;
  pageInput.value = newOffset;
  console.log(`Currently displaying ${offset} offset ${limit} at once`);
  console.log(`Will offset ${newOffset} on refresh`);
  paginationForm.submit();
};
