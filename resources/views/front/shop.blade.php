@extends('front.layout')

@section('content')

    <!-- Page Title -->
    <section class="page-title text-center bg-light">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">catalog</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="active">
                <a href="{{route('shop')}}">Shop</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <div class="content-wrapper oh">

      <!-- Catalogue -->
      <section class="section-wrap pt-80 pb-40 catalogue">
        <div class="container relative">
          
          <div class="row">
            <div class="col-md-12 catalogue-col right mb-50">
              <div class="shop-catalogue grid-view">

                <div class="row items-grid">

                  @foreach($products as $product)
                    <x-product :product="$product" />
                  @endforeach

                </div> <!-- end row -->
              </div> <!-- end grid mode -->
              
              <!-- Pagination -->
              <div class="pagination-wrap clearfix">
                  <p class="result-count">
                      Showing {{ $products->count() }} of {{ $products->total() }} results
                  </p>
                  {{ $products->links('pagination::bootstrap-4') }}
              </div>

            </div> <!-- end col -->

          </div> <!-- end row -->
        </div> <!-- end container -->
      </section> <!-- end catalog -->


@endsection