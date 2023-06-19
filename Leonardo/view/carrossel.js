document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const slides = document.querySelectorAll(".slide");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let currentIndex = 0;
  
    function showSlide(index) {
      carousel.style.transform = `translateX(-${index * 100}%)`;
    }
  
    function goToNextSlide() {
      currentIndex++;
      if (currentIndex >= slides.length) {
        currentIndex = 0;
      }
      showSlide(currentIndex);
    }
  
    function goToPreviousSlide() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = slides.length - 1;
      }
      showSlide(currentIndex);
    }
  
    prevBtn.addEventListener("click", goToPreviousSlide);
    nextBtn.addEventListener("click", goToNextSlide);
  
    showSlide(currentIndex);
  });
  