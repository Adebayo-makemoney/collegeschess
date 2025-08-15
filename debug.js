document.addEventListener("DOMContentLoaded", function () {
  const progressBars = document.querySelectorAll(".color");
  const progressTexts = document.querySelectorAll("#percentage-calc-sub1-amount");

  function animateProgressBars() {
      progressBars.forEach((bar, index) => {
          if (bar.getAttribute("data-animated") === "true") return; // Prevent multiple animations

          const rect = bar.getBoundingClientRect();
          const windowHeight = window.innerHeight;

          if (rect.top < windowHeight && rect.bottom >= 0) {
              let targetPercentage = bar.getAttribute("data-percentage");
              bar.style.width = targetPercentage + "%";
              bar.setAttribute("data-animated", "true"); // Mark as animated

              // Animate text from 0% to targetPercentage
              let counter = 0;
              let interval = setInterval(() => {
                  if (counter >= targetPercentage) {
                      clearInterval(interval);
                  } else {
                      counter++;
                      progressTexts[index].textContent = counter + "%";
                  }
              }, 20);
          }
      });
  }

  // Listen for scrolling
  window.addEventListener("scroll", animateProgressBars);
});



function rex(){
   //document.querySelectorAll('*').forEach(el => el.style.outline = '1px solid red');
}
rex()

