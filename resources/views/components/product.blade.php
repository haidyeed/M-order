<div>
    
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
                <a href="catalogue-grid.html">{{$product->sku}}</a>
                </span>
                <h3 class="product-title">
                <a href="shop-single.html">{{$product->name}}</a>
                </h3>
                <span class="price">
                <ins>
                    <span class="amount">${{$product->price}}</span>
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
</div>