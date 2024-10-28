@extends('layout')

@section('title', 'Danh sách đơn hàng')

@section('content')
<section class="page_banner">
    <div class="layer_img move_anim animated">
        <img src="makeover/images/bg/page_layer.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Đơn hàng</h2>
                <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Bill</p>
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
        <h1>Danh sách đơn hàng của bạn</h1>
        @foreach ($orders as $order)
            <div class="card">
                <div class="card-header">Đơn hàng :{{ $order->madh }}</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" style="border-radius: 10px; overflow: hidden;">
                        <thead class="table" style="background-color: #ffe0e0;">
                            <tr>
                                <th>Mã Đơn Hàng </th>
                                <th>Tên Người Đặt </th>
                                <th>Địa Chỉ </th>
                                <th>Ngày đặt</th>
                                <th>Đơn giá </th>
                                <th>Trạng Thái </th>
                                <th>Thêm </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#{{ $order->madh }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                <td>{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                <td>
                                    @if (array_key_exists($order->status, $statuses))
                                        <p style="color:red">{{ $statuses[$order->status] }}</p>
                                    @else
                                        <p style="color:red">Trạng thái không xác định</p>
                                    @endif
                                    
                                </td>
                                <td>
                                    <a href="{{ route('show', ['id' => $order->id]) }}">
                                        <button type="button" class="btn btn-light">Chi tiết</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
