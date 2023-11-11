@extends('layouts.main')

@section('content')
    <!-- Shop Section Start -->
    <section class="shop-2">
      <h2>Shop</h2>
      <div class="row">
        <div class="shop-categori">
          <ul>
            <li><a href="#">All Product</a></li>
            <li><a href="#">Commodity Espresso Based</a></li>
            <li><a href="#">Arabika Espresso Based</a></li>
            <li><a href="#">Kopi Susu Blend</a></li>
            <li><a href="#">Arabika Filter Roast</a></li>
          </ul>
        </div>
        <div class="shop-content">
          @foreach ($data as $product)
            @php
              $images = App\models\ProductImage::where('product', $product->slug)->first();
            @endphp
            <a href="/shop/detail/{{ $product->slug }}">
              <div class="product-box">
                <img src="{{ asset('assets/images/products/'.$images->image) }}" alt="product 1" class="product-img" />
                <h2 class="product-title">{{ $product->name }}</h2>
                <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Shop Section End -->
@endsection