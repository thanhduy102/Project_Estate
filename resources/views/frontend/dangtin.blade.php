@extends('frontend.master.master')
@section('title','Dang tin')
@section('content')
    <section class="bds-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
            <div class="container pt-lg-5 py-3">
            </div>
        </div>
    </section>
    <section class="bds-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Đăng tin</li>
                <!-- <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Contact Us</li> -->
            </ul>
        </div>
    </section>
    <!-- contacts -->
    <section class="bds-contact-7 pt-5" id="contact">
        <div class="contacts-9 pt-lg-5 pt-md-4">
            <div class="container">
                <div class="top-map">
                    <div class="row map-content-9">
                        <div class="col-lg-9">
                            <div class="contact-form">
                                <h5 class="mb-2">Đăng tin rao bán, cho thuê nhà đất</h5>
                                <p class="mb-4">Đăng tin</p>
                                <form action="" method="post" class="">
                                    <!-- <div class="form-grid"> -->
                                    <div class="input-field">
                                        <label for="bdsName">Tiêu đề:</label>
                                        <input style="width:92%;" type="text" name="bdsName" id="bdsName" placeholder="Your Name" required="">
                                    </div>

                                    <!-- </div> -->
                                    <div class="input-field mt-4">
                                        <label for="bdsSender">Mô tả:</label>
                                        <input style="width:35%;" type="email" name="bdsSender" id="bdsSender" placeholder="Email" required="">
                                        <label for="bdsSender1" style="margin-left: 100px;">Hình thức:</label>
                                        <input style="width:35%;" type="email" name="bdsSender" id="bdsSender1" placeholder="Email" required="">
                                    </div>
                                    <div class="input-field mt-4">
                                        <label for="bdsSender3">Mô tả:</label>
                                        <input style="width:35%;" type="email" name="bdsSender" id="bdsSender2" placeholder="Email" required="">
                                        <label for="bdsSender3" style="margin-left: 100px;">Hình thức:</label>
                                        <input style="width:35%;" type="email" name="bdsSender" id="bdsSender3" placeholder="Email" required="">
                                    </div>
                                    <div class="input-field mt-4">
                                        <textarea name="bdsMessage" id="bdsMessage" placeholder="Message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 cont-details">
                            <address>
                            <h5 class="text-center">Trang cá nhân</h5>
                            <img src="./assets/images/default-user-avatar-blue.jpg" class="ml-5" alt="">

                            <h5 class="mt-4 pt-lg-3 text-center">Thanh Duy</h5>
                            <p style="font-size: 14px;"><span></span> Tài khoản tin rao: 10,000,000đ</p>
                                

                            <p><span class="fa fa-phone"></span> <strong>Tel :</strong>
                                <a href="tel:+1(12) 366 411 4999"> (+1) 366 411 499</a></p>

                            <p> <span class="fa fa-envelope"></span> <strong>Email :</strong>
                                <a href="mailto:mail@example.com"> mail@example.com</a></p>

                                <p class="title">Quản lý thông tin cá nhân</p>
                                <ul>
                                    <a href=""><li>Thay đổi thông tin cá nhân</li></a>
                                   <a href=""><li>Thay đổi mật khẩu</li></a>
                                   
                                </ul>

                                <p class="title">Quản lý tin đăng</p>
                                <ul>
                                    <a href=""><li>Thay đổi thông tin cá nhân</li></a>
                                   <a href=""><li>Thay đổi mật khẩu</li></a>
                                   
                                </ul>
                        </address>
                            <!-- <div class="title">Quản lý thông tin cá nhân</div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //contacts -->
   @endsection