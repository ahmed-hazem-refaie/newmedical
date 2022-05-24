@extends('admin.layouts.layout')
@section('header')
@endsection
@section('title')
{{    __('admin.setting')}}
@endsection
<style>
    @charset "UTF-8";
    @import "bootstrap4-utils.css";


    .statistics-circle i {
        font-size: 3rem;
    }

    .statistics-circle .title {
        font-size: 1.6rem;
    }

    .statistics-circle .number {
        font-size: 2.5rem;
    }

    .footer {
        color: var(--secondary);
    }

    .footer a {
        color: var(--secondary);
    }

    /* settings page */
    .panel-group .panel {
        margin-bottom: 25px;
    }

    .panel-group .panel-heading {
        padding: 0;
    }

    .panel-group .panel-heading .panel-title {
        padding: 15px 20px;
        color: var(--primary);
    }

    .panel-group .panel-heading .panel-title a:after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "";
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%) rotate(180deg);
    }

    .panel-group .panel-heading .panel-title a.collapsed:after {
        content: "";
    }

    .panel-group .panel-heading + .panel-collapse > .panel-body,
    .panel-group .panel-heading + .panel-collapse > .list-group {
        border-top: 0;
    }

    .panel-group .media i {
        font-size: 4rem;
        color: var(--secondary);
    }

    .panel-group .media .media-heading {
        color: var(--secondary);
        font-weight: bold;
        font-size: 16px;
    }

    .panel-group .media .extra {
        font-size: 12px;
    }

    .panel-group .media .media-left {
        padding-left: 10px;
    }


    /*# sourceMappingURL=asmacii.css.map */
</style>
@section('content')


    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


        <div class="panel panel-white">
            <div class="panel-heading" role="tab" id="heading1">
                <h4 class="panel-title font-weight-bold">
                    <a class="d-block" role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                       aria-controls="collapseOne">
                         {{__('generalsetting')}}
                    </a>
                </h4>

            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                <div class="panel-body">


                    <div class="row flex-row">


                        @can( 'setting_country')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.country.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('country.setting')}} </h4>
                                        <p class="text-muted extra">{{__('country.settingdescribe')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan




                        @can( 'setting_application')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.application.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-magic"></i>
                                    </div>
                                    <div class="media-body">
                                    <h4 class="media-heading"> {{__('setting.application')}}</h4>
                                        <p class="text-muted extra"> {{__('setting.applicationdescription')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                        @can( 'setting_blog')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.blog.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-paw"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">   {{__('setting.blog')}}</h4>
                                        <p class="text-muted extra">  {{__('setting.blogdescription')}}  </p>
                                    </div>
                                </div> 
                            </a>
                        </div>                            
                        @endcan


                        @can('allow', 'setting_ourservice')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.ourservices.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.ourservice')}}</h4>
                                        <p class="text-muted extra">{{__('setting.ourservicedescription')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                    </div>

                    <div class="row flex-row">



                        @can('allow', 'setting_feature')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.feature.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.feature')}}</h4>
                                        <p class="text-muted extra">{{__('setting.featuredescription')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                        @can('allow', 'setting_solditem')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.solditem.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.solditem')}}</h4>
                                        <p class="text-muted extra">{{__('setting.solditemdescription')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan

                        @can( 'setting_clientfeedback')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.clientfeedback.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.clientfeedback')}}</h4>
                                        <p class="text-muted extra">{{__('setting.clientfeedbackdescription')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                        @can( 'setting_startnow_questiondata')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.startnow_question.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-play"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.startnow_questiondata')}}</h4>
                                        <p class="text-muted extra">{{__('setting.startnow_questiondata_description')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                    </div>



                    <div class="row flex-row">

                        @can( 'setting_questions')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.question.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-question"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.question')}}</h4>
                                        <p class="text-muted extra">{{__('setting.question_description')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                        @can( 'setting_currency')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.currency.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.currency')}}</h4>
                                        <p class="text-muted extra">{{__('setting.currency_conversion')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan


                        @can( 'setting_domains')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.domain.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{__('setting.domain')}}</h4>
                                        <p class="text-muted extra">{{__('setting.domain_description')}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan




                    </div>

                    {{-- 
                        <div class="row flex-row">


         






                    </div> --}}
                    {{-- <div class="row flex-row">

                        @can('allow', 'setting_slider')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.sliders.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-image"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">إعدادات سيلايدر</h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan

                        @can('allow', 'setting_gallery')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.galleries.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-video"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">إعدادات المعرض</h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan


                        @can('allow', 'setting_operations')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.faqs.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-question"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">الإجراءات   </h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة الاعدادات العامة</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan


                        @can('allow', 'setting_supporter')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.sponsors.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-umbrella"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> الداعمين</h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة الداعمين </p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                    </div> --}}
                    {{-- <div class="row flex-row">

                        @can('allow', 'setting_branches')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.branches.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">  الفروع</h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة الفروع </p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan

                        @can('allow', 'setting_crew')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.teams.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-user-secret "></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">إعدادات  فريق العمل</h4>
                                        <p class="text-muted extra"> جملة تعريفية عن ما تقدمة فريق العمل</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                            
                        @endcan

                        @can('allow', 'setting_offers')
                            
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.offers.index')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-anchor"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">إعدادات العروض</h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة إعدادات العروض</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endcan

                        @can('allow', 'image' )
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{route('dashboard.settings.show','image')}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fas fa-image"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">إعدادات الصور</h4>
                                        <p class="text-muted extra">جملة تعريفية عن ما تقدمة إعدادات الصور</p>
                                    </div>
                                </div>
                            </a>
                        </div>                            
                        @endcan



                    </div> --}}
                </div>
            </div>
        </div>



        <div class="panel panel-white">
            
            <div class="panel-heading" role="tab" id="heading2">
                <h4 class="panel-title font-weight-bold">
                    <a class="d-block" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                       aria-controls="collapseTwo">
                        {{__('contentpagemanagement')}} 
                        
                    </a>
                    <div class="row text-center">

                        <a href="{{route('dashboard.setting.index')}}" class="btn btn-primary col-md-12"> {{__('settingcontrol')}}  </a>
                    </div>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse  in" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
                     <div class="row flex-row">

                        @foreach ( array_chunk(  \App\Models\Setting::all()->toArray() ,4) as $chunk)
                        <div class="row">

                            @foreach ($chunk as $item)
                            @can($item['name_en'])
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{route('dashboard.setting.show',$item['name_en'])}}">
                                    <div class="media">
                                        <div class="media-left">
                                            @if ($item['icon'])
                                        <i class="fas fa-{{$item['icon']}}"></i>

                                            @else
                                            <i class="fas fa-info"></i>

                                            @endif
                                        </div>
                                        <div class="media-body">
                                        <h4 class="media-heading">{{__('admin.setting')}} {{$item['name_'.app()->getLocale()]}}</h4>
                                            <p class="text-muted extra">  {!!$item['description_'.app()->getLocale()]!!}     </p>
                                        </div>
                                    </div>
                                </a>
                            </div>                               
                            @endcan
                            @endforeach
                            
                        </div>

                        @endforeach

                        


                    {{--
                        <div class="row">
                            @can('allow', 'about')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{route('dashboard.settings.show','about')}}">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">اعدادات من نحن</h4>
                                            <p class="text-muted extra">جملة تعريفية عن ما تقدمة اعدادات من نحن</p>
                                        </div>
                                    </div>
                                </a>
                            </div>                               
                            @endcan


                            @can('allow', 'contacts')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{route('dashboard.settings.show','contacts')}}">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">اعدادات الاتصال </h4>
                                            <p class="text-muted extra">جملة تعريفية عن ما تقدمة اعدادات الاتصال</p>
                                        </div>
                                    </div>
                                </a>
                            </div>                           
                            @endcan




                            @can('allow', 'social')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{route('dashboard.settings.show','social')}}">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-facebook"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">اعدادات السوشيال ميديا </h4>
                                            <p class="text-muted extra">جملة تعريفية عن ما تقدمة السوشيال ميديا </p>
                                        </div>
                                    </div>
                                </a>
                            </div>                               
                            @endcan


                            @can('allow', 'SEO')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  ">
                                <a href="{{route('dashboard.settings.show','SEO')}}">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">إعدادات الظهور فى البحث </h4>
                                            <p class="text-muted extra">يمكنك اضافة كلمات تعريفية للظهر فى محركات
                                                البحث</p>
                                        </div>
                                    </div>
                                </a>
                            </div>                
                            @endcan



                        </div>
                        <div class="row">
                            @can('allow', 'titles')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{route('dashboard.settings.show','titles')}}">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon icon-pen"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">اعدادات العناوين</h4>
                                            <p class="text-muted extra">جملة تعريفية عن ما تقدمة اعداداتالعناوين</p>
                                        </div>
                                    </div>
                                </a>
                            </div>                                
                            @endcan

                        </div>

                        --}}
                    </div> 
                </div>
            </div>
        </div>


    </div>


@endsection
