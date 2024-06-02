// footer fade script
document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
      var scrollPosition = window.scrollY;
      var windowHeight = this.window.innerHeight;
      var bodyHeight = this.document.body.offsetHeight;
      // detection
      if (scrollPosition + windowHeight >= bodyHeight) {
        this.document.querySelector("footer").classList.add("visible");
      } else {
        this.document.querySelector("footer").classList.remove("visible");
      }
    });
  });
  