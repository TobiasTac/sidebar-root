// sidebar

const sidebar = document.querySelector(".sidebarclose"),
  menuOpen = document.querySelector(".menu-btn"),
  menuOpenNav = document.querySelector(".menu-icon"),
  menuClose = document.querySelector("#close"),
  overlay = document.querySelector(".overlay");

menuOpen.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});
menuOpenNav.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});
menuClose.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});

overlay.addEventListener("click", () => {
  sidebar.classList.remove("open");
});

// darkmode

const chk = document.querySelectorAll(".chk"),
  themeSystem = localStorage.getItem("themeSystem") || "light",
  moon = document.querySelector(".moon"),
  sun = document.querySelector(".sun"),
  moon2 = document.querySelector(".moon2"),
  sun2 = document.querySelector(".sun2");

chk.forEach((mode) => {
  mode.addEventListener("click", () => {
    let oldTheme = localStorage.getItem("themeSystem") || "light";
    let newTheme = oldTheme == "light" ? "dark" : "light";

    localStorage.setItem("themeSystem", newTheme);
    defineCurrentTheme(newTheme);
  });
});

function defineCurrentTheme(theme) {
  document.documentElement.setAttribute("data-theme", theme);
  if (theme == "light") {
    document.body.classList.toggle("dark");
    sun.style.display = "none";
    moon.style.display = "block";
    sun2.style.display = "none";
    moon2.style.display = "block";
  } else {
    document.body.classList.remove("dark");
    sun.style.display = "block";
    moon.style.display = "none";
    sun2.style.display = "block";
    moon2.style.display = "none";
  }
}
defineCurrentTheme(themeSystem);

// modal

// readMore

const openReadModal = document.querySelector(".read"),
  closeReadModal = document.querySelector(".modalReadClose"),
  readModal = document.querySelector(".modalRead");

openReadModal.addEventListener("click", () => {
  readModal.style.display = "flex";
});

closeReadModal.addEventListener("click", () => {
  readModal.style.display = "none";
});
// delete

const openDeleteModal = document.querySelectorAll(".delete.modal"),
  closeDeleteModal = document.querySelector(".modalDeleteClose"),
  deleteModal = document.querySelector(".modalDelete");

openDeleteModal.forEach((deleteOpen) => {
  deleteOpen.addEventListener("click", () => {
    deleteModal.style.display = "flex";
  });
});

closeDeleteModal.addEventListener("click", () => {
  deleteModal.style.display = "none";
});
