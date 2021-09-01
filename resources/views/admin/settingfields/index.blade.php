@extends('admin.layouts.layout')
@section('title')
    {{__('settingfields.index')}}
@endsection

@section('header')

@endsection 
@section('content')

    <!-- Basic initialization -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">      {{__('settingfields.index')}}            </h5>
            <div class="heading-elements">
                <ul class="icons-list">

                    <li><a data-action="reload"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            {{__('settingfields.index')}}
        <a href="{{route('dashboard.setting.field.create',[$setting])}}">
                <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress ladda-button pull-right legitRipple" data-style="zoom-in">
                    <span class="ladda-label">  {{__('settingfields.add')}}    </span>
                    <span class="ladda-spinner"></span><span class="legitRipple-ripple" style="left: 53.8462%; top: 36.1111%; transform: translate3d(-50%, -50%, 0px); transition-duration: 0s; width: 220.274%;"></span></button>
        </a>
        </div>




        <table class="table datatable-button-init-basic" id="first">
            <thead>
            <tr>
                <th> # </th>
                <th> {{__('settingfields.name')}}     </th>
                <th> {{__('settingfields.value')}}     </th>

                <th> {{__('settingfields.type')}}     </th>
                <th> {{__('settingfields.proces')}}     </th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $key=>$item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->value}}</td>
                    <td>{{$item->type}}</td>
                    {!!Form::open( ['route' => ['dashboard.setting.field.destroy',[$setting,$item->id]] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
                    {!!Form::close() !!}

                    <td>

                        <a href="{{route('dashboard.setting.field.edit',[$setting,$item])}}" data-toggle="tooltip" data-original-title="تعديل"> <i class="icon-pencil7 text-inverse" style="margin-left: 10px"></i> </a>
                        <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip" data-original-title="حذف"> <i class="icon-trash text-inverse text-danger" style="margin-left: 10px"></i> </a>

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

    </script>


@endsection

@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/datatables_extension_buttons_init.js')}}"></script>
@endsection
