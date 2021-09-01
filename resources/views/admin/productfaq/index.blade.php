@extends('admin.layouts.layout')
@section('title')
    {{__('productfaq.index')}}
@endsection

@section('header')

@endsection 
@push('breadcrumb')

<li class="active">  <a href="{{route('dashboard.home')}}">{{__('all-setting')}}</a></li>

@endpush
@section('content')

    <!-- Basic initialization -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">      {{__('productfaq.index')}}            </h5>
            <div class="heading-elements">
                <ul class="icons-list">

                    <li><a data-action="reload"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            {{__('productfaq.index')}}
        <a href="{{route('dashboard.product.productfaq.create',$parent->id)}}">
                <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress ladda-button pull-right legitRipple" data-style="zoom-in">
                    <span class="ladda-label">  {{__('productfaq.add')}}    </span>
                    <span class="ladda-spinner"></span><span class="legitRipple-ripple" style="left: 53.8462%; top: 36.1111%; transform: translate3d(-50%, -50%, 0px); transition-duration: 0s; width: 220.274%;"></span></button>
            </a>
        </div>




        <table class="table datatable-button-init-basic" id="first">
            <thead>
            <tr>
                <th> # </th>

                <th> {{__('productfaq.title')}}     </th>
                <th> {{__('productfaq.description')}}     </th>

                <th> {{__('status')}}     </th>

                <th> {{__('productfaq.proces')}}     </th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $key=>$item)
                <tr>
                    <td>{{$loop->index+1}}</td>

                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>


                    
                    {!!Form::open( ['route' => ['dashboard.product.productfaq.destroy',[$parent->id,$item->id]] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
                    {!!Form::close() !!}

                    {!!Form::open( ['route' => ['dashboard.togleactivationemodel'] ,'id'=>'activate-form'.$item->id, 'method' => 'post']) !!}
                    {!! Form::hidden('modelname', get_class($item)) !!}
                    {!! Form::hidden('modelid', $item->id) !!}
                    {!!Form::close() !!}
                    <td>{{ statusstring($item->status)}}</td>

                    <td>

                        {{-- @can('dashboardblogs_comment')
                            
                        <a href="{{route('dashboard.product.productfaq.index',[$item])}}" data-toggle="tooltip" data-original-title="update"> <i class="fa fa-shopping-cart text-inverse" style="margin-left: 10px"></i> </a>
                        @endcan --}}
                        @can('dashboardblogs_edit')
                            
                        <a href="{{route('dashboard.product.productfaq.edit',[$parent->id,$item])}}" data-toggle="tooltip" data-original-title="update"> <i class="icon-pencil7 text-inverse" style="margin-left: 10px"></i> </a>
                        @endcan
                        @can('dashboardblogs_delete')
                            
                        <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip" data-original-title="delete"> <i class="icon-trash text-inverse text-danger" style="margin-left: 10px"></i> </a>
                        @endcan
                        @can('dashboardblogs_activate')
                            
                        <a href="#" onclick="togleactive({{$item->id}})" data-toggle="tooltip" data-original-title="activate">
                        @endcan
                        
                            @if($item->status)
                            <i class="fa fa-times text-inverse text-danger" style="margin-left: 10px"></i> 
                            @endif
                            @if(!$item->status)
                            <i class="icon-check text-inverse text-danger" style="margin-left: 10px"></i> 
                            @endif
    
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <!-- /basic initialization -->








    <script>
        function Delete(id) {
            var item_id=id;
            console.log(item_id);
            new swal({
                title: " Are You Sure ",
                text: "Do You Want To Delete Item?",
                icon: "warning",
                buttons: ["Cancel", "Agree"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('delete-form'+item_id).submit();
                }
                else{
                   new  swal(" Canceled", "Delete Item",'info',{buttons:'Agree'});
                }
            });
        }


        function togleactive(id) {
            var item_id=id;
            console.log(item_id);
           new swal({
                title: "{{__('areyousure')}}",
                text: "{{__('askchangeactivation')}}",
                icon: "warning",
                buttons: ["{{__('cancel')}}", "{{__('agree')}}"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('activate-form'+item_id).submit();
                }
                else{
                   new swal("{{__('done')}}", "{{__('canceled')}}",'info',{buttons:'{{__('agree')}}'});
                }
            });
        }
        
    </script>


@endsection

@section('script')
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/pages/datatables_extension_buttons_init.js')}}"></script>
@endsection
