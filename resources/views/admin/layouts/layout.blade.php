<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{__('admin.title')}} -
        @yield('title')
    </title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="{{asset('admin/assets2/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets2/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets2/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets2/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets2/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets2/css/edits.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/tagsinput/bootstrap-tagsinput.css')}}">
    <!-- /global stylesheets -->

    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/loaders/blockui.min.js')}}"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    {{-- <link href="{{asset('admin/assets2/icon-picker/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet">--}}
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/pagination/bootpag.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/pagination/bs_pagination.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/pagination/datepaginator.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/ui/ripple.min.js')}}"></script>
    <script type="text/javascript" src="/admin/assets2/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="/admin/assets2/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="/admin/assets2/js/pages/form_layouts.js"></script>
    {{-- @include('sweet::alert')--}}
    <script type="text/javascript" src="{{asset('admin/assets2/js/plugins/ui/nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets2/js/pages/components_pagination.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('admin/assets2/js/pages/layout_fixed_custom.js')}}"></script>--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    <script type="text/javascript" src="/admin/assets2/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/admin/assets2/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
    <script type="text/javascript" src="/admin/assets2/js/plugins/tables/datatables/extensions/select.min.js"></script>
    <script type="text/javascript" src="/admin/assets2/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="/admin/assets2/js/pages/datatables_extension_buttons_print.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <script src="{{asset('admin/assets/tagsinput/bootstrap-tagsinput.js')}}"></script>
    {{-- <script src="{{asset('admin/assets/js/dist/js/hijri-date-picker.js')}}"></script> --}}
    @yield('header')



    <link type="text/css" rel="stylesheet" href="/image-uploader/src/image-uploader.css">
    <STYLE>
        body {
            font-family: 'Cairo', sans-serif;

        }
    </STYLE>
    <style>
        .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
            margin-left: 5px;
            margin-right: auto;
            background-color: #101af4;
        }

        .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
            color: white;
            margin: 2px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 11px;
        }

        .select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
            padding: 2px;
            padding-right: 8px;
            padding-left: 20px;
        }
    </style>

    <style>
        * {
            direction: ltr !important;
        }

        .text-semibold {
            position: absolute;
            right: 5px;
        }

        .panel-title {
            text-align: center;
        }

        th {
            text-align: left;
        }

        td {

            padding: 15px 0px 15px 36px !important;

        }

        .badge.badge-danger {
            position: absolute;
            right: 40px;
        }

        li a i {}

        .navigation li a>i {
            float: none;
            position: absolute;
            top: 11px;
            left: -3px !important;

        }

        .navigation li>.has-ul:after {
            /* transform: rotate(
            45deg
            ); */
            content: "\e943";
            font-family: "icomoon";
            font-size: 16px;
            display: block;
            position: absolute;
            top: 50%;
            margin-top: -8px;
            right: 20px;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
            /* -webkit-transition: -webkit-transform 0.2s ease-in-out;
            -o-transition: -webkit-transform 0.2s ease-in-out;
            transition: -webkit-transform 0.2s ease-in-out; */
        }

        .panel-body {
            /* display: flex;
            align-content: center;
            align-items: center; */
        }

        /* 
        .panel-body a {
            margin: 0 20px;
        } */


        .navigation>li ul li a {
            padding: 10px 40px;

        }

        .media-left,
        .media>.pull-left {
            padding: 0px;
        }


        .media-right,
        .media-body {

            vertical-align: middle;
        }

        .icon-pen.text-size-small {
            font-size: 12px;
            position: absolute !important;
            right: 69px;
            top: 15px;
        }

        .category-content {
            position: relative;
            padding: 22px 10px;
        }

        .nav.navbar-nav.navbar-right {
            padding: 0 !important;
        }

        @media (min-width: 1200px) {

            .col-lg-1,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12 {
                float: left;
            }
        }

        .media-body {
            left: 10px;
        }

        .media-heading.text-semibold {
            display: none;
        }

        label {
            display: block;
            padding: 0px 0 0px 0;
        }

        .dataTables_length>label>span:first-child {

            margin: 5px 20px;

        }

        .help-inline {
            margin: 0 !important;
            float: right;
        }

        .sidebar-control.sidebar-main-toggle.hidden-xs.legitRipple {
            display: none;
        }

        .dropdown-menu.dropdown-menu-right li a {
            float: left;
        }

        .img-circle {
            border-radius: 0;
            margin: 9px;
        }

        .dataTables_filter>label>span {
            float: left;

        }

        .navigation>li>a {
            padding: 12px 37px !important;

        }

        .page-title h4 {
            display: flex;
          
            align-items: center;
            justify-content: center;
        }
    </style>


    @yield('script')

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            {{--<a class="navbar-brand" href="/dashboard"><img src="/admin/assets2/images/logo.png" alt=""></a>--}}
            <a class="navbar-brand" href="{{url('/dashboard')}}"> {{__('admin.title')}} </a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            </ul>

            {{--<p class="navbar-text"><span class="label bg-success">متصل اﻵن</span></p>--}}

            <ul class="nav navbar-nav navbar-right">

                {{--<li class="dropdown language-switch">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown">--}}
                {{--<img src="{{asset('admin/assets2/images/flags/sa.png')}}" class="position-left" alt="">--}}
                {{--عربي--}}
                {{--</a>--}}
                {{--</li>--}}



                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span>{{__('admin.manager')}}</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" onclick="$('#logout').submit()"><i class="icon-switch2"></i> {{__('admin.logout')}}</a></li>
                        {!! Form::open(['route'=>'logout','id'=>'logout','class'=>'hide']) !!}
                        {!! Form::close() !!}
                    </ul>
                </li>


                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span>{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </li>



            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container " sty>

        <!-- Page content -->
        <div class="page-content">
            @include('admin.layouts.nav')
            <!-- Main content -->
            <div class="content-wrapper">
                @include('admin.layouts.breadcrumb')
                <!-- Content area -->
                <div class="content">


                    @yield('content')

                    <!-- Footer -->
                    <div class="footer text-muted text-center">

                        &copy; {{date('y')}}. <a href="">{{__('admin.developed')}}</a> {{__('admin.by')}} <a href="http://#" target="_blank"> {{__('admin.company')}} </a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->
    </div>

    <!-- /page container -->
    `
    <script src="{{asset('/')}}image-uploader/src/image-uploader.js"></script>

    <script>
        $('.image').imageUploader({
            'label': "Image Drager",
            'maxFiles': 1,
            'imagesInputName': 'image',
            'extensions': ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
        });
        // $('.en_image').imageUploader(
        //     {
        //         'label': '{{__('admin.imagedrag')}}',
        //         'maxFiles': 1,
        //         'imagesInputName':'image',
        //         'extensions':['.jpg', '.jpeg', '.png', '.gif', '.svg'],
        //     }
        // );

        // $('.images').imageUploader(
        //     {
        //         'label': '{{__('admin.imagedrag')}}',

        //     }
        // );

        $('.images').each((i, e) => {

            console.log(i, e)
            $(e).imageUploader({
                'label': "Image Drager",
                'maxFiles': 1,
                'imagesInputName': e.getAttribute('name'),
                'extensions': ['.jpg', '.jpeg', '.png', '.gif', '.svg'],

            });
        })
    </script>

    <script>
        $('select').select2();
    </script>



<script type="text/javascript" src="{{asset('/admin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>

    tinymce.init({
        selector: '.editortextarea',

        {{--        directionality: '{{ LaravelLocalization::getCurrentLocaleDirection() }}',--}}
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        automatic_uploads: true,
        image_advtab: true,
        convert_urls: false,
        // content_css: '//www.tiny.cloud/css/codepen.min.css',
        link_list: [
            {title: 'My page 1', value: 'http://www.tinymce.com'},
            {title: 'My page 2', value: 'http://www.moxiecode.com'}
        ],
        image_list: [
            {title: 'My page 1', value: 'http://www.tinymce.com'},
            {title: 'My page 2', value: 'http://www.moxiecode.com'}
        ],
        image_class_list: [
            {title: 'None', value: ''},
            {title: 'Some class', value: 'class-name'}
        ],
        importcss_append: true,
        automatic_uploads: true,

        images_upload_url: '/api/upload',

        file_picker_types: 'image',

        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/api/upload');
            xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");

            xhr.onload = function () {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(json.location);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        },
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function () {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    // call the callback and populate the Title field with the file name
                    cb(blobInfo.blobUri(), {title: file.name});
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
        ,
        height: 400,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: 'sliding',
        contextmenu: "link image imagetools table",
    });


    tinymce.init({
        selector: '.editortextarea2',

{{--        directionality: '{{ LaravelLocalization::getCurrentLocaleDirection() }}',--}}
        // plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        // imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        automatic_uploads: true,
        // image_advtab: true,
        convert_urls: false,
        // content_css: '//www.tiny.cloud/css/codepen.min.css',
        link_list: [
            {title: 'My page 1', value: 'http://www.tinymce.com'},
            {title: 'My page 2', value: 'http://www.moxiecode.com'}
        ],
        image_list: [
            {title: 'My page 1', value: 'http://www.tinymce.com'},
            {title: 'My page 2', value: 'http://www.moxiecode.com'}
        ],
        image_class_list: [
            {title: 'None', value: ''},
            {title: 'Some class', value: 'class-name'}
        ],
        importcss_append: true,
        automatic_uploads: true,

        images_upload_url: 'api/upload',

        file_picker_types: 'image',

        images_upload_handler: function (blobInfo, success, failure) {

            alert('Not Allowed')
            return
        },
        file_picker_callback: function (cb, value, meta) {

            alert('Not Allowed')
            return
        }
        ,
        height: 400,
        image_caption: false,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: 'sliding',
        contextmenu: "link   table",
    });


</script>


    @stack('scripts')

    {{-- @include('sweet::alert') --}}
    @include('sweetalert::alert')

</body>

<style>
    #cke_text29{
        display: flex;
        direction: ltr !important;
    }
    .cke_inner {
        border:  1px solid gray;
    }
</style>

</html>