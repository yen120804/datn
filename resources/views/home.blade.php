@extends('layout')
@section('titlepage',' Home')
@section('content')

    <!-- popup sidebar widget -->

    <!-- Begin:: Slider Section -->
    <section class="slider_01">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <div class="tp-caption" data-x="['left', 'left', 'center', 'center']" data-hoffset="['0']"
                            data-y="['middle']" data-voffset="['-180','-180','-170','-150']" data-width="['100%']"
                            data-height="['auto']" data-whitesapce="['normal']" data-type="image"
                            data-frames='[{"delay":1200,"speed":600,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left', 'left', 'center', 'center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[80,50,0,25]"></div>
                        <div class="tp-caption headFont ws_nowrap" data-x="['left', 'left', 'center', 'center']"
                            data-hoffset="['-3', '-3', '0', '0']" data-y="['middle']"
                            data-voffset="['-40','-40','-45','-25']" data-fontsize="['60','60','60','45']"
                            data-fontweight="900" data-lineheight="['70', '70', '70', '55']"
                            data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal"
                            data-color="['#252525']" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left', 'left', 'center', 'center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,25,25]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[80,50,25,25]">Chăm sóc <span class="colorPrimary fontWeight400">sức khỏe
                                và làm đẹp</span>
                        </div>
                        <div class="tp-caption ws_nowrap" data-x="['left', 'left', 'center', 'center']"
                            data-hoffset="['0']" data-y="['middle']" data-voffset="['95','95','75','70']"
                            data-fontsize="['14','14','14','14']" data-fontweight="['400', '400', '400', '400']"
                            data-lineheight="['26']" data-width="['570','400','100%','100%']" data-height="['auto']"
                            data-whitesapce="['normal']" data-color="['#252525']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left', 'left', 'center', 'center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,30]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[80,50,0,30]">Tại đây chúng tôi cung
                            cấp một loạt các dịch vụ chuyên nghiệp nhằm mang lại sự thư giãn, phục hồi cho cơ thể và
                            tinh thần của bạn
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['left', 'left', 'center', 'center']"
                            data-hoffset="['0']" data-y="['middle']" data-voffset="['160','160','150','120']"
                            data-fontsize="['14'" data-fontweight="400" data-lineheight=".8" data-width="['100%']"
                            data-height="['auto']" data-whitesapce="['normal']" data-color="['#01d85f']"
                            data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1700,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left', 'left', 'center', 'center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[80,50,0,0]">
                            <a href="booking.html" class="mo_btn mob_lg"><i class="icofont-cart-alt"></i>Đặt lịch
                                hẹn</a>
                        </div>
                        <div class="tp-caption d-md-none d-sm-none d-xs-none d-lg-block"
                            data-frames='[{"delay":2000,"speed":700,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="text" data-x="right" data-y="top"
                            data-hoffset="['-250','-150','0','0']" data-voffset="['-170','-146','0','0']"
                            data-width="['auto']" data-height="['auto']" data-visibility="['on', 'on', 'off', 'off']">
                            <div class="round_anim"></div>
                        </div>
                        <div class="tp-caption d-md-none d-sm-none d-xs-none d-lg-block cusLayer"
                            data-frames='[{"delay":2400,"speed":700,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom"
                            data-hoffset="['-320','-320','0','0']" data-voffset="['-170','-146','0','0']"
                            data-width="['auto']" data-height="['auto']" data-visibility="['on', 'on', 'off', 'off']">
                            <img src="makeover/images/vvvv.png" alt="App Store">
                        </div>
                        <div class="tp-caption d-md-none d-sm-none d-xs-none"
                            data-frames='[{"delay":2800,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-type="image" data-x="left" data-y="bottom" data-hoffset="['-320','-320','0','0']"
                            data-voffset="['-170','-146','0','0']" data-width="['auto']" data-height="['auto']"
                            data-visibility="['on', 'off', 'off', 'off']"><img src="makeover/images/bg/page_layer.png"
                                alt="App Store"></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End:: Slider Section -->

    <!-- Begin:: Welcome Section -->
    <section class="commonSection welcomeSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/1.png" alt="" />
                        <h5 class="primaryFont">Xin chào</h5>
                        <h2>Trải nghiệm những dịch vụ <span class="colorPrimary fontWeight400">tốt nhất</span></h2>
                        <br>
                        Chúng tôi hân hạnh chào đón bạn đến với trung tâm chăm sóc sức khỏe & làm Đẹp! </br> Tại đây,
                        bạn
                        sẽ được trải nghiệm những liệu trình chăm sóc sức khỏe và làm đẹp chuyên sâu, giúp bạn thư
                        giãn và nạp lại năng lượng. Hãy để chúng tôi chăm sóc bạn và mang lại sự tươi mới cho cuộc
                        sống hàng ngày của bạn!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="actionBox">
                        <h3>Liệu trình chăm sóc da
                        </h3>
                        <p>
                            Liệu trình tự nhiên giúp tái tạo và nuôi dưỡng làn da <br> từ sâu bên trong.
                        </p>

                        <a href="shop.html" class="mo_btn"><i class="icofont-cart-alt"></i>Xem sản phẩm</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="actionBox abBg2">
                        <h3>Dịch vụ gội đầu
                        </h3>
                        <p>
                            Làm sạch da đầu, giảm căng thẳng và <br />nuôi dưỡng tóc mềm mượt tự nhiên
                        </p>
                        <a href="shop2.html" class="mo_btn"><i class="icofont-cart-alt"></i>Xem sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Welcome Section -->

    <!-- Begin:: About Section -->
    <section class="commonSection aboutSection">
        <div class="layer_img move_anim">
            <img src="makeover/images/bg/7.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 noPaddingRight clearfix">
                    <div class="aboutImg float-right clearfix">
                        <div class="shape1">
                            <img src="makeover/images/bg/4.png" alt="" />
                        </div>
                        <div class="shape2">
                            <img src="makeover/images/bg/5.png" alt="" />
                        </div>
                        <div class="shape3 move_anim_two">
                            <img src="makeover/images/4.png" alt="" />
                        </div>
                        <div class="abImg float-right">
                            <img src="makeover/images/a-03.png" alt="" />
                        </div>
                        <div class="expCounter">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="abContent">
                        <!-- <h3>về chúng tôi</h3> -->
                        <h2>
                            Dịch vụ <span class="fontWeight400 colorPrimary">làm nail</span>
                        </h2>
                        <p class="leads">
                            Chăm sóc móng tay chuyên nghiệp, giúp móng chắc khỏe, sáng bóng và bền đẹp.

                        </p>
                        <p>
                            Chúng tôi cung cấp dịch vụ làm nail đa dạng với các kỹ thuật hiện đại, giúp bạn có được bộ
                            móng hoàn hảo, từ cắt tỉa, dưỡng móng cho đến trang trí và sơn gel chuyên nghiệp. Hãy tận
                            hưởng dịch vụ chăm sóc đặc biệt, mang đến sự thư giãn và phong cách cá nhân độc đáo cho bạn.
                        </p>
                        <a href="about.html" class="mo_btn mob_lg mob_shadow"><i
                                class="icofont-long-arrow-right"></i>Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: About Section -->

    <!-- Begin:: Service Section -->
    <div class="commonSection serviceSection hasBeforeDecoration hasAfterDecoration">
        <div class="layer_img l_01 move_anim">
            <img src="makeover/images/bg/12.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="" />
                        <h5 class="primaryFont">Chúng tôi làm gì</h5>
                        <h2>Dịch vụ <span class="colorPrimary fontWeight400">của chúng tôi</span></h2>
                        <p>
                            Chúng tôi cung cấp các giải pháp chăm sóc sức khỏe và làm đẹp toàn diện, mang đến cho khách
                            hàng sự thư giãn, trẻ trung và tự tin trong cuộc sống hàng ngày. Với phương châm "Khỏe đẹp
                            từ bên trong", chúng tôi không chỉ tập trung vào vẻ ngoài mà còn chú trọng đến sức khỏe tổng
                            thể của bạn.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="serviceItem_01 text-center">
                        <div class="ib_box">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1257 2920 c-50 -9 -109 -25 -130 -35 -20 -11 -95 -25 -165 -31 -523
                                   -45 -900 -630 -953 -1477 -43 -680 253 -1056 996 -1266 720 -204 1195 -98
                                   1691 377 805 772 854 1763 105 2149 -412 213 -1153 349 -1544 283z" />
                                </g>
                            </svg>
                            <div class="bg_icon"><i class="mkov-stone"></i></div>
                            <i class="mkov-stone"></i>
                        </div>
                        <h3><a href="single-service.html"> Chăm sóc da chuyên sâu</a></h3>
                        <p>
                            Sử dụng công nghệ hiện đại và sản phẩm cao cấp để tái tạo và trẻ hóa làn da
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="serviceItem_01 sIlg text-center">
                        <div class="ib_box">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525">
                                    <path d="M1572 2919 c-708 -80 -1193 -291 -1416 -614 -534 -777 474 -2293
                                           1524 -2292 887 1 1576 436 1644 1037 101 889 -356 1757 -949 1804 -69 5 -160
                                           22 -202 38 -98 37 -396 51 -601 27z" />
                                </g>
                            </svg>
                            <div class="bg_icon"><i class="mkov-candle"></i></div>
                            <i class="mkov-candle"></i>
                        </div>
                        <h3><a href="single-service.html"> Gội đầu dưỡng sinh
                            </a></h3>
                        <p>
                            Giúp thư giãn và giảm căng thẳng, mệt mỏi. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="serviceItem_01 sIlg text-center">
                        <div class="ib_box">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="175.000000pt"
                                height="152.000000pt" viewBox="0 0 175.000000 152.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,152.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1115 2973 c-533 -182 -1118 -1037 -1091 -1597 31 -647 948 -1379
                                   1694 -1351 1127 43 2049 1058 1675 1845 -197 414 -1177 1090 -1581 1090 -27 0
                                   -102 14 -165 30 -170 44 -371 38 -532 -17z" />
                                </g>
                            </svg>
                            <div class="bg_icon"><i class="mkov-morter"></i></div>
                            <i class="mkov-morter"></i>
                        </div>
                        <h3><a href="single-service.html">Nail
                            </a></h3>
                        <p> Chăm sóc và bảo vệ móng toàn diện, từ cắt tỉa đến dưỡng chất phục hồi móng hư tổn. </p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="serviceItem_01 text-center">
                        <div class="ib_box">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1560 2919 c-1285 -156 -1790 -718 -1459 -1625 305 -836 1087 -1375
                                   1835 -1266 826 122 1314 467 1386 982 122 875 -341 1790 -933 1843 -65 6 -154
                                   24 -198 40 -97 37 -431 51 -631 26z" />
                                </g>
                            </svg>
                            <div class="bg_icon"><i class="mkov-bottle"></i></div>
                            <i class="mkov-bottle"></i>
                        </div>
                        <h3><a href="single-service.html">Massage thư giãn
                            </a></h3>
                        <p>
                            Giúp giảm căng thẳng và mang lại sự cân bằng cho cơ thể và tâm trí </p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="layer_img l_02 move_anim_two">
            <img src="makeover/images/bg/11.png" alt="" />
        </div>
    </div>
    <!-- End:: Service Section -->

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
                                    <p>Chúng tôi cam kết mang đến sự chăm sóc tận tình, giúp khách hàng cảm thấy thư
                                        giãn và hài lòng trong mỗi dịch vụ.</p>
                                    <form action="#" method="post" class="row">
                                        <div class="input-field col-lg-6">
                                            <input type="text" name="name" placeholder="Tên
                                            " />
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input type="email" name="email" placeholder="E-mail
                                            " />
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input type="number" name="phone" placeholder="Số điện thoại" />
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <select name="select_subject">
                                                <option selected="selected">Chọn chủ đề</option>
                                                <option>Chăm sóc da chuyên sâu</option>
                                                <option>Gội đầu dưỡng sinh</option>
                                                <option>Nail</option>

                                            </select>
                                        </div>
                                        <div class="input-field col-lg-12">
                                            <input type="text" name="date_time" class="datetime-picker"
                                                placeholder="Chọn ngày & giờ" />
                                            <i class="icofont-ui-calendar"></i>
                                        </div>
                                        <div class="input-field col-lg-12">
                                            <textarea name="message" placeholder="Lời nhắn của bạn"></textarea>
                                        </div>
                                        <div class="input-field col-lg-12">
                                            <button type="submit" class="mo_btn"><i class="icofont-calendar"></i>Đặt
                                                lịch hẹn</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="icon_box_01">
                                    <h4><i class="icofont-clock-time"></i>Giờ làm việc:

                                    </h4>
                                    <p>
                                        Thứ 2 đến Thứ 6: 9:00 sáng — 9:00 tối<br>
                                        Thứ 7 và Chủ nhật: 9:00 sáng — 10:00 tối<br>
                                        Chủ nhật: 9:00 sáng — 6:00 tối
                                    </p>
                                </div>
                                <div class="icon_box_01">
                                    <h4><i class="icofont-location-pin"></i>Địa chỉ:</h4>
                                    <p>
                                        Trường Chinh<br>
                                        Quận 12<br>
                                        Thành phố Hồ Chí Minh
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Appointment Section -->

    <!-- Begin:: Package Section -->
    <section class="commonSection pricingSection hasBeforeDecoration hasAfterDecoration">
        <div class="layer_img l_03 move_anim">
            <img src="makeover/images/bg/14.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sectionTitle text-left">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">Gợi ý</h5>
                        <h2>Giá <span class="colorPrimary fontWeight400">dịch vụ</span></h2>
                        <p>
                            Chúng tôi cung cấp các dịch vụ chất lượng cao với mức giá hợp lý, nhằm đáp ứng nhu cầu của
                            khách hàng. Đội ngũ chuyên gia của chúng tôi luôn sẵn sàng hỗ trợ và tư vấn để đảm bảo bạn
                            nhận được dịch vụ tốt nhất. Hãy để chúng tôi đồng hành cùng bạn trong mọi bước đi!

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="package_item pl_area">
                        <img src="makeover/images/76x74 (2).png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Nail Art Chuyên Nghiệp
                            </a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $50
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/son gel.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Sơn Gel Cao Cấp
                            </a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $61
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/cham soc mong.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Chăm Sóc Móng Chuyên Sâu
                            </a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $47
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/Goi dau thao duoc.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Gội Đầu Thảo Dược
                            </a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $38
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package_item pr_area">
                        <img src="makeover/images/goi dau tinh chat.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Gội Đầu Tinh Chất Thiên Nhiên
                            </a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $55
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/cham soc da mat chuyen sau.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Chăm Sóc Da Mặt Chuyên Sâu
                            </a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $70
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/tai tao da mat.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Tái Tạo Da Bằng Công Nghệ Cao</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $80
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/lieu trinh peel da.png" alt="" />
                        <h5>
                            <a href="javascript:void(0);">Liệu trình peel da</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $60
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Package Section -->

    <!-- Begin:: Client Section -->
    <!-- <section class="clientSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clientSlider owl-carousel">
                        <a href="javascript:void(0);"><img class="hover" src="makeover/images/client_logo/1.png" alt="" /><img
                                class="normal" src="makeover/images/client_logo/1.png" alt="" /></a>
                        <a href="javascript:void(0);"><img class="hover" src="makeover/images/client_logo/2.png" alt="" /><img
                                class="normal" src="makeover/images/client_logo/2.png" alt="" /></a>
                        <a href="javascript:void(0);"><img class="hover" src="makeover/images/client_logo/3.png" alt="" /><img
                                class="normal" src="makeover/images/client_logo/3.png" alt="" /></a>
                        <a href="javascript:void(0);"><img class="hover" src="makeover/images/client_logo/4.png" alt="" /><img
                                class="normal" src="makeover/images/client_logo/4.png" alt="" /></a>
                        <a href="javascript:void(0);"><img class="hover" src="makeover/images/client_logo/5.png" alt="" /><img
                                class="normal" src="makeover/images/client_logo/5.png" alt="" /></a>
                        <a href="javascript:void(0);"><img class="hover" src="makeover/images/client_logo/1.png" alt="" /><img
                                class="normal" src="makeover/images/client_logo/1.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End:: Client Section -->

    <!-- Begin:: Testimonial Section -->
    <section class="commonSection testimonialSlider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimoanial_area">
                        <div class="tw_testiSlider">
                            <div class="item">
                                <div class="quote">
                                    <img src="makeover/images/home_01/quote.png" alt="" />
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <p class="quatation">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.<br>
                                    Quis ipsum suspendisse ultrices
                                </p>
                                <div class="test_author">
                                    <span>Design Grue</span>
                                    <p>California, USA</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <img src="makeover/images/home_01/quote.png" alt="" />
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <p class="quatation">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.<br>
                                    Quis ipsum suspendisse ultrices
                                </p>
                                <div class="test_author">
                                    <span>William Smith</span>
                                    <p>New York, USA</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <img src="makeover/images/home_01/quote.png" alt="" />
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <p class="quatation">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.<br>
                                    Quis ipsum suspendisse ultrices
                                </p>
                                <div class="test_author">
                                    <span>Mark Smith</span>
                                    <p>London, UK</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <img src="makeover/images/home_01/quote.png" alt="" />
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <p class="quatation">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.<br>
                                    Quis ipsum suspendisse ultrices
                                </p>
                                <div class="test_author">
                                    <span>Design Grue</span>
                                    <p>California, USA</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <img src="makeover/images/home_01/quote.png" alt="" />
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <p class="quatation">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.<br>
                                    Quis ipsum suspendisse ultrices
                                </p>
                                <div class="test_author">
                                    <span>William Smith</span>
                                    <p>New York, USA</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <img src="makeover/images/home_01/quote.png" alt="" />
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <p class="quatation">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.<br>
                                    Quis ipsum suspendisse ultrices
                                </p>
                                <div class="test_author">
                                    <span>Mark Smith</span>
                                    <p>London, UK</p>
                                </div>
                            </div>
                        </div>
                        <div class="testiNav">
                            <div class="navitem">
                                <img src="makeover/images/90x90 (1).png" alt="" />
                            </div>
                            <div class="navitem">
                                <img src="makeover/images/90x90 (2).png" alt="" />
                            </div>
                            <div class="navitem">
                                <img src="makeover/images/90x90 (3).png" alt="" />
                            </div>
                            <div class="navitem">
                                <img src="makeover/images/90x90 (1).png" alt="" />
                            </div>
                            <div class="navitem">
                                <img src="makeover/images/90x90 (2).png" alt="" />
                            </div>
                            <div class="navitem">
                                <img src="makeover/images/90x90 (3).png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Testimonial Section -->

    <!-- Begin:: Blog Section -->
    <section class="commonSection blogSection">
        <div class="layer_img l_04 move_anim">
            <img src="makeover/images/bg/16.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">News About Our Company</h5>
                        <h2>News <span class="colorPrimary fontWeight400">Feed</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_item_01">
                        <img src="makeover/images/blog/1.jpg" alt="" />
                        <div class="bp_content">
                            <span>February 18, 2017</span>
                            <h3><a href="single-blog.html">Spring is in the Air and and So Our These Amazing Spa
                                    Offers</a></h3>
                            <a class="lr_more" href="single-blog.html">
                                Learn More
                                <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path
                                        d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_item_01">
                        <img src="makeover/images/blog/2.jpg" alt="" />
                        <div class="bp_content">
                            <span>February 18, 2017</span>
                            <h3><a href="single-blog.html">We giving Amazing special spa and message service for
                                    vip.</a></h3>
                            <a class="lr_more" href="single-blog.html">
                                Learn More
                                <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path
                                        d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_item_01">
                        <img src="makeover/images/blog/3.jpg" alt="" />
                        <div class="bp_content">
                            <span>February 18, 2017</span>
                            <h3><a href="single-blog.html">We also offer outside special spa and message catering;
                                    take-away</a></h3>
                            <a class="lr_more" href="single-blog.html">
                                Learn More
                                <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path
                                        d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Blog Section -->

    <!-- Begin:: Instagram Section -->
    <div class="my_instagram">
        <a href="makeover/images/instagram/1.jpg" data-rel="lightcase:myCollection:slideshow" class="popup_img"><img
                src="makeover/images/instagram/1.jpg" alt="instagram"></a>
        <a href="makeover/images/instagram/2.jpg" data-rel="lightcase:myCollection:slideshow" class="popup_img"><img
                src="makeover/images/instagram/2.jpg" alt="instagram"></a>
        <a href="makeover/images/instagram/3.jpg" data-rel="lightcase:myCollection:slideshow" class="popup_img"><img
                src="makeover/images/instagram/3.jpg" alt="instagram"></a>
        <a href="makeover/images/instagram/4.jpg" data-rel="lightcase:myCollection:slideshow" class="popup_img"><img
                src="makeover/images/instagram/4.jpg" alt="instagram"></a>
        <a href="makeover/images/instagram/5.jpg" data-rel="lightcase:myCollection:slideshow" class="popup_img"><img
                src="makeover/images/instagram/5.jpg" alt="instagram"></a>
        <a href="makeover/images/instagram/6.jpg" data-rel="lightcase:myCollection:slideshow" class="popup_img"><img
                src="makeover/images/instagram/6.jpg" alt="instagram"></a>
    </div>
    <!-- End:: Instagram Section -->

@endsection