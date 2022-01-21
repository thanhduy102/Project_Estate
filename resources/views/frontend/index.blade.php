@extends('frontend.master.master')
@section('title','Home')
@section('content')
    <section class="bds-cover-3">
        <div class="cover top-bottom">
            <div class="container">
                <div class="middle-section text-center">
                    <div class="section-width">
                        <p>Hello</p>
                        <h2>Bạn muốn tìm gì?</h2>
                        <div class="most-searches">
                            <!-- <h4>Most Searches</h4>
                            <ul>
                                <li><a href="#link">Villa</a></li>
                                <li><a href="#link">Apartment</a></li>
                                <li><a href="#link">Private house</a></li>
                            </ul> -->
                        </div>
                        <form action="#" class="bds-cover-3-gd" method="GET">
                            <input type="search" name="text" placeholder="Nhập tên bất động sản..." required>
                            <span class="input-group-btn">
								<select class="btn btn-default" name="ext" required>
									<option selected="">Khu vực</option>
									<option>Hà Nội</option>
									<option>Ninh Bình</option>
									<option>TP Hồ Chí Minh</option>
									<option>Đà Nẵng</option>
									
								</select>
							</span>
                            <span class="input-group-btn">
								<select class="btn btn-default" name="ext" required>
									<option selected="">Loại</option>
									<option>Nhà cho thuê</option>
									<option>Nhà bán</option>
									
								</select>
							</span>
                            <button type="submit" class="btn-primary">Search</button>
                        </form>
                    </div>
                    <section id="bottom" class="demo">
                        <a href="#bottom"><span></span>Scroll</a>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider -->
    <!-- <section class="location-1">
        <div class="location py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="heading text-center mx-auto">
                    <h3 class="title-big">Top Properties</h3>
                </div>
                <div class="owl-product">
                    <div class="item">
                        <div class="col-lg-4 col-md-6 listing-img">
                            <a href="#url">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                    <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$25,00,000</h3>
                                    </div>
                                </div>
                            </a>
                            <div class="listing-details blog-details align-self">
                                <h4 class="user_title agent">
                                    <a href="#url">Cottage villa</a>
                                </h4>
                                <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                                <ul class="mt-3 estate-info">
                                    <li><span class="fa fa-bed"></span> 1 Bed</li>
                                    <li><span class="fa fa-shower"></span> 2 Baths</li>
                                    <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                                </ul>
                                <div class="author align-items-center mt-4">
                                    <a href="#img" class="comment-img">
                                        <img src="assets/images/team1.jpg" alt="" class="img-fluid">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#url">Laura Antiochus </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> Selling agent</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->
    <!--/Slider  -->
    <section class="locations-1" id="locations">
        <div class="locations py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="heading text-center mx-auto">
                    <h3 class="title-big">Nhà đất cho thuê mới nhất</h3>
                </div>
                <div class="row pt-md-5 pt-4" id="featured_estate">
                    
                </div>
                <a href="http://" class="pull-right">View more >></a>

            </div>
        </div>
    </section>

    {{-- <section class="locations-1">
        <div class="locations py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="heading text-center mx-auto">
                    <h3 class="title-big">BĐS Nổi Bật</h3>
                </div>
                <div class="row pt-md-5 pt-4" id="featured_estate">
                    <div class="col-lg-4 col-md-6">
                        <a href="property-single.html">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Hot</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">50,000,000đ</h3>
                                    <span class="post">Như Hòa, Kim Sơn, Ninh Bình</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <a href="property-single.html">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Hot</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">50,000,000đ</h3>
                                    <span class="post">Như Hòa, Kim Sơn, Ninh Bình</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 pt-lg-0 mt-4 pt-md-2">
                        <a href="property-single.html">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Hot</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">50,000,000đ</h3>
                                    <span class="post">Như Hòa, Kim Sơn, Ninh Bình</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                        <a href="property-single.html">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Hot</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">50,000,000đ</h3>
                                    <span class="post">Như Hòa, Kim Sơn, Ninh Bình</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                        <a href="property-single.html">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Hot</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">50,000,000đ</h3>
                                    <span class="post">Như Hòa, Kim Sơn, Ninh Bình</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                        <a href="property-single.html">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Hot</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">50,000,000đ</h3>
                                    <span class="post">Như Hòa, Kim Sơn, Ninh Bình</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    


  
    <section class="locations-1 popular">
        <div class="locations py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="heading text-center mx-auto">
                    <!-- <h6 class="title-small">Explore cities</h6> -->
                    <h3 class="title-big">Khu vực</h3>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-md-0 pt-md-0 mt-sm-4 mt-3 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-lg-0 pt-lg-0 mt-sm-4 mt-3 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title mb-1">Hà Nội</h3>
                                    <span class="post">40 căn</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="bds-news" id="news">
        <section id="grids5-block" class="py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <h3 class="title-big text-center">Tin tức nổi bật</h3>
                <div class="row mt-lg-5 mt-4 pt-3" id="location_new">

                </div>
                <a href="http://" class="pull-right">View more >></a>
            </div>
        </section>
    </div>
    <!--  //News section -->
    <section class="bds-companies-hny-6 py-5">
        <!-- /grids -->
        <div class="container py-md-3">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 column">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="assets/images/client1.png" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="assets/images/client2.png" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-md-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="assets/images/client3.png" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-lg-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="assets/images/client4.png" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-lg-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="assets/images/client5.png" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-lg-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="assets/images/client6.png" alt="client"> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //grids -->
    </section>

    <script>
        $(document).ready(function(){

            var formatter = new Intl.NumberFormat({
            style: 'currency',
            currency: 'VND',
});


            $.ajax({
                type:'post',
                url:'/featured_estate',
                success:function(result){
                    console.log(result);
                    var str="";
                    if(result.batdongsan.length==0){
                        str+="Đang cập nhật...";
                    }
                    else{
                        for(var i=0;i<result.batdongsan.length;i++){

                            var dateNew=new Date(result.batdongsan[i].ThoiGianTao);

                            str+="<div class='col-lg-3 col-md-6 listing-img mb-5'>";
                            str+="<a href='#url'>";
                            str+="<div class='box16'>";
                                str+="<div class='rentext-listing-category'><span>Hot</span><span>New</span></div>";
                                str+="<img class='img-fluid' src='../image/avatar/estate/"+result.batdongsan[i].AnhDaiDien+"' alt=''>";
                                str+="<div class='box-content'>";
                                    str+="<h3 class='title'>"+formatter.format(result.batdongsan[i].GiaTienBDS)+" VND</h3>";
                                str+="</div>";
                            str+="</div>";
                        str+="</a>";
                        str+="<div class='listing-details blog-details align-self'>";
                            str+="<h4 class='user_title agent'>";
                                str+="<a class='title_estate' href='#url' title='"+result.batdongsan[i].TieuDeBDS+"'>"+result.batdongsan[i].TieuDeBDS+"</a>";
                            str+="</h4>";
                            str+="<i class='fa fa-map-marker'> "+result.batdongsan[i].name+"</i>";
                            str+="<ul class='mt-3 estate-info'>";
                                // str+="<li><span class='fa fa-bed'></span> 1 Bed</li>";
                                // str+="<li><span class='fa fa-shower'></span> 2 Baths</li>";
                                str+="<li><span class='fa fa-share-square-o'></span> "+result.batdongsan[i].DienTich+" (M²)</li>";
                            str+="</ul>";
                            str+="<div class='author' style='display:flex;'>";
                                str+="<p class='date_estate'><span class='fa fa-clock-o'></span> "+dateNew.getUTCDate()+"-"+(dateNew.getUTCMonth() + 1)+"-"+dateNew.getFullYear()+ "</p>";
                                // str+="<a href='#more' class='more' style='font-size:15px'>Xem chi tiết <span class='fa fa-long-arrow-right'></span> </a>";

                            str+="</div>";
                        str+="</div>";
                    str+="</div>";

                        }
                    }

                    $("#featured_estate").html(str);
                }
            })
        });
    </script>
<script>
    $(document).ready(function(){
        $.ajax({
                type:'post',
                url:'/featured_estate',
                success:function(result){
                    console.log(result);
                    var str="";
                    if(result.tintuc.length==0){
                        str+="Đang cập nhật...";
                    }
                    else{
                        for(var i=0;i<result.tintuc.length;i++){
                            var dateNew=new Date(result.tintuc[i].ThoiGianTao);
                            

                            str+="<div class='col-lg-3 col-md-6 mt-md-0 mt-sm-4 mb-5'>";
                                str+="<div class='grids5-info'>";
                                    str+="<span class='posted-date'>";
                                        str+="<a href='#blog-single'>";
                                            str+="<span class='small'>"+dateNew.getFullYear()+"</span>";
                                            str+="<span class='big'>"+dateNew.getUTCDate()+"</span>";
                                            str+="<span class='small'>"+(dateNew.getUTCMonth() + 1)+"</span>";
                                        str+="</a>";
                                    str+="</span>";
                                str+="<a href='#blog-single' class='d-block zoom'><img src='../backend/dist/img/"+result.tintuc[i].AnhDaiDien+"' alt='' class='img-fluid news-image' /></a>";
                                    str+="<div class='blog-info'>";
                                        // str+="<a href='#category' class='category'>Tin tức 1</a>";
                                        str+="<h4><a class='title_estate' title='"+result.tintuc[i].TieuDeTinTuc+"' href='#blog-single'>"+result.tintuc[i].TieuDeTinTuc+"</a></h4>";
                                        str+="<p class='title_estate'>"+result.tintuc[i].MoTaTinTuc+"</p>";
                                    str+="</div>";
                                str+="</div>";
                        str+="</div>";

                        }
                    }

                    $("#location_new").html(str);
                }
            })
    });
</script>
    @endsection