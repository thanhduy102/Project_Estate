@extends('frontend.master.master')
@section('title','404')
@section('content')

        <section class="w3l-about-breadcrumb">
            <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
                <div class="container pt-lg-5 py-3">
                </div>
            </div>
        </section>
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    
                    <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Error page</li>
                </ul>
            </div>
        </section>
        <!-- /404-->
        <section class="error-page py-5 text-center">
            <div class="container py-md-5 py-sm-4">
                <div class="main-cover w3">
                    <img src="assets/images/404.svg" class="img-fluid" alt="404-img">
                    <h5 class="error">Sorry, We Can't Find That Page!</h5>
                    <p class="">The page you are looking for was moved, removed, renamed or never existed.</p>
                    
                </div>
            </div>
        </section>
        <!-- //404-->
@endsection