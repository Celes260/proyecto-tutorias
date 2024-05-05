const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
  document.querySelector("#wrap-side").classList.toggle("expand");
  document.querySelector("#bx-alumn").classList.toggle("contraer-bx-alumnos");
});
