@extends('layout')
@section('titlepage', 'Booking')
@section('content')

<!-- Begin:: Banner Section -->
<section class="page_banner">
    <div class="layer_img move_anim animated">
        <img src="makeover/images/bg/page_layer.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Booking</h2>
                <p class="breadcrumbs"><a href="index.html">Home</a><span>/</span>Booking Page</p>
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

<!-- Begin:: Appointment Section -->
<section class="commonSection apointmentSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment_area">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="appointment_form">
                                <h3>Đặt lịch hẹn</h3>
                                <p>Chúng tôi cam kết mang đến sự chăm sóc tận tình, giúp khách hàng cảm thấy thư giãn và hài lòng trong mỗi dịch vụ.</p>
                                
                                <!-- Form chọn dịch vụ -->
                                <form action="{{ route('select.package') }}" method="POST" class="row">
                                    @csrf
                                    <div class="input-field col-lg-12">
                                        <label for="service">Chọn Dịch Vụ:</label>
                                        <select name="service_id" required>
                                            @foreach($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-field col-lg-12">
                                        <button type="submit" class="mo_btn">Tiếp tục</button>
                                    </div>
                                </form>

                                <!-- Form đặt lịch hẹn -->
                                @if(isset($packages))
                                <form action="{{ route('book.appointment') }}" method="POST" class="row">
                                    @csrf
                                    <input type="hidden" name="service_id" value="{{ $selectedService->id }}"> 
                                    <div class="input-field col-lg-12">
                                        <label for="package">Chọn Gói Dịch Vụ:</label>
                                        <select name="package_id" required>
                                            @foreach($packages as $package)
                                                <option value="{{ $package->id }}">{{ $package->package_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-field col-lg-12">
                                        <input type="text" name="date_time" class="datetime-picker" placeholder="Chọn ngày & giờ (YYYY-MM-DD HH:mm)" required />
                                    </div>
                                    <div class="input-field col-lg-12">
                                        <textarea name="message" placeholder="Lời nhắn của bạn"></textarea>
                                    </div>
                                    <div class="input-field col-lg-12">
                                        <button type="submit" class="mo_btn"><i class="icofont-calendar"></i>Đặt lịch hẹn</button>
                                    </div>
                                </form>
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="icon_box_01">
                                <h4><i class="icofont-clock-time"></i>Giờ làm việc:</h4>
                                <p>Thứ 2 đến Thứ 6: 9:00 sáng — 9:00 tối<br>Thứ 7 và Chủ nhật: 9:00 sáng — 10:00 tối<br>Chủ nhật: 9:00 sáng — 6:00 tối</p>
                            </div>
                            <div class="icon_box_01">
                                <h4><i class="icofont-location-pin"></i>Địa chỉ:</h4>
                                <p>Trường Chinh<br>Quận 12<br>Thành phố Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Appointment Section -->

@endsection