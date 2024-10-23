@extends('layout')
@section('titlepage', ' Cart')
@section('content')
<section class="page_banner">
    <div class="layer_img move_anim animated">
        <img src="makeover/images/bg/page_layer.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Cart</h2>
                <p class="breadcrumbs"><a href="index.html">Home</a><span>/</span>Cart</p>
            </div>
            <div class="col-lg-6 animated pnl">
                <div class="page_layer">
                    <img src="makeover/images/bg/banner_layer.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Banner Section -->

<!-- Begin:: Cart Section -->
<section class="cartPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="woocommerce">
                    <!--  -->
                    <form action="#" method="post" class="woocommerce-cart-form">
                        <table class="shop_table">
                            <thead>
                                <tr>
                                    <th class="product-name">Item</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart->items as $item)
                                    <tr class="cart_item">
                                        <td class="product-name" data-title="Product">
                                            <img src="{{ asset('upload/' . $item->product->image) }}" alt="" width="200px">
                                            {{ $item->product->name }}
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>{{ number_format($item->product->price, 0, ',', '.') }} VNĐ</bdi>
                                            </span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="input-group input-group-sm">
                                                    <button class="btn btn-outline-secondary" type="submit" name="decrement"
                                                        value="1">-</button>
                                                    <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                        class="form-control prd_quantity" min="1">
                                                    <button class="btn btn-outline-secondary" type="submit" name="increment"
                                                        value="1">+</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="product-subtotal" data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
                                                    VNĐ</bdi>
                                            </span>
                                        </td>
                                        <td class="product-remove">
                                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </form>
                    <!--  -->
                    <div class="row">
                        <div class="col-7">
                            <button class="btn border btn-primary"><a class="text-light" href="{{ route('home') }}">TIẾP
                                    TỤC MUA HÀNG</a></button>
                        </div>
                        <div class="col-5">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Tạm tính</th>
                                        <th>{{ number_format($cart->items->sum(fn($item) => $item->product->price * $item->quantity), 0, ',', '.') }}
                                            VNĐ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Tổng tiền</th>
                                        <th>{{ number_format($cart->items->sum(fn($item) => $item->product->price * $item->quantity), 0, ',', '.') }}
                                            VNĐ</th>
                                    </tr>
                                </tbody>
                            </table>
                            <form action="{{ route('checkout.create') }}" method="GET">
                                @csrf
                                @foreach ($cart->items as $item)
                                    <input type="hidden" name="product_id[]" value="{{ $item->product->id }}">
                                    <!-- Chỉnh sửa ở đây -->
                                    <input type="hidden" name="name[]" value="{{ $item->product->name }}">
                                    <input type="hidden" name="image[]" value="{{ $item->product->image }}">
                                    <input type="hidden" name="price[]" value="{{ $item->product->price }}">
                                    <input type="hidden" name="quantity[]" value="{{ $item->quantity }}">
                                @endforeach
                                <button type="submit" class="btn btn-danger">THANH TOÁN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection