@extends('admin.layouts.layout')
@section('title')
اضافة مجموعة جديدة


@endsection


@section('script')

    <script type="text/javascript" src="/admin/assets/js/pages/form_checkboxes_radios.js"></script>
@endsection


@section('header')

@endsection

@section('content')
    <!-- Vertical form options -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">اضافة مجموعة  جديدة</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">

                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    {!!Form::open( ['route' => 'dashboard.rolepermission.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
                        @include('admin.rolepermission.form')
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
<!-- #END# Basic Validation -->
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_layouts.js')}}"></script>
@endsection
