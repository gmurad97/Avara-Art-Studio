const slider = document.querySelector(".slider");
const slideImages = document.querySelectorAll(".slider__img");
const slideImagesCount = slideImages.length;
const slideInterval = 3584;
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

const topLeftLink = document.querySelector("#top_left_link");
const topCenterLink = document.querySelector("#top_center_link");
const bottomLeftLink = document.querySelector("#bottom_left_link");
const bottomRightLink = document.querySelector("#bottom_right_link");

const iFrameShowLink = document.querySelector("#iframe_show_link")

function activeLinkClear() {
  if (topLeftLink.classList.contains("menu-item__active")) {
    topLeftLink.classList.remove("menu-item__active")
  }

  if (bottomLeftLink.classList.contains("menu-item__active")) {
    bottomLeftLink.classList.remove("menu-item__active")
  }
  if (bottomRightLink.classList.contains("menu-item__active")) {
    bottomRightLink.classList.remove("menu-item__active")
  }
}

topCenterLink.addEventListener("click", function () {
  activeLinkClear();
  iFrameShowLink.src = "";
});

topLeftLink.addEventListener("click", function () {
  activeLinkClear();
  topLeftLink.classList.toggle("menu-item__active");
  iFrameShowLink.src = "statement.html";
});

bottomLeftLink.addEventListener("click", function () {
  activeLinkClear();
  bottomLeftLink.classList.toggle("menu-item__active");
  iFrameShowLink.src = "gallery.html";
});

bottomRightLink.addEventListener("click", function () {
  activeLinkClear();
  bottomRightLink.classList.toggle("menu-item__active");
  iFrameShowLink.src = "contact.html";
});