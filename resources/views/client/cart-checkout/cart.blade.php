@extends('layouts.client')

@section('title', 'Cart')

@section('content')
<section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt">Shopping Cart</h1>
        </div>
      </div>
      <hr class="divider-w pt-20">
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-striped table-border checkout-table">
            <tbody>
              <tr>
                <th class="hidden-xs">Item</th>
                <th>Description</th>
                <th class="hidden-xs">Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
              </tr>
              <tr>
                <td class="hidden-xs"><a href="#"><img src="{{ asset('client/assets/images/shop/product-14.jpg') }}" alt="Accessories Pack"/></a></td>
                <td>
                  <h5 class="product-title font-alt">Accessories Pack</h5>
                </td>
                <td class="hidden-xs">
                  <h5 class="product-title font-alt">£20.00</h5>
                </td>
                <td>
                  <input class="form-control" type="number" name="quantity" value="1" max="50" min="1"/>
                </td>
                <td>
                  <h5 class="product-title font-alt">£20.00</h5>
                </td>
                <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
              </tr>
              <tr>
                <td class="hidden-xs"><a href="#"><img src="{{ asset('client/assets/images/shop/product-13.jpg') }}" alt="Men's Casual Pack"/></a></td>
                <td>
                  <h5 class="product-title font-alt">Men's Casual Pack</h5>
                </td>
                <td class="hidden-xs">
                  <h5 class="product-title font-alt">£20.00</h5>
                </td>
                <td>
                  <input class="form-control" type="number" name="quantity" value="1" max="50" min="1"/>
                </td>
                <td>
                  <h5 class="product-title font-alt">£20.00</h5>
                </td>
                <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <input class="form-control" type="text" id="coupon" name="coupon" placeholder="Coupon code"/>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <button class="btn btn-round btn-g" type="submit">Apply Coupon</button>
          </div>
        </div>
        <div class="col-sm-3 col-sm-offset-3">
          <div class="form-group">
            <button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button>
          </div>
        </div>
      </div>
      <hr class="divider-w">
      <div class="row mt-70">
        <div class="col-sm-5 col-sm-offset-7">
          <div class="shop-Cart-totalbox">
            <h4 class="font-alt">Cart Summary</h4>
            <table class="table table-striped table-border checkout-table">
              <tbody>
                <tr>
                  <th>Cart Subtotal :</th>
                  <td>£40.00</td>
                </tr>
                <tr>
                  <th>Shipping Total :</th>
                  <td>£2.00</td>
                </tr>
                <tr class="shop-Cart-totalprice">
                  <th>Total :</th>
                  <td>£42.00</td>
                </tr>
              </tbody>
            </table>
            <a href="" class="btn btn-lg btn-block btn-round btn-d">Proceed to Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
