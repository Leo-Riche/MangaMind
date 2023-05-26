const menu = document.querySelector(".Menu");

const sidebar = document.querySelector(".Sidebar");

menu.addEventListener("click", () => {
    sidebar.classList.toggle("Slide");
});