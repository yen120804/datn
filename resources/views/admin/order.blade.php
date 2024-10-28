@extends('admin.layout')
@section('titlepage','Đơn hàng')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <h2>Danh Sách Đơn Hàng</h2>

            <!-- Thông báo thành công nếu có -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped table-bordered" style="border-radius: 10px; overflow: hidden;">
                <thead class="table" style="background-color: #ffe0e0;">
                    <tr>
                        <th>ID</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên người đặt</th>
                        <th>Email</th>
                        <th>Thành tiền</th>
                        <th>Ngày đặt</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->madh }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ number_format($item->total, 0, ',', '.') }} VNĐ</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <!-- Form cập nhật trạng thái -->
                            <form action="{{ route('updateStatus', $item->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="form-select" onchange="this.form.submit()">
                                    <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Chờ xác nhận</option>
                                    <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>Đang chuẩn bị hàng</option>
                                    <option value="3" {{ $item->status == 3 ? 'selected' : '' }}>Đang được giao</option>
                                    <option value="4" {{ $item->status == 4 ? 'selected' : '' }}>Đơn hàng đã hoàn thành</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
