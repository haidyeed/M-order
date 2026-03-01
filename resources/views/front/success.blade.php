@extends('front.layout')

@section('content')
<div class="container text-center mt-5">
    <div class="card p-4 shadow-sm">
        <div class="mb-3">
            <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
        </div>
        <h2 class="text-success">Order Successful</h2>
        <p>Your order has been placed successfully.</p>
        <a href="{{ route('shop') }}" class="btn btn-success mt-3">Continue Shopping</a>
    </div>
</div>
@endsection
