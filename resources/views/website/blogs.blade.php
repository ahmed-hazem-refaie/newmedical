@extends('layouts.website')


@section('content')
   <!-- Start Bottom Header -->
   <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Blog Grid</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Blog Grid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
               <!--Blog Area Start-->
        <div class="blog-area fix area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>
                            {{field_content($settings,'Blogs Page', 'section-blogs-title') ?? "Technology news"}}                   
                            
                        </h3>
							<p>
                            {{field_content($settings,'Blogs Page', 'section-blogs-description') ?? "Dummy text is also used to demonstrate the appearance of different typefaces and layouts"}}      
                            </p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                               <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('assets/img/blog/b1.jpg')}}" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i>
                                            20 july, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            13
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Creative design clients response is better</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                               <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('assets/img/blog/b2.jpg')}}" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                       <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            13 may, 2018
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            16
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Web development is a best work in future world</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('assets/img/blog/b3.jpg')}}" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            24 april, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            07
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>You can trust me and business with together</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('assets/img/blog/b4.jpg')}}" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('assets/img/blog/b5.jpg')}}" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>You can trust me and business with together</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('assets/img/blog/b6.jpg')}}" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Creative design clients response is better</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-pagination">
                                <ul class="pagination">
                                   <li><a href="#">Prev</a></li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><a href="#">Next</a></li>
                                </ul>
                            </div>	
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->
@endsection