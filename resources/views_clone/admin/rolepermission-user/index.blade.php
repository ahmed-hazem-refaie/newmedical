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

            {!!Form::open( ['route' => 'dashboard.change-rolepermission-user' ,'class'=>'form phone_validate', 'method' => 'Post','files' => false]) !!}

 
            <label for=""> {{__('rolepermission-user.changerole') }}</label>

            <div class="text-center col-xs-12">
                <div class="text-right">
                    <button type="submit" class="btn btn-success">{{{__('admin.save')}}} <i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </div>

            {!! Form::hidden('basicrole', $role->id, []) !!}
            {!! Form::select('newrole', $roles->pluck('name','id'), null, ['required'=>true]) !!}


            {!! Form::close() !!}
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
                    <td>{{join('-',$admin->roles->pluck('name')->toArray())}}</td>
                    {!!Form::open( ['route' => ['dashboard.admins.destroy',$admin->id] ,'id'=>'delete-form'.$admin->id, 'method' => 'Delete']) !!}
                    {!!Form::close() !!}
                    <td>
                        @can('edit admins')
                        <a href="{{route('dashboard.admins.edit',[$admin])}}" data-toggle="tooltip" data-original-title="تعديل"> <i class="icon-pencil7 text-inverse" style="margin-left: 10px"></i> </a>
                            
                        @endcan

                        @can('delete admins')
                            
                        <a href="#" onclick="Delete({{$admin->id}})" data-toggle="tooltip" data-original-title="حذف"> <i class="icon-trash text-inverse text-danger" style="margin-left: 10px"></i> </a>
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

    </script>


@endsection
@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/datatables_extension_buttons_init.js')}}"></script>
@endsection
