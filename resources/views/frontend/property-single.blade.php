@extends('frontend.master.master')
@section('title','Property Single')
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
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Chi tiết tin đăng</li>
                <!-- <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> property single</li> -->
            </ul>
        </div>
    </section>
    <!--/blog-post-->
    <section class="bds-blog post-content py-5">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="inner mb-4">
                <ul class="blog-single-author-date align-items-center">
                    <!-- <li>
                        <div class="listing-category"><span>Buy</span><span>Rent</span></div>
                    </li> -->
                    <li><span class="fa fa-clock-o"></span> 5 months ago</li>
                    <li><span class="fa fa-eye"></span> 250 views</li>
                </ul>
            </div>
            <div class="post-content">
                <h2 class="title-single">Tiêu đề</h2>
            </div>
            <div class="blo-singl mb-4">
                <ul class="blog-single-author-date align-items-center">
                    <li>
                        <p>Địa chỉ</p>
                    </li>
                    <li><span class="fa fa-bed"></span> 3 Beds</li>
                    <li><span class="fa fa-bath"></span> 4 Baths</li>
                    <li><span class="fa fa-share-square-o"></span> 1258 sqrft</li>
                </ul>
                <ul class="share-post">
                    <a href="#url" class="cost-estate m-o">Giá: 1111</a>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-8 bds-news">
                    <div class="blog-single-post">
                        <div class="single-post-image mb-5">
                            <div class="owl-blog owl-carousel owl-theme">
                                <div class="item">
                                    <div class="card">
                                        <img src="assets/images/p1.jpg" class="img-fluid radius-image" alt="image">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img src="assets/images/p2.jpg" class="img-fluid radius-image" alt="image">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img src="assets/images/p3.jpg" class="img-fluid radius-image" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post-content">
                            <h3 class="post-content-title mb-3">Mô tả</h3>
                            <p class="mb-4">
                                Lorem model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like. </p>
                            <p class="mb-4">When you decide to put your business online it is a little bet tricky step for novice computer users because they want to keep data safe & secure. This problem developed from companies which did not take security seriously.
                                Lorem ipsum dolor sit amet elit. </p>
                            <div class="single-bg-white">
                                <h3 class="post-content-title mb-4">Chi tiết</h3>
                                <ul class="details-list">
                                    <li><strong>Property id :</strong> PRPT12345 </li>
                                    <li><strong>Property size :</strong> 1200sqft </li>
                                    <li><strong>Rooms :</strong> 2 </li>
                                    <li><strong>Bedrooms :</strong> 5 </li>
                                    <li><strong>Bathrooms :</strong> 2 </li>
                                    <li><strong>Exterior material :</strong> Brick </li>
                                    <li><strong>Structure type :</strong> Wood </li>
                                    <li><strong>Garage size :</strong> 15 cars </li>
                                    <li><strong>Garages :</strong> 15 </li>
                                    <li><strong>Property Price :</strong> $ 750 </li>
                                    <li><strong>Built Year :</strong> 2018 </li>
                                    <li><strong>Avaiable from :</strong> Aug 2019 </li>
                                </ul>
                            </div>
                            <div class="single-bg-white">
                                <h3 class="post-content-title mb-4">Nội thất</h3>
                                <ul class="details-list">
                                    <li><strong>Air Conditioning </strong></li>
                                    <li><strong>Buil-In Wardrobes </strong> </li>
                                    <li><strong>Dishwasher</strong> </li>
                                    <li><strong>Floor Coverings </strong> </li>
                                    <li><strong>Medical / Clinic </strong> </li>
                                    <li><strong>Fencing</strong> </li>
                                    <li><strong>Internet and wifi </strong> </li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-bg-white">
                            <h3 class="post-content-title mb-4">Khu vực</h3>
                            <div class="agent-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                                    frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>

                        <!-- <div class="single-bg-white mb-0">
                            <h3 class="post-content-title mb-4">Video</h3>
                            <div class="post-content">
                                <iframe src="https://www.youtube.com/embed/jqP3m3ElcxA" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                    <aside class="sidebar">

                        <!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Liên hệ</h4>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/l5.jpg" class="radius-image" alt="">
                                </figure>
                                <div class="text mb-0"><a href="#blog-single">Thanh Duy
                                </a>
                                    <div class="post-info">0123 456 789</div>
                                    <div class="post-info">thanhduy@mail.com</div>
                                </div>
                            </article>
                            <!-- <button type="submit" class="btn btn-primary btn-style w-100">Request details</button> -->
                        </div>


                        <!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Tin hot</h4>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt="">
                                </figure>
                                <div class="text"><a href="#blog-single">Tiêu đề
                                </a>
                                    <div class="post-info">Sep 09, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt="">
                                </figure>
                                <div class="text"><a href="#blog-single">Tiêu đề
                                </a>
                                    <div class="post-info">Sep 09, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt="">
                                </figure>
                                <div class="text"><a href="#blog-single">Tiêu đề
                                </a>
                                    <div class="post-info">Sep 09, 2020</div>
                                </div>
                            </article>

                        </div>

                        <!-- sidebar sticky -->
                        <div class="sidebar-sticky">
                            <div class="sidebar-sticky-fix">
                                <!-- Tags Widget-->
                                <!-- <div class="sidebar-widget popular-tags">
                                    <div class="sidebar-title">
                                        <h4>Tags</h4>
                                    </div>
                                    <a href="#url">Listing</a>
                                    <a href="#url">Property</a>
                                    <a href="#url">Rent</a>
                                    <a href="#url">Sale</a>
                                    <a href="#url">Estate</a>
                                    <a href="#url">Villa</a>
                                    <a href="#url">Home</a>
                                </div> -->

                            </div>
                        </div>
                        <!-- //sidebar sticky -->

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--//blog-posts-->
  @endsection