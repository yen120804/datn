@extends('layout')
@section('titlepage', ' Register')
@section('content')

<!-- popup sidebar widget -->

<!-- Begin:: Banner Section -->
<section class="page_banner">
    <div class="layer_img move_anim animated">
        <img src="makeover/images/bg/page_layer.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Register</h2>
                <p class="breadcrumbs"><a href="index.html">Home</a><span>/</span>Register</p>
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

<!-- Begin:: Account Section -->
<section class="cartPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="authWrap authLogin">
                    <h2 class="authTitle">Register</h2>
                    <form class="woocommerce-form-login needs-validation" action="{{ route('register') }}" method="POST"
                        novalidate onsubmit="return validateForm()">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input placeholder="User Name" type="text" id="name" name="name" value=""
                                    class="form-control" required>
                                <div class="invalid-feedback">Vui lòng nhập tên người dùng.</div>
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Email của bạn" type="email" id="email" name="email" value=""
                                    class="form-control" required>
                                <div class="invalid-feedback">Vui lòng nhập email hợp lệ.</div>
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Mật khẩu" type="password" id="password" name="password"
                                    class="form-control" required>
                                <div class="invalid-feedback" id="password-error">Vui lòng nhập mật khẩu.</div>
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Nhập lại mật khẩu" type="password" id="password-confirm"
                                    name="password_confirmation" class="form-control" required>
                                <div class="invalid-feedback">Vui lòng nhập lại mật khẩu.</div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit"
                                    class="woocommerce-button button woocommerce-form-login__submit mo_btn" name=""
                                    value="">
                                    <i class="icofont-user-alt-7"></i>Đăng ký
                                </button>
                            </div>
                            <div class="col-lg-6">
                                <p></p>
                                <a href="{{ route('login') }}"> Đăng nhập</a>/<a href=""> Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-lg-3"></div>

        </div>
    </div>
</section>
@endsection