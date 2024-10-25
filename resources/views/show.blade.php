@extends('layout')

@section('title', 'Chi tiết đơn hàng')

@section('content')
<div class="container">
    <h1>Chi tiết đơn hàng #{{ $order->madh }}</h1>
 
    <p>Người đặt hàng: {{ $order->name }}</p>
    <p>Email: {{ $order->email }}</p>
    <p>Số điện thoại: {{ $order->phone }}</p>
    <p>Địa chỉ: {{ $order->address }}</p>
    <h2>Danh sách sản phẩm:</h2>
    <table class="table">
        <thead>
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
@endsection
