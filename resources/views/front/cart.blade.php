@extends('front.layout')

@section('content')
    <!-- Page Title -->
    <section class="page-title text-center bg-light">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Shopping Cart</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{route('home')}}">Home</a>
              </li>
              <li>
                <a href="{{route('home')}}">Shop</a>
              </li>
              <li class="active">
                Cart
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    
      <!-- Cart -->
      <section class="section-wrap shopping-cart">
        <div class="container relative">
          <div class="row">

            <div class="col-md-12">
              <div class="table-wrap mb-30">
                <table class="shop_table cart table">
                  <thead>
                    <tr>
                      <th class="product-name" colspan="2">Product</th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="product-subtotal" colspan="2">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($cartItems as $item)
                    <tr class="cart_item">
                      <td class="product-thumbnail">
                        <a href="#">
                          <img src="{{ asset('front/assets/img/shop/shop_item_1.jpg')}}" alt="">
                        </a>
                      </td>
                      <td class="product-name">
                        <a href="#">{{$item->product->name}}</a>
                      </td>
                      <td class="product-price">
                        <span class="amount">{{$item->price}}</span>
                      </td>
                      <td class="product-quantity">
                        <div class="quantity buttons_added">                  
                            <span class="amount">{{$item->quantity}}</span>
                          </div>
                        </div>
                      </td>
                      <td class="product-subtotal">
                        <span class="amount">{{$item->price * $item->quantity}}</span>
                      </td>
                      <td class="product-remove">
                        <a href="#" class="remove" title="Remove this item">
                          <i class="ui-close"></i>
                        </a>
                      </td>
                    </tr>
                    @empty
                    <p>  no product added yet !</p>
                    @endforelse
                  </tbody>
                </table>
              </div>



              <table class="table shop_table">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Cart Subtotal</th>
                      <td>
                        <span class="amount">$ {{$cartSubtotal}}</span>
                      </td>
                    </tr>
                    <tr class="shipping">
                      <th>Shipping</th>
                      <td>
                        <span>Free Shipping</span>
                      </td>
                    </tr>
                    <tr class="order-total">
                      <th>Order Total</th>
                      <td>
                        <strong><span class="amount">$ {{$cartSubtotal}}</span></strong>
                      </td>
                    </tr>
                  </tbody>
              </table>

                <div class="col-md-7">
                  <div class="actions">
                    <div class="wc-proceed-to-checkout">
                      <a href="{{route('checkout')}}" class="btn btn-lg btn-dark"><span>proceed to checkout</span></a>
                    </div>
                  </div>
                </div>
              </div>

            </div> <!-- end col -->
          </div> <!-- end row -->  
          
        </div> <!-- end container -->
      </section> <!-- end cart -->
@endsection