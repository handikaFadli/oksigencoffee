@extends('layouts.main')

@section('content')
    <!-- Details Product Section Start -->
    <section class="product-details">
      <h2>Shop</h2>
      <div class="container">
        <div class="product-details-content">
          <div class="product-content-left">
            <div class="product-image">
              <img src="" alt="product 1" id="productImg" />
            </div>
            <div class="product-image-prev">
              <div class="product-image-small">
                <img src="" alt="product 1" id="imgPrev-1" />
              </div>
              <div class="product-image-small">
                <img src="" alt="product 2" id="imgPrev-2" />
              </div>
              <div class="product-image-small">
                <img src="" alt="product 3" id="imgPrev-3" />
              </div>
            </div>
          </div>
          <div class="product-content-right">
            <h1 class="product-name" id="productName"></h1>
            <span class="product-price" id="productPrice"></span>
            <p class="product-description-head">West Java LOA Natural Anaerob</p>
            <ul class="list-1">
              <li>EXPECTING NOTES :</li>
              <li>Starfruit, Sunkist, Dark Choco</li>
            </ul>
            <ul class="list-2">
              <li>Region : Kamojang, Ds. Laksana, Kec. Ibun, Jawa Barat</li>
              <li>Altittude : 1300-1500 mdpl</li>
              <li>Varietas : Mix Varietas</li>
              <li>Proses : Extended Natural</li>
            </ul>
            <p class="product-description" id="productDesc"></p>
            <a href="#" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Details Product Section End -->

    <!-- Related Product Section Start -->
    <section class="related-products">
      <h5 class="sub-judul">Related Products</h5>
      <div class="shop-content">
        <div class="product-box">
          <img src="img/products/product1.jpg" alt="product 1" class="product-img" />
          <h2 class="product-title">Product 1</h2>
          <span class="price">IDR 30K</span>
        </div>
        <div class="product-box">
          <img src="img/products/product2.jpg" alt="product 1" class="product-img" />
          <h2 class="product-title">Product 2</h2>
          <span class="price">IDR 30K</span>
        </div>
        <div class="product-box">
          <img src="img/products/product3.jpg" alt="product 1" class="product-img" />
          <h2 class="product-title">Product 3</h2>
          <span class="price">IDR 30K</span>
        </div>
        <div class="product-box">
          <img src="img/products/product4.jpg" alt="product 1" class="product-img" />
          <h2 class="product-title">Product 4</h2>
          <span class="price">IDR 30K</span>
        </div>
      </div>
    </section>
    <!-- Related Product Section End -->
@endsection