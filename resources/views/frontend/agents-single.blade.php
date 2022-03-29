@extends('frontend.master.master')
@section('title','About')
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
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Pages</li>
                    <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Agent single page</li>
                </ul>
            </div>
        </section>
        <div class="bds-agentsblock py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <!-- block -->
                <div class="row">
                    <div class="col-lg-8 most-recent pr-lg-4">
                        <div class="agent-info">
                            <div class="row">
                                <div class="col-md-5 column mb-5">
                                    <img src="assets/images/team6.jpg" class="img-fluid w-100 radius-image" alt="">
                                </div>
                                <div class="col-md-7 column align-self mt-md-0 mt-4">
                                    <p class="user_position">Selling Agent</p>
                                    <h4 class="user_title agent">
                                        <a href="#url">Laura Antiochus</a>
                                    </h4>
                                    <div class="team-info my-4">
                                        <p>Mobile : <a href="tel:+7-800-999-800">+21-225-999-888</a></p>
                                        <p>Email : <a href="mailto:hello@example.com" class="mail">hello@example.com</a></p>
                                        <p>License : <a href="tel:+7-800-999-800">+21-225-999-888</a></p>
                                    </div>
                                    <ul class="social">
                                        <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5 column mb-5">
                                    <img src="assets/images/team6.jpg" class="img-fluid w-100 radius-image" alt="">
                                </div>
                                <div class="col-md-7 column align-self mt-md-0 mt-4">
                                    <p class="user_position">Selling Agent</p>
                                    <h4 class="user_title agent">
                                        <a href="#url">Laura Antiochus</a>
                                    </h4>
                                    <div class="team-info my-4">
                                        <p>Mobile : <a href="tel:+7-800-999-800">+21-225-999-888</a></p>
                                        <p>Email : <a href="mailto:hello@example.com" class="mail">hello@example.com</a></p>
                                        <p>License : <a href="tel:+7-800-999-800">+21-225-999-888</a></p>
                                    </div>
                                    <ul class="social">
                                        <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5 column mb-5">
                                    <img src="assets/images/team6.jpg" class="img-fluid w-100 radius-image" alt="">
                                </div>
                                <div class="col-md-7 column align-self mt-md-0 mt-4">
                                    <p class="user_position">Selling Agent</p>
                                    <h4 class="user_title agent">
                                        <a href="#url">Laura Antiochus</a>
                                    </h4>
                                    <div class="team-info my-4">
                                        <p>Mobile : <a href="tel:+7-800-999-800">+21-225-999-888</a></p>
                                        <p>Email : <a href="mailto:hello@example.com" class="mail">hello@example.com</a></p>
                                        <p>License : <a href="tel:+7-800-999-800">+21-225-999-888</a></p>
                                    </div>
                                    <ul class="social">
                                        <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="locations-1 mt-5">
                           

                            <!-- pagination -->
                            <div class="pagination-wrapper mt-md-5 mt-4">
                                <ul class="page-pagination">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#url">2</a></li>
                                    <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                                </ul>
                            </div>
                            <!-- //pagination -->
                        </div>
                    </div>
                    <div class="col-lg-4 trending mt-lg-0 mt-5 mb-lg-5">
                        <div class="pos-sticky">

                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h4>Contact form</h4>
                                    <form action="#" method="post" class="agent-form">
                                        <div class="form-grid">
                                            <div class="input-field">
                                                <input type="text" name="bdsName" id="bdsName" placeholder="Your Name" required="">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" name="bdsSender" id="bdsSender" placeholder="Email" required="">
                                            </div>
                                            <div class="input-field">
                                                <input type="phone" name="bdsPhone" id="bdsPhone" placeholder="Phonenumber" required="">
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <textarea name="bdsMessage" id="bdsMessage" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-style w-100">Submit</button>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- //block-->
            </div>
        </div>
       
    
@endsection