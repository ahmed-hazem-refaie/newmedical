{{! $new_contact = App\Models\Contact::where("seen","No")->count() }}
{{! $new_applier = App\Models\CarrerAppliers::where("seen",false)->count() }}

<!-- Main sidebar -->
<div class="sidebar sidebar-main ">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left">
                        <img src="{{asset('/avatar.png')}}" class="img-circle img-sm" alt="">
                    </a>

                    <div class="media-body">
                        <span class="media-heading text-semibold">{{__('admin.manager')}}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> {{__('admin.manager')}} {{__('admin.website')}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /user menu -->
        <!-- permissions-->

        <!--  end permissions-->




        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">


                <ul class="navigation navigation-main navigation-accordion">










                    <li class="navigation-header"><span> {{__('all-setting')}} </span> <i class="icon-menu" title="Main pages"></i></li>

                    @can( 'all-setting')
                    <li class="{{ (Request::is('dashboard/all-settings') ? 'active' : '')}}">
                        <a href="{{route('dashboard.home')}}"><i class="icon-cog3"></i> {{__('all-setting')}} </a>
                    </li>
                    @endcan








                    {{-- @can('dashboardpartner')
                    <li>
                        <a href="#"><i class=" icon-pencil "></i> <span> {{__('partner.partner')}} </span></a>


                        <ul class="show-ul">
                            <li class="{{(Request::is('*partner') ? 'active' : '')}}"><a href="{{route('dashboard.partner.index')}}"><i class="icon-list"></i>
                                    {{__('partner.index')}}
                                </a>
                            </li>
                            @can( 'dashboardblogs_add')
                            <li class="{{ (Request::is('*partner/create*') ? 'active' : '')}}"><a href="{{route('dashboard.partner.create')}}"><i class="icon-add-to-list"></i>
                                    {{__('partner.add')}} </a>
                            </li>
                            @endcan



                        </ul>


                    </li>
                    @endcan --}}





                    <li>
                        <a href="#"><i class=" icon-list "></i> <span> Main Category </span></a>


                        <ul class="show-ul">
                            <li class="{{(Request::is('*maincategory') ? 'active' : '')}}"><a href="{{route('dashboard.maincategory.index')}}"><i class="icon-list"></i>
                                    {{__('maincategory.index')}}
                                </a>
                            </li>
                            @can( 'dashboardblogs_add')
                            <li class="{{ (Request::is('*maincategory/create*') ? 'active' : '')}}"><a href="{{route('dashboard.maincategory.create')}}"><i class="icon-add-to-list"></i>
                                    {{__('product.add')}} </a>
                            </li>
                            @endcan



                        </ul>


                    </li>

                    <li>
                        <a href="#"><i class=" icon-pencil "></i> <span> {{__('contact.contact')}} </span> @if($new_contact > 0)
                            <span class="badge badge-danger">
                                {{$new_contact}}
                            </span>
                            @endif</a>


                        <ul class="show-ul">
                            <li class="{{(Request::is('*contact') ? 'active' : '')}}"><a href="{{route('dashboard.contact.index')}}"><i class="icon-list"></i>
                                    {{__('contact.index')}}
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class=" icon-briefcase "></i> <span> {{__('Vacancy Candidates  ')}} </span> @if($new_applier > 0)
                            <span class="badge badge-danger">
                                {{$new_contact}}
                            </span>
                            @endif</a>


                        <ul class="show-ul">
                            <li class="{{(Request::is('*contact') ? 'active' : '')}}"><a href="{{route('dashboard.all-applier')}}"><i class="icon-list"></i>
                                    {{__('All Appliers')}}
                                </a>
                            </li>
                        </ul>

                        <ul class="show-ul">
                            <li class="{{(Request::is('*contact') ? 'active' : '')}}"><a href="{{route('dashboard.carrer.index')}}"><i class="icon-add"></i>
                                    {{__('All Carrer')}}
                                </a>
                            </li>
                        </ul>
                    </li>

   
                    


                    {{--
                     @can('application')
                    <li>
                        <a href="#"><i class=" icon-pencil "></i> <span>  {{__('application.application')}} </span></a>


                    <ul class="show-ul">
                        <li class="{{(Request::is(app()->getLocale().'/dashboard/application') ? 'active' : '')}}"><a href="{{route('dashboard.application.index')}}"><i class="icon-list"></i>
                                {{__('application.index')}}
                            </a>
                        </li>
                        @can('gapplication_add')
                        <li class="{{ (Request::is(app()->getLocale().'/dashboard/application/create') ? 'active' : '')}}"><a href="{{route('dashboard.application.create')}}"><i class="icon-add-to-list"></i>
                                {{__('blog.add')}} </a>
                        </li>
                        @endcan



                    </ul>


                    </li>
                    @endcan --}}


                    {{-- @can('allow')
                    <li>
                        <a href="#"><i class=" icon-pencil "></i> <span>  {{__('feature.feature')}} </span></a>


                    <ul class="show-ul">
                        <li class="{{(Request::is('dashboard/feature') ? 'active' : '')}}"><a href="{{route('dashboard.feature.index')}}"><i class="icon-list"></i>
                                {{__('feature.index')}}
                            </a>
                        </li>
                        @can('allow', 'dashboardblogs_add')
                        <li class="{{ (Request::is('dashboard/feature/create') ? 'active' : '')}}"><a href="{{route('dashboard.feature.create')}}"><i class="icon-add-to-list"></i>
                                {{__('feature.add')}} </a>
                        </li>
                        @endcan



                    </ul>


                    </li>
                    @endcan --}}


                    {{-- @can('allow')
                    <li>
                        <a href="#"><i class=" icon-pencil "></i> <span>  {{__('ourservices.service')}} </span></a>


                    <ul class="show-ul">
                        <li class="{{(Request::is('dashboard/ourservices') ? 'active' : '')}}"><a href="{{route('dashboard.ourservices.index')}}"><i class="icon-list"></i>
                                {{__('ourservices.index')}}
                            </a>
                        </li>
                        @can('allow')
                        <li class="{{ (Request::is('dashboard/ourservices/create') ? 'active' : '')}}"><a href="{{route('dashboard.ourservices.create')}}"><i class="icon-add-to-list"></i>
                                {{__('ourservices.add')}} </a>
                        </li>
                        @endcan



                    </ul>


                    </li>
                    @endcan --}}











                    <li class="navigation-header"><span> {{__('admin.messages')}} </span> <i class="icon-menu" title="Main pages"></i></li>
                    {{-- @can('allow')
 
                    <li class="{{(Request::is('dashboard/contacts') ? 'active' : '')}}">
                    <a href="{{asset('dashboard/contacts')}}"><i class="icon-envelop"></i> <span> {{__('contactus.index')}} </span>


                    </a>
                    </li>
                    @endcan --}}

                    {{--
                    @can('get_all_subscribers')
 
                    <li class="{{(Request::is('dashboard/contacts_subscriber') ? 'active' : '')}}">
                    <a href="{{ROUTE('dashboard.get_all_subscribers')}}"><i class="icon-users"></i> <span> {{__('contactus.get_all_subscribers')}} </span>

                    </a>
                    </li>
                    @endcan --}}

                    @can('allow')
                    <li class="navigation-header"><span> {{__('admin.users')}} </span> <i class="icon-menu" title="Main pages"></i></li>

                    <li>
                        <a href="#"><i class="icon-users2"></i> <span> {{__('admin.admins')}} </span></a>
                        <ul>
                            <li class="{{ (Request::is('dashboard/admins') ? 'active' : '')}}"><a href="{{route('dashboard.admins.index')}}"><i class="icon-list"></i> {{__('admins.admins')}} </a>
                            </li>
                            <li class="{{  (Request::is('dashboard/admins/create') ? 'active' : '')}}"><a href="{{route('dashboard.admins.create')}}"><i class="icon-user-plus"></i> {{__('admins.add')}}
                                </a></li>
                        </ul>
                    </li>

                    @endcan







                    @can('allow', 'dashboardgroups')
                    <li class="navigation-header"><span> {{__('admin.rolepermission')}} </span> <i class="icon-menu" title="Main pages"></i></li>

                    <li>
                        <a href="#"><i class="icon-lock2"></i> <span>{{__('groups')}} </span></a>
                        <ul>

                            <li class="{{(Request::is('dashboard/rolepermission') ? 'active' : '')}}">
                                <a href="{{route('dashboard.rolepermission.index')}}"><i class="icon-list"></i> {{__('rolepermission.index')}} </a>
                            </li>

                            @can('allow')

                            <li class="{{ (Request::is('dashboard/rolepermission/create') ? 'active' : '')}}"><a href="{{route('dashboard.rolepermission.create')}}"><i class="icon-user-plus"></i> {{__('rolepermission.add')}}
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </li>

                    @endcan



                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->