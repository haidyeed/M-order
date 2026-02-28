@extends('front.layout')

@section('content')
    <!-- Page Title -->
    <section class="page-title text-center bg-light">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Checkout</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{route('home')}}">Home</a>
              </li>
              <li>
                <a href="{{route('shop')}}">Shop</a>
              </li>
              <li class="active">
                Checkout
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

      <!-- Checkout -->
      <section class="section-wrap checkout pb-70">
        <div class="container relative">
          <div class="row">

            <div class="ecommerce col-xs-12">

              <form name="checkout" class="checkout ecommerce-checkout row">

                <div class="col-md-8" id="customer_details">
                  <div>
                    <h2 class="heading uppercase bottom-line full-grey mb-30">billing address</h2>

                    <p class="form-row form-row-wide address-field validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_address_1_field">
                      <label for="billing_address_1">Address
                        <abbr class="required" title="required">*</abbr>
                      </label>
                      <input type="text" class="input-text" placeholder="Street address" value name="billing_address_1" id="billing_address_1">
                    </p>

                    <p class="form-row form-row-wide address-field" id="billing_address_2_field">
                      <input type="text" class="input-text" placeholder="Apartment, suite, unit etc. (optional)" value name="billing_address_2" id="billing_address_2">
                    </p>

                    <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row-wide address-field validate-required">
                      <label for="billing_city">Town / City
                        <abbr class="required" title="required">*</abbr>
                      </label>
                      <input type="text" class="input-text" placeholder="Town / City" value name="billing_city" id="billing_city">
                    </p>

                    <p class="form-row form-row-first address-field validate-state" id="billing_state_field" data-o_class="form-row form-row-first address-field validate-state">
                      <label for="billing_state">County</label>
                      <input type="text" class="input-text" placeholder value name="billing_state" id="billing_state">
                    </p>

                    <p class="form-row form-row-last address-field validate-required validate-postcode ecommerce-invalid ecommerce-invalid-required-field" id="billing_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                      <label for="billing_postcode">Postcode
                        <abbr class="required" title="required">*</abbr>
                      </label>
                      <input type="text" class="input-text" placeholder="Postcode" value name="billing_postcode" id="billing_postcode">
                    </p>

                    <p class="form-row form-row-first validate-required validate-email" id="billing_email_field">
                      <label for="billing_email">Email Address
                        <abbr class="required" title="required">*</abbr>
                      </label>
                      <input type="text" class="input-text" placeholder value name="billing_email" id="billing_email">
                    </p>

                    <p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                      <label for="billing_phone">Phone
                        <abbr class="required" title="required">*</abbr>
                      </label>
                      <input type="text" class="input-text" placeholder value name="billing_phone" id="billing_phone">
                    </p>

                    <div class="clear"></div>

                  </div>


                  <div class="clear"></div>

                  <div>
                    <p class="form-row notes ecommerce-validated" id="order_comments_field">
                      <label for="order_comments">Order Notes</label>
                      <textarea name="order_comments" class="input-text" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="6"></textarea>
                    </p>
                  </div>

                  <div class="clear"></div>

                </div> <!-- end col -->

                <!-- Your Order -->
                <div class="col-md-4">
                  <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                    <h2 class="heading uppercase bottom-line full-grey">Your Order</h2>
                    <table class="table shop_table ecommerce-checkout-review-order-table">
                      <tbody>
                        @forelse($cartItems as $item)
                        <tr>
                          <th>{{$item->product->name}}<span class="count">$ {{$item->price}} x {{$item->quantity}}</span></th>
                          <td>
                            <span class="amount">$ {{$item->price * $item->quantity}}</span>
                          </td>
                        </tr>
                        @empty
                        <tr> no product added !</tr>
                        @endforelse

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
                          <th><strong>Order Total</strong></th>
                          <td>
                            <strong><span class="amount">$ {{$cartSubtotal}}</span></strong>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <div id="payment" class="ecommerce-checkout-payment">
                      <h2 class="heading uppercase bottom-line full-grey">Payment Method</h2>
                      <ul class="payment_methods methods">

                        <li class="payment_method_bacs">
                          <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                          <label for="payment_method_bacs">Cash On Delivery</label>
                          <div class="payment_box payment_method_bacs">
                            <p>Make your payment directly on delivery. Please use your Order ID as the payment reference.</p>
                          </div>
                        </li>
                      </ul>
                      <div class="form-row place-order">
                        <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg btn-dark" id="place_order" value="Place order">
                      </div>
                    </div>
                  </div>
                </div> <!-- end order review -->
              </form>

            </div> <!-- end ecommerce -->

          </div> <!-- end row -->
        </div> <!-- end container -->
      </section> <!-- end checkout -->

@endsection