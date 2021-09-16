@extends('admin.layouts.layout')
@section('title')
  {{__("applier.add")}}
@endsection

@section('header')

@endsection
@push('breadcrumb')



@endpush
@section('content')
    <!-- Vertical form options -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">{{__("applier.show")}}  {{$item->name}}</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">

                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <h1>Vacancy JOB :- {{$item->carrer->title}}</h1>
                    <table>
                        <tr>
                            <td>
                                <h3>name</h3>
                            </td>
                            <td>
                                {{$item->name}}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>phone</h3>
                            </td>
                            <td>
                                {{$item->phone}}
                            </td>
                        </tr>

                        <tr>
                            <td><h3>email</h3></td>
                            <td>{{$item->email}}</td>
                        </tr>

                        <tr>
                            <td><h3>country</h3></td>
                            <td>{{$item->country}}</td>
                        </tr>

                        <tr>
                            <td><h3>address</h3></td>
                            <td>{{$item->address}}</td>
                        </tr>

                        <tr>
                            <td><h3>city</h3></td>
                            <td>{{$item->city}}</td>
                        </tr>
                        <tr>
                            <td><h3>gender</h3></td>
                            <td>{{$item->gender}}</td>
                        </tr>
                        <tr>
                            <td><h3>faculty</h3></td>
                            <td>{{$item->faculty}}</td>
                        </tr>
                        <tr>
                            <td><h3>grader</h3></td>
                            <td>{{$item->grade}}</td>
                        </tr>
                        <tr>
                            <td><h3>email</h3></td>
                            <td>{{$item->email}}</td>
                        </tr>

                        <tr>
                            <td><h3>cv</h3></td>
                            <td> <a href=" {{getImg($item->cv)}}" download=""> <i class="fa fa-download" ></i> </a></td>
                        </tr>

                    </table>
                    
                   
     
                    

                   <div class="my-msg">
                       {{$item->message}}
                   </div>
                </div>
            </div>
        </div>
    </div>
<!-- #END# Basic Validation -->
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_layouts.js')}}"></script>
@endsection
