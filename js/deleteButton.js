const deleteModal = document.querySelector(".delete");
const buttonDelete = document.querySelectorAll(".deleteButton");
const CancelDelete = document.querySelector(".cancelDelete");

buttonDelete.forEach((btn) => {
  btn.addEventListener("click", () => {
    deleteModal.classList.add("visible");
  });
});

CancelDelete.addEventListener("click", () => {
  deleteModal.classList.remove("visible");
});
