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
                        <h3>Blog details</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Blog details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!--Blog Area Start-->
<div class="blog-area fix area-padding">
    <div class="container">
        <div class="row">
            <div class="blog-details">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- single-blog start -->
                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <a href="#" class="blog-images">
                                <img src="{{getimg(object_get( $blog,'image_'.app()->getLocale())) }}" alt="" style="height:450px;">
                            </a>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        {{$blog->user->name ?? "Admin"}}
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        {{$blog->created_at->format('Y-m-d')}}
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        0
                                    </span>
                                </div>
                                <h4>
                                    {{object_get($blog,'name_'.app()->getLocale()) ?? "Creative design clients response is better"}}

                                </h4>
                                <div class="the-content">

                                    {!! nl2br(object_get($blog,'description_'.app()->getLocale())) !!}
                                </div>

                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                    <div class="related-post">
                        <div class="comments-heading">
                            <h3>Related post</h3>
                        </div>

                        <div class="related-post-list">

                            @forelse($blog->category->blogs as $related_blog)
                            @if($related_blog->id != $blog->id)
                            <!-- start single post -->
                            <div class="recent-single-post">
                                <div class="post-img">
                                    <a href="{{ route('website.blog',[$related_blog->id,$related_blog->name_en]) }}">
                                        <img src="{{getimg(object_get( $related_blog,'image_'.app()->getLocale())) }}" alt="">
                                    </a>
                                </div>
                                <div class="pst-content">
                                    <p><a href="{{ route('website.blog',[$related_blog->id,$related_blog->name_en]) }}">
                                            {{object_get($related_blog,'name_'.app()->getLocale()) }}

                                        </a>
                                    </p>
                                    <span class="date-type">
                                        {{$related_blog->created_at->format('Y-m-d')}}
                                    </span>
                                </div>
                            </div>
                            <!-- End single post -->
                            @endif
                            @empty
                         
                            @endforelse


                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="single-post-comments">
                        <div class="comments-area">
                            <div class="comments-heading">
                                <h3>0 comments</h3>
                            </div>
                            <div class="comments-list" hidden>
                                <ul>
                                    <li>
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="{{asset('assets/img/blog/avater2.png')}}" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">Alens</a></b>
                                                    Post author
                                                    <span class="post-time">Jan 6, 2020</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="threaded-comments">
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="{{asset('assets/img/blog/avater1.png')}}" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">admin</a></b>
                                                    Post author
                                                    <span class="post-time">Jan 7, 2020</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="{{asset('assets/img/blog/avater2.png')}}" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">Andre</a></b>
                                                    Post author
                                                    <span class="post-time">Sep 11, 2019</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="threaded-comments">
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="{{asset('assets/img/blog/avater1.png')}}" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">admin</a></b>
                                                    Post author
                                                    <span class="post-time">Nov 13, 2019</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply </h3>
                            <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>First Name *</p>
                                        <input type="text" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Last Name *</p>
                                        <input type="text" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Email *</p>
                                        <input type="email" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                        <p>Massage *</p>
                                        <textarea id="message-box" cols="30" rows="10"></textarea>
                                        <input class="add-btn contact-btn" type="submit" value="Post Comment" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- single-blog end -->
                </div>
                <!-- Start Right Sidebar blog -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="left-head-blog right-side">
                        <div class="left-blog-page">
                            <!-- search option start -->
                            <form action="{{route('website.search.blogs')}}" >
                                <div class="blog-search-option">
                                    <input type="text" placeholder="Search..." name="name">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="left-blog-page">
                            <div class="left-blog blog-category">
                                <h4>categories</h4>
                                <ul>
                                    @forelse($categories as $category)
                                    <li><a href="{{ route('website.category.blogs',[$category->id,$category->name_en]) }}">
                                            {{object_get($category,'name_'.app()->getLocale()) }}
                                        </a><span>
                                            {{ $category->blogs->count()}}
                                        </span></li>
                                    @empty
                                    @endforelse

                                </ul>
                            </div>
                        </div>
                        <div class="left-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                <div class="recent-post">
                                    @forelse($recent_blogs as $recent_blog)
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="{{ route('website.blog',[$recent_blog->id,$recent_blog->name_en]) }}">
                                                <img src="{{getimg(object_get( $recent_blog,'image_'.app()->getLocale())) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="{{ route('website.blog',[$recent_blog->id,$recent_blog->name_en]) }}">
                                                    {{object_get($recent_blog,'name_'.app()->getLocale()) }}
                                                </a></p>
                                            <span class="date-type">
                                                {{$recent_blog->created_at->format('Y-m-d')}}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    @empty

                                    @endforelse

                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                        <div class="left-blog-page" hidden>
                            <div class="left-tags blog-tags">
                                <div class="popular-tag left-side-tags left-blog">
                                    <h4>popular tags</h4>
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Agency </a></li>
                                        <li><a href="#">Media</a></li>
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Photoshop</a></li>
                                        <li><a href="#">Seo</a></li>
                                        <li><a href="#">development</a></li>
                                        <li><a href="#">Search</a></li>
                                        <li><a href="#">Design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Right Sidebar -->
        </div>
        <!-- End row -->
    </div>
</div>
<!--End of Blog Area-->
@endsection