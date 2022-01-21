@extends('frontend.master.master')
@section('title','Blog Single')
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
                    <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Tin tức 1</li>
                </ul>
            </div>
        </section>
        <!--/blog-post-->
        <section class="bds-blog post-content py-5">
            <div class="container py-lg-5 py-md-3 py-2">
                <div class="row">
                    <div class="col-lg-8 bds-news">
                        <div class="blog-single-post">
                            <div class="post-content">
                                <h2 class="title-single mb-3"> Tiêu đề 1</h2>
                            </div>
                            <div class="blo-singl mb-4">
                                <ul class="blog-single-author-date d-flex align-items-center">
                                    <li class="circle avatar"><img src="assets/images/team1.jpg" alt="single post image" class="img-fluid"></li>
                                    <li>by <span class="fa fa-user-o ml-2"></span> <a href="#URL">Name</a></li>
                                    <li><span class="fa fa-calendar"></span> 2021 - 20 - 10</li>
                                </ul>
                                <ul class="share-post">
                                    <li class="facebook">
                                        <a href="#link" title="Facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#link" title="Twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li class="google">
                                        <a href="#link" title="Google">
                                            <span class="fa fa-google" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ảnh đại diện -->
                            <div class="single-post-image mb-5">
                                <img src="assets/images/single.jpg" class="img-fluid w-100 radius-image" alt="blog-post-image">
                            </div>
                            <!-- End  -->
                            <!-- Content  -->
                            <div class="single-post-content">
                                <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                                </p>
                                <p class="mb-4">
                                    model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like. </p>
                                <p class="mb-4">When you decide to put your business online it is a little bet tricky step for novice computer users because they want to keep data safe &amp; secure. This problem developed from companies which did not take security seriously.
                                    Lorem ipsum dolor sit amet elit. </p>
                                <blockquote class="blockquote my-md-5 my-4">
                                    <q class="mb-3 d-block">Discuss the solution goals and constraints. i.e, What we want to
                                see happen and what we have to work with to make it happen.</q>
                                    <footer class="blockquote-footer">Alexander smith</footer>
                                </blockquote>
                                <p class="mb-4">The SCO trick is to draw traffic with desirable content, and to ’seduce’ the traffic into portions of the site that may not directly have anything to do with the content — this is the ultimate goal of the SEO campaign.
                                </p>

                            </div>
                            <!-- <div class="single-post-content my-5">
                                <h3 class="post-content-title mb-3">Why we are the best in the real estate business
                                </h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, amet fuga harum nulla laborum aliquid maxime accusamus vitae quas minima nisi facere quidem omnis perferendis voluptatum corrupti, voluptatem aperiam
                                    quod.
                                </p>
                                <div class="two-columns row single-post-content mt-4">
                                    <div class="col-md-6 left-column">
                                        <img src="assets/images/p1.jpg" class="img-fluid radius-image" alt="image">
                                    </div>
                                    <div class="col-md-6 right-column align-self">
                                        <p class="mt-md-0 mt-4">Vestibulum feugiat tortor vitae diam euismod, ut et inter dum nisi fermentum. Pellentesque sed sodales nunc. Vestibulum laoreet erat nisi, sit amet ultrices. Vestibulum feugiat tortor vitae diam euismod, ut et inter
                                            dum nisi fermentum. Pellentesque sed sodales nunc. Vestibulum laoreet erat nisi.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-post-content my-5">
                                <h3 class="post-content-title mb-3">Mosaic gallery fringilla velaliquet nec.</h3>
                                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quia repudiandae ducimus minus itaque magni laboriosam sapiente eos. At vitae dicta officia eveniet.
                                </p>
                            </div> -->

                            <!-- <nav class="post-navigation row mb-5 py-4">
                                <div class="post-prev col-md-6 pr-sm-5">
                                    <span class="nav-title">
                                <span class="fa fa-arrow-left mr-2"></span> Prev Post </span>
                                    <a href="#url" rel="prev" class="posts-view posts-view-left">
                                        <img src="assets/images/l3.jpg" class="img-fluid radius-image">
                                        <label>Why we are the best in the real estate business</label>
                                    </a>
                                </div>
                                <div class="post-next col-md-6 pl-sm-5 text-right">
                                    <span class="nav-title">
                                Next Post <span class="fa fa-arrow-right ml-2"> </span><span class="next-post pull-right"></span> </span>
                                    <a href="#url" rel="next" class="posts-view posts-view-right">
                                        <label>Retail banks wake up to digital lending this year</label>
                                        <img src="assets/images/l5.jpg" class="img-fluid radius-image">
                                    </a>
                                </div>
                            </nav> -->

                            <!-- <div class="comments">
                                <h3 class="post-content-title">Comments</h3>
                                <div class="media mt-md-5 mt-3">
                                    <div class="img-circle">
                                        <img src="assets/images/team1.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="media-body comments-grid-right">
                                        <a href="#URL" class="name mt-0">Bradley</a>
                                        <ul class="time-rply mb-3">
                                            <li>21 Oct 2020
                                                <i>|</i>
                                            </li>
                                            <li>
                                                <a href="#reply">Reply</a>
                                            </li>
                                        </ul>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                        </p>

                                    </div>
                                </div>

                                <div class="media">
                                    <div class="img-circle">
                                        <img src="assets/images/team2.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="media-body comments-grid-right">
                                        <a href="#URL" class="name mt-0">Harold</a>
                                        <ul class="time-rply mb-3">
                                            <li>22 Oct 2020
                                                <i>|</i>
                                            </li>
                                            <li>
                                                <a href="#reply">Reply</a>
                                            </li>
                                        </ul>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                        </p>

                                        <div class="media mt-3">
                                            <a class="img-circle img-circle-sm" href="#">
                                                <img src="assets/images/team3.jpg" class="img-fluid" alt="...">
                                            </a>
                                            <div class="media-body comments-grid-right">
                                                <a href="#URL" class="name mt-0">Dennis Jack</a>
                                                <ul class="time-rply mb-3">
                                                    <li>22 Oct 2020
                                                        <i>|</i>
                                                    </li>
                                                    <li>
                                                        <a href="#reply">Reply</a>
                                                    </li>
                                                </ul>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ante. Cras purus odio, in vulputate at.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media mt-5">
                                    <div class="img-circle">
                                        <img src="assets/images/team4.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="media-body comments-grid-right">
                                        <a href="#URL" class="name mt-0">Anthony</a>
                                        <ul class="time-rply mb-3">
                                            <li>23 Oct 2020
                                                <i>|</i>
                                            </li>
                                            <li>
                                                <a href="#reply">Reply</a>
                                            </li>
                                        </ul>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</p>

                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="reply mt-5 pt-lg-5" id="reply">
                                <h3 class="post-content-title py-3">Leave a reply</h3>
                                <form action="#" method="POST">
                                    <div class="form-group reply">
                                        <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="4"></textarea>
                                        <div class="input-grids row mt-md-4 mt-3">

                                            <div class="form-group col-lg-6">
                                                <input type="text" name="Name" class="form-control" placeholder="Your Name*" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="email" name="Email" class="form-control" placeholder="Email*" required="">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-primary btn-style" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->


                        </div>
                    </div>
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                        <aside class="sidebar">

                            <!-- Popular Post Widget-->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h4>Tin hot</h4>
                                </div>

                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
                                    </div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
                                    </div>
                                </article>
                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
                                    </div>
                                </article>
                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
                                    </div>
                                </article>

                            </div>

                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h4>Danh mục</h4>
                                </div>
                                <ul class="blog-cat">
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                    <li><a href="#url">Danh mục 1</a></li>
                                </ul>
                            </div>

                            <!-- Popular Post Widget-->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h4>Tin liên quan</h4>
                                </div>

                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
                                    </div>
                                </article>
                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
                                    </div>
                                </article>
                                <article class="post">
                                    <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Tiêu đề 1
                                </a>
                                        <div class="post-info">Oct 20, 2020</div>
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