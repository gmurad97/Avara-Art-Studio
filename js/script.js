const slider = document.querySelector(".slider");
const slideImages = document.querySelectorAll(".slider__img");
const slideImagesCount = slideImages.length;
const slideInterval = 2000;
let slideIndex = 0;
let autoSlideInterval;

slider.appendChild(slideImages[0].cloneNode(true));

function startAutoSlide() {
  clearInterval(autoSlideInterval);
  autoSlideInterval = setInterval(() => {
    slideIndex = (slideIndex + 1) % slideImagesCount;
    slider.style.transform = `translateY(-${slideIndex * 100}vh)`;
  }, slideInterval);
}

startAutoSlide();