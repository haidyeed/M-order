@extends('dashboard.layout')

@section('content')
<!-- Start Page title and tab -->
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Order</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">CMJ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a href="#Order-all" class="nav-link active" data-toggle="tab">List View</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Order-all">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover table-vcenter text-nowrap table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client Info</th>
                                    <th>Order Info</th>
                                    <th>total</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Status Progress Bar</th>
                                    <th>Received at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>

                                    <td>
                                        {{$order->id}} 
                                    </td>

                                    <td>
                                        <div class="font-15">
                                            {{ $order->email }}<br>
                                            {{ $order->phone }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="font-15">
                                            @forelse($order->products as $product)
                                            {{ $product->pivot->quantity }} x {{ $product->name }}({{ $product->pivot->price }})<br>
                                            @empty
                                            
                                            @endforelse
                                            <b>subtotal: {{ $order->subtotal }}</b>
        
                                        </div>
                                    </td>

                                    <td><strong>${{ $order->total }}</strong></td>
                                    
                                    <td><div class="font-15">{{ mb_substr($order->notes ,0,20 )}} @if (strlen($order->notes) > 20)...@endif</div></td>

                                    @php
                                    switch($order->status){
                                        case 'pending':
                                            $color = 'yellow';
                                            $progress = 35;
                                            break;
                                        case 'viewed':
                                            $color = 'blue';
                                            $progress = 50;
                                            break;
                                        case 'shipped':
                                            $color = 'green';
                                            $progress = 100;
                                            break;
                                        case 'refunded':
                                            $color = 'red';
                                            $progress = 100;
                                            break;
                                    }
                                    @endphp

                                    <td>

                                        <div class="dropdown">
                                            <button class="dropbtn tag tag-{{ $color }}">{{ $order->status  }}</button>
                                            <div class="dropdown-content">
                                                <a href="{{ route('change-order-status',  ['id' =>  $order->id , 'status' => 'pending']) }}" class="tag-yellow"> Pending</a>
                                                <a href="{{ route('change-order-status',  ['id' =>  $order->id , 'status' => 'viewed']) }}" class="tag-blue"> Viewed</a>
                                                <a href="{{ route('change-order-status',  ['id' =>  $order->id , 'status' => 'shipped']) }}" class="tag-green"> Shipped</a>
                                                <a href="{{ route('change-order-status',  ['id' =>  $order->id , 'status' => 'refunded']) }}" class="tag-red"> Refunded</a>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"><strong> {{ $progress }}%</strong></div>
                                            <div class="float-right"><small class="text-muted">{{ $order->status }}</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-{{ $color }}" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>

                                    <td><strong>{{ $order->created_at }}</strong></td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{$orders->links()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection