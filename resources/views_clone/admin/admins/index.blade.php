@extends('admin.layouts.layout')
@section('title')
  أعضاء الاداره
@endsection

@section('header')

@endsection
@section('content')

    <!-- Basic initialization -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> {{__('admins.index')}} </h5>
            <div class="heading-elements">
                <ul class="icons-list">

                    <li><a data-action="reload"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            {{__('admins.index_desc')}}
            <a href="{{route('dashboard.admins.create')}}">
                <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress ladda-button pull-right legitRipple" data-style="zoom-in">
                    <span class="ladda-label">  {{__('admins.add')}}   </span>
                    <span class="ladda-spinner"></span><span class="legitRipple-ripple" style="left: 53.8462%; top: 36.1111%; transform: translate3d(-50%, -50%, 0px); transition-duration: 0s; width: 220.274%;"></span></button>
            </a>
        </div>

        <table class="table datatable-button-init-basic">
            <thead>
            <tr>
                <th> # </th>
                <th> {{__('admins.name')}}  </th>
                <th> {{__('admins.email')}} </th>
                <th> {{__('admins.roles')}} </th>
                <th> {{__('admins.proces')}} </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$admin)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{ statusstring($admin->type == 1 )}}</td>

                    <td>{{join('-',$admin->roles->pluck('name')->toArray())}}</td>
                    {!!Form::open( ['route' => ['dashboard.admins.destroy',$admin->id] ,'id'=>'delete-form'.$admin->id, 'method' => 'Delete']) !!}
                    {!!Form::close() !!}


                    {!!Form::open( ['route' => ['dashboard.addOrRemove_admin'] ,'id'=>'activateadmin-form'.$admin->id, 'method' => 'post']) !!}
                     {!! Form::hidden('user_id', $admin->id) !!}
                    {!!Form::close() !!}


                    <td>
                        @can('edit_admins')
                        <a href="{{route('dashboard.admins.edit',[$admin])}}" data-toggle="tooltip" data-original-title="تعديل"> <i class="icon-pencil7 text-inverse" style="margin-left: 10px"></i> </a>
                            
                        @endcan

                        @can('delete_admins')
                            
                        <a href="#" onclick="Delete({{$admin->id}})" data-toggle="tooltip" data-original-title="حذف"> <i class="icon-trash text-inverse text-danger" style="margin-left: 10px"></i> </a>
                        @endcan



                        @can('add_admins')

                        <a href="#" onclick="addOrRemove_admin({{$admin->id}})" data-toggle="tooltip" data-original-title="activate">
                        
                            @if($admin->type  == 1)
                            <i class="fa fa-times text-inverse text-danger" style="margin-left: 10px"></i> 
                            @endif
                            @if(!$admin->type)
                            <i class="icon-check text-inverse text-danger" style="margin-left: 10px"></i> 
                            @endif
    
                        </a>
                        @endcan


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





        function addOrRemove_admin(id) {
            var item_id=id;
             swal({
                title: "{{__('areyousure')}}",
                text: "{{__('askchangeactivation')}}",
                icon: "warning",
                buttons: ["{{__('cancel')}}", "{{__('agree')}}"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('activateadmin-form'+item_id).submit();
                }
                else{
                    swal("{{__('done')}}", "{{__('canceled')}}",'info',{buttons:'{{__('agree')}}'});
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
