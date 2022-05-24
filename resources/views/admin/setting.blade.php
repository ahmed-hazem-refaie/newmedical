@extends('admin.layouts.layout')
@section('title')
    {{$setting_with}}
@endsection
@push('breadcrumb')
    <li><a href="{{asset('/dashboard/all-settings')}}"><i class="fas fa-cogs position-left"></i>  {{__('admin.setting')}}  </a></li>

@endpush 

@section('content')


        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!!Form::open( ['route' => 'dashboard.setting.storevalue' , 'method' => 'Post','files'=>true]) !!}
               
                {!! Form::hidden('setting_id', $settings->id, []) !!}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">{{__('admin.setting')}} {{$setting_with}}</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="panel-body">

                        @foreach($settings->fields as $key=>$field)
                            @if($field->type == 1)
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->name}}  </label>
                                    {!! Form::text('field_'.$field->id,$field->value,['id'=>'text'.$key,'class'=>'form-control'])!!}
                                    <span class="bg-info">{{$field->validation_msg}}</span>
                                </div>
            
                                <div class="clearfix"></div>
                                <hr>


                            @elseif($field->type == 2)
                    
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->name}}  </label>
                                    {!! Form::textarea('field_'.$field->id,$field->value,['class'=>'form-control editortextarea','id'=>'text2'.$key])!!}
                                    <span class="bg-info">{{$field->validation_msg}}</span>

                                </div>
                                <div class="clearfix"></div>
                                <br>
                            @elseif($field->type == 3)

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="exampleInputEmail1">{{$field->name}}   </label>
                                            <img src="{{ getimg($field->value)}}" class="img-preview img-thumbnail">
                                        {!! Form::file('field_'.$field->id,['class'=>'form-control '])!!}
                                        <span class="bg-info">{{$field->validation_msg}}</span>

                                    </div>
                                <hr>
                                <hr>

                                @elseif($field->type == 33)

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->name}}   </label>
                                        <img src="{{ getimg($field->value)}}" class="img-preview img-thumbnail">
                                    {!! Form::file('field_'.$field->id,['class'=>'form-control '])!!}
                                    <span class="bg-info">{{$field->validation_msg}}</span>

                                </div>
                            <hr>
                            <hr>
                            @elseif( $field->type == 4 )

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->name}}   </label>
                                    @if ($field->value)
                                        
                                    <video src="{{ getimg($field->value)}}" class="img-preview img-thumbnail">
                                    @endif
                                </div>
                                {!! Form::file('field_'.$field->id,['class'=>'form-control '])!!}
                                <span class="bg-info">{{$field->validation_msg}}</span>

                                <hr>
                            @elseif($field->type == 9)

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1">{{$field->name}}  </label>

                                {!! Form::select('field_'.$field->id, [  'image'=>'image', 'video'=>'video','youtube'=>'youtube'] , $field->value,['class'=>'form-control '])!!}
                                <span class="bg-info">{{$field->validation_msg}}</span>

                            </div>
                            @elseif($field->type == 10)

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1">{{$field->name}}  </label>

                                {!! Form::select('field_'.$field->id, [  'hide'=>'hide', 'show'=>'show'] , $field->value,['class'=>'form-control '])!!}
                                <span class="bg-info">{{$field->validation_msg}}</span>

                            </div>

                            @elseif($field->type == 8)

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                             
                        
                                <label for="exampleInputEmail1">{{$field->name}}   </label>

                                {!! Form::select('field_'.$field->id, [  'image'=>'image', 'video'=>'video'] , $field->value,['class'=>'form-control '])!!}
                                <span class="bg-info">{{$field->validation_msg}}</span>

                            </div>
                            
                            <hr>
                            @elseif($field->type == 6)
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->title}}   </label>
                                        <img src="{{ getimg($field->ar_value)}}" class="img-preview img-thumbnail">
                                    {!! Form::file('field_'.$field->name.'[]',['class'=>'form-control '])!!}
                                    <span class="bg-info">{{$field->validation_msg}}</span>

                                </div>

                            @elseif($field->type == 5)
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->name}}  </label>
                                    {!! Form::number('field_'.$field->id,$field->value,['id'=>'text'.$key,'class'=>'form-control'])!!}
                                    <span class="bg-info">{{$field->validation_msg}}</span>

                                </div>
            
                                <div class="clearfix"></div>
                                <hr>

                            @elseif($field->type == 7)
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1">{{$field->name}}    </label>
                                {!! Form::text('field_'.$field->id,'',[ 'placeholder'=>$field->value?'UPLOADED':"NEED LINK",'class'=>'form-control '])!!}
                                <span class="bg-info">{{$field->validation_msg}}</span>

                            </div>

                            @else
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">{{$field->name}}    </label>
                                    {!! Form::text('field_'.$field->id,$field->value,['class'=>'form-control '])!!}
                                    <span class="bg-info">{{$field->validation_msg}}</span>

                                </div>
                            @endif



                        @endforeach
                        <div class="text-right">
                            <button type="submit" class="btn btn-success"> {{__('save')}} <i
                                    class="icon-arrow-left13 position-right"></i></button>
                        </div>
                        {!!Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

@endsection

@section('script')
    <script type="text/javascript" src="/admin/assets/js/pages/form_layouts.js"></script>
    <script src="{{asset('/admin/assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    {!! Html::script('/admin/ckeditor/ckeditor.js') !!}
    <script>
        // $(document).ready(function () {

        //     $(function () {
        //         $('textarea').each(function (e) {
        //             CKEDITOR.replace(this.id, {customConfig: '/jblog/ckeditor/config_Large.js'});
        //         });
        //     });

        //     $('select').select2();

        // });
    </script>

@endsection
