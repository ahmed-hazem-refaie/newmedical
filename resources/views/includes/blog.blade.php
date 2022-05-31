<div class="blog-area fix bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3> {{ __('website.blogtitle') }} </h3>
                    <p> {{ __('website.blogtitleinfo') }} </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid home-blog">


                @forelse($blogs as $blog)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">

                            <a class="image-scale" href="{{ route('website.blog',[$blog->id,$blog->name_en]) }}">
                                <img src="{{getimg(object_get( $blog,'image_'.app()->getLocale())) }}" alt="" style="height:240px">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="admin-type">
                                    <i class="fa fa-user"></i>
                                    {{$blog->user->name ?? 'Admin' }}
                                </span>
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>
                                    {{$blog->created_at->format('Y-m-d')}}
                                </span>
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    {{$blog->comments->count()}}
                                </span>
                            </div>
                            <a href="{{ route('website.blog',[$blog->id,$blog->name_en]) }}">
                                <h4>
                                    {{object_get($blog,'name_'.app()->getLocale()) ?? "Creative design clients response is better"}}

                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                @empty


                @endforelse
            </div>
        </div>
        <!-- End row -->
    </div>
</div>