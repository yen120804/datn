@extends('admin.layout')
@section('titlepage','Dơn hàng')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <h2>Danh Sách Sản Phẩm</h2>
            <table class="table table-striped table-bordered" style="border-radius: 10px; overflow: hidden;">
                <thead class="table" style="background-color: #ffe0e0;">
                    <tr>
                        <th>ID</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên người đặt</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Ngày đặt</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($order as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->madh }}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ number_format($item->total, 0, ',', '.') }} VNĐ</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->address }}</td>
                        <td class="action-icons">
                        {{ $item->status }}
                        </td>
                    </tr>
                    @endforeach
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection