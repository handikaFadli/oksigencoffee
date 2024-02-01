@extends('layouts.main')

@section('content')
  <section class="shop-checkout">
    <h2><span>Shop - Checkout</span></h2>
    <form action="{{ route('order_create') }}" class="content" method="POST">
      @csrf
      <div class="col-1">
        <div class="form-container">
          <div class="form-detail">Billing Details</div>
          <div class="form-group">
            <label for="fullname">FULL NAME <span>*</span></label>
            <input type="text" name="name" id="fullname" required>
          </div>
          <div class="form-group">
            <label for="email">EMAIL <span>*</span></label>
            <input type="email" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="address">STREET ADDRESS <span>*</span></label>
            <input type="text" name="address" id="address" required>
          </div>
          <div class="form-group">
            <label for="city">CITY <span>*</span></label>
            <input type="text" name="city" id="city" required>
          </div>
          <div class="form-group">
            <label for="province">PROVINCE <span>*</span></label>
            <input type="text" name="province" id="province" required>
          </div>
          <div class="form-group">
            <label for="postcode">POSTCODE <span>*</span></label>
            <input type="text" name="postcode" id="postcode" required>
          </div>
          <div class="form-group">
            <label for="phone">PHONE <span>*</span></label>
            <input type="number" name="phone" id="phone" required>
          </div>
        </div>
      </div>
      <div class="col-2">
        <span>Order total</span>
        <h1>Rp 60.000</h1>
        <button type="submit" class="btn-shop">Confirm Order</button>
      </div>
    </form>
  </section>
@endsection