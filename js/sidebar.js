const menuBurger = document.querySelector(".MenuBurger");

const sidebar = document.querySelector(".Sidebar");

menuBurger.addEventListener("click", () => {
    sidebar.classList.toggle("Slide");
});