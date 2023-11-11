// Fungsi untuk mendapatkan parameter dari URL
function getParameterByName(name) {
  const url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  const regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
  const results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

// Fungsi untuk mendapatkan data produk berdasarkan ID
function getProductData(productId) {
  // Daftar data produk (ganti dengan data produk yang sesuai)
  const products = [
    {
      id: "product-1",
      name: "Product 1",
      price: "IDR 30K",
      description: "Description of Product 1",
      image: "img/products/product1.jpg",
      imagePrev1: "img/products/product1_prev1.jpg",
      imagePrev2: "img/products/product1_prev2.jpg",
      imagePrev3: "img/products/product1_prev3.jpg",
    },
    {
      id: "product-2",
      name: "Product 2",
      price: "IDR 30K",
      description: "Description of Product 2",
      image: "img/products/product2.jpg",
      imagePrev1: "img/products/product2_prev1.jpg",
      imagePrev2: "img/products/product2_prev2.jpg",
      imagePrev3: "img/products/product2_prev3.jpg",
    },
    // Tambahkan data produk lainnya sesuai kebutuhan
  ];

  // Cari data produk berdasarkan ID
  const product = products.find((p) => p.id === productId);
  return product;
}

// Fungsi untuk menampilkan halaman single shop
function showSingleShop() {
  // Mendapatkan ID produk dari parameter URL
  const productId = getParameterByName("id");

  // Cek apakah ID produk valid atau tidak
  if (productId) {
    const productData = getProductData(productId);

    if (productData) {
      document.getElementById("productName").innerText = productData.name;
      document.getElementById("productPrice").innerText = productData.price;
      document.getElementById("productDesc").innerText = productData.description;
      document.getElementById("productImg").src = productData.image;
      document.getElementById("imgPrev-1").src = productData.imagePrev1;
      document.getElementById("imgPrev-2").src = productData.imagePrev2;
      document.getElementById("imgPrev-3").src = productData.imagePrev3;
    } else {
      // Jika ID produk tidak ditemukan, tampilkan halaman 404 (Not Found)
      window.location.href = "error.html";
    }
  } else {
    // Jika tidak ada ID produk, tampilkan halaman 404 (Not Found)
    window.location.href = "error.html";
  }
}

// Panggil fungsi untuk menampilkan halaman single shop
showSingleShop();

window.onload = onPageLoad;
