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
                        @if(session()->has('success') )
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success') }}
                        </div>
                        @endif
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
<div class="blog-area fix area-padding the-blogs">
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
                                <h3>{{$blog->comments->count()}} comments</h3>
                            </div>
                            <div class="comments-list">
                                <ul>
                                    @forelse($blog->comments as $comment)
                                    @if($comment->parent ==null)
                                    <li>
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                {{$comment->first_name}}
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a>
                                                            {{$comment->first_name}} {{$comment->last_name}}
                                                        </a></b>

                                                    <span class="post-time">
                                                        {{$comment->created_at->format('Y-m-d')}}
                                                    </span>
                                                    <a type="button" data-toggle="modal" data-target="#myModal{{$comment->id}}" style="cursor:pointer">Reply</a>
                                                </span>
                                                <p>
                                                    {{$comment->message}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>


                                    <!-- Modal -->
                                    <div id="myModal{{$comment->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Leave a Reply </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="comment-respond">

                                                        <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                                        <form action="{{route('website.comments.store')}}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <p>First Name *</p>
                                                                    <input required name="first_name" type="text" />
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <p>Last Name *</p>
                                                                    <input required name="last_name" type="text" />
                                                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                                    <input type="hidden" name="parent" value="{{$comment->id}}">
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <p>Email *</p>
                                                                    <input required name="email" type="email" />
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                                    <p>Massage *</p>
                                                                    <textarea required name="message" id="message-box" cols="30" rows="10"></textarea>
                                                                    <input class="add-btn contact-btn" type="submit" value="Post Comment" />
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <span hidden>
                                        {{! $replies=\App\Models\Comment::where('parent',$comment->id)->get()}}
                                    </span>
                                    @forelse($replies as $reply)
                                    <li class="threaded-comments">
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                {{$reply->first_name}}
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a>
                                                            {{$reply->first_name}} {{$reply->last_name}}
                                                        </a></b>

                                                    <span class="post-time">
                                                        {{$reply->created_at->format('Y-m-d')}}
                                                    </span>
                                                    
                                                </span>
                                                <p>
                                                    {{$reply->message}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    @empty
                                    @endforelse
                                    @endif
                                    @empty
                                    @endforelse


                                </ul>
                            </div>
                        </div>
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply </h3>
                            <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                            <form action="{{route('website.comments.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>First Name *</p>
                                        <input required name="first_name" type="text" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Last Name *</p>
                                        <input required name="last_name" type="text" />
                                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Email *</p>
                                        <input required name="email" type="email" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                        <p>Massage *</p>
                                        <textarea required name="message" id="message-box" cols="30" rows="10"></textarea>
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
                            <form action="{{route('website.search.blogs')}}">
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