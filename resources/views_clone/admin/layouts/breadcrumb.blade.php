<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><a href="{{isset(Session::get('_previous')['url'])?Session::get('_previous')['url']:'/'}}" ><i class="icon-arrow-right6 position-left"></i></a> <span class="text-semibold">  {{__('admin.title')}}   </span> - @yield('title')</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                @can( 'home')
                <a href="{{asset('dashboard')}}" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span> STATISTS OF VISITORS</span></a>
                @endcan
                <a href="{{asset('dashboard/admins')}}" class="btn btn-link btn-float has-text"><i class="icon-users text-primary"></i> <span> {{__('admin.admins')}} </span></a>
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{asset('dashboard')}}"><i class="icon-home2 position-left"></i>  {{__('admin.title')}} </a></li>
           @stack('breadcrumb')
           <li class="active"> @yield('title') </li>

        </ul>
    </div>


</div>
<!-- /page header -->
