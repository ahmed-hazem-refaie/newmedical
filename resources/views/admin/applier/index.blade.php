@extends('admin.layouts.layout')
@section('title')
{{__('applier.index')}}
@endsection

@section('header')

@endsection
@push('breadcrumb')

<li class="active"> <a href="{{route('dashboard.home')}}">{{__('all-setting')}}</a></li>

@endpush
@section('content')

<!-- Basic initialization -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title"> {{__('applier.index')}} </h5>
        <div class="heading-elements">
            <ul class="icons-list">

                <li><a data-action="reload"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">

        {{__('applier.index')}}
        
    </div>




    <table class="table datatable-button-init-basic" id="first">
        <thead>
            <tr>
                <th> # </th>
                <th> {{__('applier.name')}} </th>
                <th> {{__('applier.email')}} </th>
                <th> {{__('applier.phone')}} </th>
                {{-- <th> {{__('country')}} </th>
                <th> {{__('city')}} </th> --}}
                <th> {{__('applier.message')}} </th>
                <th> {{__('applier.process')}} </th>


            </tr>
        </thead>
        <tbody>
            @foreach($items as $key=>$item)
            <tr style="background:{{$item->seen== false ? '#e6a1a1':''}}">


                <td>{{$loop->index+1}}</td>
                <td>{{$item->name}}</td>
                <td>
                    {{$item->email}}
                </td>
                <td>
                    {{$item->phone}}
                </td>
                <td>
                    {{$item->country}}
                </td>

          
                

                

                {!!Form::open( ['route' => ['dashboard.career.applier.destroy',[$parent->id, $item->id]] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
                {!!Form::close() !!}

                {!!Form::open( ['route' => ['dashboard.togleactivationemodel'] ,'id'=>'activate-form'.$item->id, 'method' => 'post']) !!}
                {!! Form::hidden('modelname', get_class($item)) !!}
                {!! Form::hidden('modelid', $item->id) !!}
                {!!Form::close() !!}
                <td>
                    @can('dashboardappliers_edit')

                    <a href="{{route('dashboard.career.applier.show',[$parent->id,$item->id])}}" data-toggle="tooltip" data-original-title="show"> <i class="icon-eye text-inverse" style="margin-left: 10px"></i> </a>
                    @endcan


                    <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip" data-original-title="حذف"> <i class="icon-trash text-inverse text-danger" style="margin-left: 10px"></i> </a>

                    @can('dashboardappliers_activate')

                    <a hidden href="#" onclick="togleactive({{$item->id}})" data-toggle="tooltip" data-original-title="activate">
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
            swal({
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
                    swal(" Canceled", "Delete Item",'info',{buttons:'Agree'});
                }
            });
        }


        function togleactive(id) {
            var item_id=id;
            console.log(item_id);
            swal({
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
                    swal("{{__('done')}}", "{{__('canceled')}}",'info',{buttons:'{{__('agree')}}'});
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
