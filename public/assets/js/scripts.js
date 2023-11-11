// navbar usual
// toggle class active
const navbarUsualNav = document.querySelector(".navbar-usual-nav");

// ketika hamburger menu di klik
document.querySelector("#hamburger-usual-menu").onclick = () => {
  navbarUsualNav.classList.toggle("active");
};

// klik di luar sidebar untuk menghilangkan menu
const toggleUsual = document.querySelector("#hamburger-usual-menu");

document.addEventListener("click", function (e) {
  if (!toggleUsual.contains(e.target) && !navbarUsualNav.contains(e.target)) {
    navbarUsualNav.classList.remove("active");
  }
});

// single product
const allHoverImages = document.querySelectorAll(".product-image-prev .product-image-small img");
const imgContainer = document.querySelector(".product-image");

window.addEventListener("DOMContentLoaded", () => {
  allHoverImages[0].parentElement.classList.add("active");
});
allHoverImages.forEach((image) => {
  image.addEventListener("mouseover", () => {
    if (image.src) {
      imgContainer.querySelector("img").src = image.src;
      resetActiveImg();
      image.parentElement.classList.add("active");
    }
  });
});

function resetActiveImg() {
  allHoverImages.forEach((img) => {
    img.parentElement.classList.remove("active");
  });
}
