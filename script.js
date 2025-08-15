window.addEventListener('load', function () {
  setTimeout(() => {
    document.getElementById("preloader").classList.add("loaded");
  }, 4000); // wait 4 seconds after page fully loads
});