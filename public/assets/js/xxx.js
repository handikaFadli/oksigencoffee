// slider image
const slider = document.querySelector(".image-slider");
const arrLeft = document.querySelector(".arrow-left");
const arrRight = document.querySelector(".arrow-right");
const heading = document.querySelector(".caption h1");
const desc = document.querySelector(".caption p");

// data slider image
const images = ["bg_1.jpg", "bg_2.jpg", "bg_3.jpg"];
const headings = ["Hello World 1", "Hello World 2", "Hello World 3"];
const descriptions = ["Lorem ipsum dolor sit amet consectetur.", "Lorem ipsum dolor sit amet consectetur adipisicing.", "Lorem ipsum dolor sit amet."];

// slider ID
let id = 0;

function slide(id) {
  // tambahkan backgorund image
  slider.style.backgroundImage = `url(../img/${images[id]})`;
  // tambahkan animasi fade pada image
  slider.classList.add("image-fade");
  // hapus animasi fade ketika selesai, agar bisa digunakan kembali
  setTimeout(() => {
    slider.classList.remove("image-fade");
  }, 550);
  // ubah heading
  heading.innerText = headings[id];
  // ubah deskripsi
  desc.innerText = descriptions[id];
  // tambahkan fungsi left arrow
}
arrLeft.addEventListener("click", () => {
  id--;
  if (id < 0) {
    id = images.length - 1;
  }
  slide(id);
});
// tambahkan fungsi right arrow
arrRight.addEventListener("click", () => {
  id++;
  if (id > images.length - 1) {
    id = 0;
  }
  slide(id);
});
document.addEventListener("DOMContentLoaded", function () {
  slide(id);
});

// sshop

// products
function showProductDetails(productId) {
  // Get the product details based on the productId (you can fetch from a database or use a predefined object)
  const product = getProductDetails(productId);

  // Update the product details in the detail section
  document.getElementById("productImg").src = product.imgSrc;
  document.getElementById("productName").innerText = product.name;
  document.getElementById("productPrice").innerText = product.price;
  document.getElementById("productDesc").innerText = product.desc;

  // Show the product details section and hide the shop section
  document.querySelector(".shop").style.display = "none";
  document.querySelector(".product-details").style.display = "flex";
}

function hideProductDetails() {
  // Hide the product details section and show the shop section
  document.querySelector(".shop").style.display = "block";
  document.querySelector(".product-details").style.display = "none";
}

// Mock function to get product details
function getProductDetails(productId) {
  // You can replace this with your actual code to fetch the product details from a database
  const products = [
    {
      id: 1,
      imgSrc: "img/products/product1.jpg",
      name: "Product 1",
      price: "IDR 30K",
      desc: "This is the description for Product 1.",
      // Add other product details here
    },
    {
      id: 2,
      imgSrc: "img/products/product2.jpg",
      name: "Product 2",
      price: "IDR 40K",
      desc: "This is the description for Product 1.",
    },
    // Add other products here
  ];

  return products.find((product) => product.id === productId);
}
