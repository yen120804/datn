@extends('layout')

@section('title', 'Chi tiết đơn hàng')

@section('content')
<section class="page_banner">
    <div class="layer_img move_anim animated">
        <img src="makeover/images/bg/page_layer.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Chi tiết đơn hàng</h2>
                <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Products</p>
            </div>
            <div class="col-lg-6 animated pnl">
                <div class="page_layer">
                    <img src="makeover/images/bg/banner_layer.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<div class="cartPage">
<div class="container">
    <h1>Chi tiết đơn hàng #{{ $order->madh }}</h1>
 
    <p>Người đặt hàng: {{ $order->name }}</p>
    <p>Email: {{ $order->email }}</p>
    <p>Số điện thoại: {{ $order->phone }}</p>
    <p>Địa chỉ: {{ $order->address }}</p>
    <h2>Danh sách sản phẩm:</h2>
    <table class="table table-striped table-bordered" style="border-radius: 10px; overflow: hidden;">
        <thead class="table" style="background-color: #ffe0e0;">
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <th>Ngày đặt</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($order->orderItems as $item)
        <tr>
            <td></td>
            <td>{{ $item->product->name}}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ number_format($item->price, 0, ',', '.') }} VNĐ</td>
            <td>{{ number_format($item->quantity * $item->price, 0, ',', '.') }} VNĐ</td>
            <td>{{ $item->created_at }}</td>
            
        </tr>
    @endforeach
        </tbody>
    </table>

    <p>Tổng tiền: {{ number_format($order->total, 0, ',', '.') }} VNĐ</p>
</div>
</div>
@endsection
