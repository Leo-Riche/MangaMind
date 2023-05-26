const modal = document.querySelector(".NewPost");
const button = document.querySelector(".ButtonNewPost");
const closeButton = document.querySelector(".CloseButton");

button.addEventListener("click", () => {
  modal.classList.toggle("visible");
});

closeButton.addEventListener("click", () => {
  modal.classList.remove("visible");
});
