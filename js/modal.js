const modal = document.querySelector(".NewPost");

const button = document.querySelector(".ButtonNewPost");

button.addEventListener("click", () => {
    modal.classList.toggle("visible");
});