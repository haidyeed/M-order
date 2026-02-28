@extends('dashboard.layout')

@section('content')
<!-- Start Page title and tab -->
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Product</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">My Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a href="#Product-all" class="nav-link active" data-toggle="tab">List View</a></li>
                <li class="nav-item"><a href="#Product-grid" class="nav-link" data-toggle="tab">Grid View</a></li>
                <li class="nav-item"><i class="fa fa-plus"></i><a href="#Product-add" class="nav-link" data-toggle="tab">Add New</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Product-all">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover table-vcenter text-nowrap table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Order</th>
                                    <th>Creating Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        {{$product->id}} 
                                    </td>
                                    <td><div class="font-15">{{ $product->name }}</div></td>
                                    <td><div class="font-15">{{ $product->sku }}</div></td>
                                    <td class="w60">
                                        <img loading="lazy" class="avatar" src="{{asset('front/assets/img/logo_dark.png')}}" alt="{{ $product->name }}">
                                    </td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->order }}</td>
                                    <td><strong>{{ $product->created_at }}</strong></td>
                                    <td><span class="tag {{ $product->status==1? 'tag-success':'tag-warning'}} change-status" id="{{ $product->id }}" data-route="{{ route('products.changeStatus', $product->id) }}"> @if($product->status==1) Active @else Disabled @endif </span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-route="{{ route('products.destroy', $product->id) }}"</button><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Product-grid">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body text-center ribbon">
                                <div class="ribbon-box {{ $product->status==1?'green':'orange' }}"><i class="fa fa-star"></i></div>

                                <img loading="lazy" class="card-profile-img" src="{{asset('front/assets/img/logo_dark.png')}}" alt="{{ $product->name }}">
                                <h5 class="mb-0">{{ $product->name }}</h5>
                                <br>
                                <div>SKU: {{ $product->sku }}</div>
                                <div>${{ $product->price }}</div>
                                <br>
                                <div>Stock: {{ $product->stock }}</div>
                                <div>created at: {{ $product->created_at }}</div>
                                <p>order: {{ $product->order }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{$products->links()}}
                </div>
            </div>
            <div class="tab-pane" id="Product-add">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                                <div class="card-options ">
                                    <div class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></div>
                                    <div class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></div>
                                </div>
                            </div>

                            @include('dashboard.products.create-form')

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection