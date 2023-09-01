(function () {
  const customs = document.querySelectorAll(".custom-select-link");
  customs.forEach((c) => {
    c.addEventListener("click", (e) => {
      c.classList.toggle("active");
    });
  });
})();
