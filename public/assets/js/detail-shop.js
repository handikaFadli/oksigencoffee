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
