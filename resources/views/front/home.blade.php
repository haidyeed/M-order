@extends('front.layout')

@section('content')

      <!-- Hero Slider -->
      <section class="hero-wrap text-center relative">
        <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
          <div class="hero-slide overlay" style="background-image:url(front/assets/img/hero/2.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Great Fashion 2017</h1>
                  <h2 class="hero-subtitle lines">New Arrivals Collection</h2>
                  <div class="buttons-holder">
                    <a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide overlay" style="background-image:url(front/assets/img/hero/2.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Exclusive Products</h1>
                  <h2 class="hero-subtitle lines">Get awesome items only in Zenna online shop</h2>
                  <div class="buttons-holder">
                    <a href="#" class="btn btn-lg btn-color"><span>Buy it Now</span></a>
                    <a href="#" class="btn btn-lg btn-transparent"><span>Learn More</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide overlay" style="background-image:url(front/assets/img/hero/2.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Enjoy Online Shopping</h1>
                  <h2 class="hero-subtitle lines">Zenna is perfectly responsive theme</h2>
                  <div class="buttons-holder">
                    <a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end hero slider -->


      <!-- Trendy Products -->
      <section class="section-wrap-sm new-arrivals pb-50">
        <div class="container">

          <div class="row heading-row">
            <div class="col-md-12 text-center">
              <h2 class="heading bottom-line">
                trendy products
              </h2>
            </div>
          </div>

          <div class="row items-grid">              

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="{{ asset('front/assets/img/shop/shop_item_1.jpg')}}" alt="">
                  </a>
                  <div class="product-label">
                    <span class="sale">sale</span>
                  </div>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Drawstring Dress</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>$730.00</span>
                        </del>
                        <ins>
                          <span class="amount">$399.99</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="{{ asset('front/assets/img/shop/shop_item_1.jpg')}}" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Mesh Sandal</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$190.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end row -->
        </div>
      </section> <!-- end trendy products -->

      <!-- Testimonials -->
      <section class="section-wrap relative testimonials bg-parallax overlay" style="background-image:url(img/testimonials/testimonial_bg.jpg);">
        <div class="container relative">

          <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading white bottom-line">Happy Clients</h2>
            </div>
          </div>

          <div id="owl-testimonials" class="owl-carousel owl-theme text-center">

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will work only with this agency.</p>
                <span>Donald Trump / CEO of Trump organization</span>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">This is the excellent theme. It has many useful features that can be use for any kind of business. The support is just amazing and design</p>
                <span>John C. Marshall / Art Director</span>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">Needless to say, beautifully designed theme that serves many purpose. Even more sutomers support is the best! Highly recommend this theme to anyone who enjoys a fine product.</p>
                <span>Matthew Whilson / PR Agent</span>
              </div>
            </div>
          </div>
        </div>

      </section> <!-- end testimonials -->

      <!-- Newsletter -->
      <section class="newsletter" id="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h4>Get the latest updates</h4>
              <form class="relative newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email">
                <input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>       
      </section>

@endsection