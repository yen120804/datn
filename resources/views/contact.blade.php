@extends('layout')
@section('titlepage',' Contact')
@section('content')

 <!-- Begin:: Banner Section -->
 <section class="page_banner">
            <div class="layer_img move_anim animated">
                <img src="makeover/images/bg/page_layer.png" alt=""/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <h2 class="banner-title">Liên hệ</h2>
                        <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Liên hệ</p>
                    </div>
                    <div class="col-lg-6 animated pnl">
                        <div class="page_layer">
                            <img src="makeover/images/bg/banner_layer.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Banner Section -->

  <!-- Begin:: Google Maps Section -->
  <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="google_map" id="google_map"></div>
                </div>
            </div>
        </section>
        <!-- End:: Google Maps Section -->

        <!-- Begin:: Contact Form Section -->
        <section class="contactSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="sectionTitle text-center">
                            <img src="makeover/images/icons/2.png" alt="">
                            <h5 class="primaryFont">Contact Us</h5>
                            <h2>Drop Us a <span class="colorPrimary fontWeight400">Line</span></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan lacus vel facilisis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="appointment_area">
                            <div class="row">
                                <div class="col-lg-8 col-md-7">
                                    <div class="appointment_form">
                                        <form action="#" method="post" class="row" id="contact_form">
                                            <div class="input-field col-lg-6">
                                                <input class="required" type="text" name="name" placeholder="Name">
                                            </div>
                                            <div class="input-field col-lg-6">
                                                <input class="required" type="email" name="email" placeholder="E-mail">
                                            </div>
                                            <div class="input-field col-lg-6">
                                                <input type="number" name="con_phone" placeholder="Phone Number">
                                            </div>
                                            <div class="input-field col-lg-6 select-area">
                                                <select class="required" name="selec">
                                                    <option selected="selected">Select Subject</option>
                                                    <option value="Sports Massage">Sports Massage</option>
                                                    <option value="Stone Massage">Stone Massage</option>
                                                    <option value="Body Massage">Body Massage</option>
                                                    <option value="Head Massage">Head Massage</option>
                                                    <option value="Facial Massage">Facial &amp; Massage</option>
                                                </select>
                                            </div>
                                            <div class="input-field col-lg-12">
                                                <textarea class="required" name="con_message" placeholder="Your Message"></textarea>
                                            </div>
                                            <div class="input-field col-lg-12">
                                                <button type="submit" class="mo_btn mob_lg"><i class="icofont-calendar"></i>Send Message</button>
                                                <div class="con_message"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 noPaddingLeft noPaddingRight">
                                    <div class="icon_box_03">
                                        <i class="icofont-location-pin"></i>
                                        <h4>SPA & Beauty Shop</h4>
                                        <p>
                                            52 Corso Magenta 20123 Milano, Italy.<br>
                                            +123 -45678-900<br/>
                                            yourspa@info.com
                                        </p>
                                    </div>
                                    <div class="icon_box_03">
                                        <i class="icofont-clock-time"></i>
                                        <h4>Opening Hours</h4>
                                        <p>
                                            Monday – Friday 09:00 – 23:00<br>
                                            Saturday 09:00 – 22:00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Contact Form Section -->

        @endsection