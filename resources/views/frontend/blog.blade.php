@extends('frontend.master.master')
@section('title','Blog')
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
                    <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Tin tức</li>
                    <!-- <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Blog standard</li> -->
                </ul>
            </div>
        </section>
        <!--/blog-post-->
        <section class="bds-blogpost-content py-5">
            <div class="container py-lg-4 py-md-3 py-2">
                <div class="row mt-md-5">
                    <div class="col-lg-8 bds-news">
                        <div class="row" id="new_estate">
                            {{-- <div class="col-md-6 mt-md-0 mt-sm-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">16</span>
                                    <span class="small">Tháng</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Danh mục</a>
                                        <h4><a href="blog-single.html">Tiêu đề</a></h4>
                                        <p>Mô tả</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-md-0 mt-sm-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">16</span>
                                    <span class="small">Tháng</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Danh mục</a>
                                        <h4><a href="blog-single.html">Tiêu đề</a></h4>
                                        <p>Mô tả</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-sm-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">16</span>
                                    <span class="small">Tháng</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Danh mục</a>
                                        <h4><a href="blog-single.html">Tiêu đề</a></h4>
                                        <p>Mô tả</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-sm-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">16</span>
                                    <span class="small">Tháng</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Danh mục</a>
                                        <h4><a href="blog-single.html">Tiêu đề</a></h4>
                                        <p>Mô tả</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-sm-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">16</span>
                                    <span class="small">Tháng</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Danh mục</a>
                                        <h4><a href="blog-single.html">Tiêu đề</a></h4>
                                        <p>Mô tả</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-sm-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">16</span>
                                    <span class="small">Tháng</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Danh mục</a>
                                        <h4><a href="blog-single.html">Tiêu đề</a></h4>
                                        <p>Mô tả</p>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- <div class="col-md-6 mt-md-0 mt-5 pt-md-0 pt-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">19</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p2.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">A digital prescription for the pharma industry</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-5 pt-md-0 pt-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">19</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p2.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">A digital prescription for the pharma industry</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-5 pt-md-0 pt-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">19</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p2.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">A digital prescription for the pharma industry</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-5 pt-md-0 pt-4 mb-5">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">19</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p2.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">A digital prescription for the pharma industry</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-6 mt-5 pt-4">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">20</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p3.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">Retail banks wake up to digital lending this year</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 pt-4">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">18</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p4.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">A digital prescription for the pharma industry</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 pt-4">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">22</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p6.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">Retail banks wake up to digital lending this year</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 pt-4">
                                <div class="grids5-info">
                                    <span class="posted-date">
                                <a href="#url">
                                    <span class="small">2020</span>
                                    <span class="big">21</span>
                                    <span class="small">October</span>
                                    </a>
                                    </span>
                                    <a href="blog-single.html" class="d-block zoom"><img src="assets/images/p7.jpg" alt="" class="img-fluid news-image" /></a>
                                    <div class="blog-info">
                                        <a href="#category" class="category">Uncartegorized</a>
                                        <h4><a href="blog-single.html">A digital prescription for the pharma industry</a></h4>
                                        <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- pagination -->
                        <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                            <ul class="page-pagination">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#url">2</a></li>
                                <li><a class="page-numbers" href="#url">3</a></li>
                                <li><a class="page-numbers" href="#url">...</a></li>
                                <li><a class="page-numbers" href="#url">15</a></li>
                                <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                            </ul>
                        </div>
                        <!-- //pagination -->
                    </div>
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                        <aside class="sidebar">
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h4>Tìm kiếm tin tức</h4>
                                </div>
                                <form action="#" class="search-box" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search..." required="">
                                        <button><span class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h4>Danh mục</h4>
                                </div>
                                <ul class="blog-cat">
                                    <li><a href="#url">Danh mục 1 </a></li>
                                    <li><a href="#url">Danh mục 1 </a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                </ul>
                            </div>

                            <!-- Popular Post Widget-->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h4>Tin mới nhất</h4>
                                </div>

                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề
                                </a>
                                        <div class="post-info">10 - 19 - 2020</div>
                                    </div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề
                                </a>
                                        <div class="post-info">10 - 19 - 2020</div>
                                    </div>
                                </article>
                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề
                                </a>
                                        <div class="post-info">10 - 19 - 2020</div>
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

        <script>
            $(document).ready(function(){
                $.ajax({
                    type:'post',
                    url:'/tin_tuc',
                    success:function(result){
                        
                        console.log(result);
                        var str="";
                        if(result.tintuc.data.length==0){
                            str+="Đang cập nhật...";
                        }
                        else{
                            for(var i=0;i<result.tintuc.data.length;i++){
                                var dateNew=new Date(result.tintuc.data[i].ThoiGianTaoTT);
                                
                                str+="<div class='col-md-6 mt-md-0 mt-sm-4 mb-5'>";
                                    str+="<div class='grids5-info'>";
                                        str+="<span class='posted-date'>";
                                            str+="<a href='#blog-single'>";
                                                str+="<span class='small'>"+dateNew.getFullYear()+"</span>";
                                                str+="<span class='big'>"+dateNew.getUTCDate()+"</span>";
                                                str+="<span class='small'>Tháng "+(dateNew.getUTCMonth() + 1)+"</span>";
                                            str+="</a>";
                                        str+="</span>";
                                    str+="<a href='#blog-single' class='d-block zoom'><img src='../backend/dist/img/"+result.tintuc.data[i].AnhDaiDien+"' alt='' class='img-fluid news-image' /></a>";
                                        str+="<div class='blog-info'>";
                                            // str+="<a href='#category' class='category'>Tin tức 1</a>";
                                            str+="<h4><a class='title_estate' title='"+result.tintuc.data[i].TieuDeTinTuc+"' href='#blog-single'>"+result.tintuc.data[i].TieuDeTinTuc+"</a></h4>";
                                            str+="<p class='title_estate'>"+result.tintuc.data[i].MoTaTinTuc+"</p>";
                                        str+="</div>";
                                    str+="</div>";
                            str+="</div>";

                            }
                        }

                        $("#new_estate").html(str);
                    }
                })
            });
        </script>


@endsection