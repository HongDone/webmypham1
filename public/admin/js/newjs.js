const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");
const menu = document.querySelector(".menu-content");
const passwordToggleButtons = document.querySelectorAll(".password-toggle-button");
const actionsButton = document.querySelectorAll(".actions-button");
const deleteButtons = document.querySelectorAll(".delete-button");

passwordToggleButtons.forEach((button) => {
  button.addEventListener("click", function () {
    password = this.parentNode.querySelector("input");
    if (password.type === "password") {
      password.type = "text";
      button.className = "fas fa-eye password-toggle-button";
    } else {
      password.type = "password";
      button.className = "fas fa-eye-slash  password-toggle-button";
    }
  });
});
actionsButton.forEach((button) => {
  button.addEventListener("click", () => {
    actionsSubmenu = button.parentNode.querySelector("ul");
    changeVisibility(actionsSubmenu);
  });
});
deleteButtons.forEach((button) => {
  button.addEventListener("click", () => {
    deletedRow = button.parentNode;
    const result = confirm("Are you sure you want to delete this row?");
    if (result) {
      deletedRow = button.closest("tr");
      deletedRow.remove();
    } else {
    }
  });
});
sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));
function clearPlaceHolder(inputElement) {
  inputElement.placeholder = "";
}
const addproducttypebtn = document.querySelector("#addproducttype-form");
addproducttypebtn.addEventListener("click", function () {
  document.querySelector(".addproducttype-form").style.display = "flex";
});
const addproducttypeclose = document.querySelector("#addproducttype-close");
addproducttypeclose.addEventListener("click", function () {
  document.querySelector(".addproducttype-form").style.display = "none";
});


