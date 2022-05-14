@extends('admin.layouts.layout')
@section('header')
@endsection
@section('title')
   MAIN HOME
@endsection

@section('content')


    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-warning has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <span class="text-uppercase text-size-mini">عدد المستخدمين</span>
                        <h3 class="no-margin">{{count(App\Models\User::all())}}</h3>

                    </div>

                    <div class="media-right media-middle">
                        <i class=" icon-users2 icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-danger has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <span class="text-uppercase text-size-mini">عدد اعضاء الاداره</span>
                        <h3 class="no-margin">{{count(App\Models\User::where('role','admin')->get())}}</h3>

                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-user-tie icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-sm-6 col-md-3">
                <div class="panel panel-body bg-green-700 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <span class="text-uppercase text-size-mini">عدد الرسائل</span>
                            <h3 class="no-margin">{{count(App\Models\Contacts::all())}}</h3>

                        </div>

                        <div class="media-right media-middle">
                            <i class="icon-envelop3 icon-3x"></i>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-info has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">  </h3>
                        <span class="text-uppercase text-size-mini">عدد الموظفين</span>
                        <br>
                        <h3 class="no-margin">{{count(App\Models\Employee::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-user-tie  icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-orange-400 has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد المجموعات </span>
                        <h3 class="no-margin">{{count(App\Models\Group::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-lock2 icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-brown-700 has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد الدول </span>
                        <h3 class="no-margin">{{count(App\Models\Country::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-feed icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-info-700 has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد المدن </span>
                        <h3 class="no-margin">{{count(App\Models\City::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-city icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-indigo-300 has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد  الإجراءات   </span>
                        <h3 class="no-margin">{{count(App\Models\Faqs::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-question4 icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-pink-400 has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد الوسائط   </span>
                        <h3 class="no-margin">{{count(App\Models\Gallery::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-media icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-warning-800  has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد الخدمات   </span>
                        <h3 class="no-margin">{{count(App\Models\Service::all())}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-server icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="panel panel-body bg-blue  has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin">   </h3>
                        <span class="text-uppercase text-size-mini">عدد الزوار النشطين الان   </span>
                        <h3 class="no-margin">{{$rtActiveMembers}}</h3>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-users4 icon-3x"></i>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row">


        <div class="col-md-6 ">
            <canvas class="panel panel-flat"  id="pages_and_visitors" width="400" height="600"></canvas>
            <div class="  panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">
                       المتصفحات المستخدمه لمشاهده الموقع
                    </h6>

                </div>

                <div id="piechart" style="width:100%; height: 500px;"  ></div>

            </div>
            <div class="  panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">
                       نوع الزوار
                    </h6>

                </div>

                <div id="donutchart" style="width: 100%; height:  500px;"></div>


            </div>
        </div>

        <div class="col-md-6  panel panel-flat  ">
            <div class="panel-heading">
                 <h6 class="panel-title">دول زوار الموقع خلال آخر 30 يوما  </h6>

            </div>
            <div id="regions_div"  ></div>
        </div>

        <div class="col-md-6 panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">
                    أكثر الصفحات زيارة خلال أخر 7 أيام
                </h6>

            </div>

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>  عنوان الصفحة</th>
                    <th>  عدد المشاهدات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($MostVisitedPages as $key=> $most)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td><a target="_blank" href="{{$most['url']}}">{{$most['pageTitle']}}</a> </td>
                        <td>{{$most['pageViews']}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
        <script>

            var ctx = document.getElementById('pages_and_visitors').getContext('2d');
            var myChart = new Chart(ctx, {

                type: 'bar',
                data: {
                    labels: [' اليوم  ', ' أمس   ', ' أول أمس   ', 'منذ اسبوع  ', 'منذ شهر   ' ],
                    datasets: [
                        {
                            label: 'عدد مشاهدات الصفحات',
                            data: [{{isset($days['today']['pageViews'])?$days['today']['pageViews']:0}},

                                {{isset($days['yesterday']['pageViews'])?$days['yesterday']['pageViews']:0}},

                                {{isset($days['beforeYesterday']['pageViews'])?$days['beforeYesterday']['pageViews']:0}},

                                {{isset($days['weekAgoPages'])?$days['weekAgoPages']:0}},
                                {{isset($days['monthAgoPages'])?$days['monthAgoPages']:0}},
                            ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1,
                            options: {
                                animation: {
                                    onProgress: function(animation) {
                                        progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
                                    }
                                }
                            }
                        }
                        , {
                            label: 'عدد زوار الموقع',

                            data: [{{isset($days['today']['visitors'])?$days['today']['visitors']:0}},

                                {{isset($days['yesterday']['visitors'])?$days['yesterday']['visitors']:0}},

                                {{isset($days['beforeYesterday']['pageViews'])?$days['beforeYesterday']['pageViews']:0}},

                                {{isset($days['weekAgoVisitors'])?$days['weekAgoVisitors']:0}},
                                {{isset($days['monthAgoVisitors'])?$days['monthAgoVisitors']:0}},
                            ],

                            backgroundColor: [
                                'rgba(255, 206, 86, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255, 206, 86, 1)',
                            ],
                            // Changes this dataset to become a line
                            type: 'line',
                            options: {
                                animation: {
                                    onProgress: function(animation) {
                                        progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
                                    }
                                }
                            }
                        }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'عدد مشاهدات الصفحات بالنسبة لزوار الموقع'
                    },
                    legend: {
                        display: false,
                    },
                    animation: {
                        duration: 5000,
                        xAxis: true,
                        yAxis: true,
                    }
                }

            });
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages':['geochart'],
                // Note: you will need to get a mapsApiKey for your project.
                // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
                // 'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                    ['Country', 'تعداد الزوار'],
                        @foreach($countryAnalytics as $countryAnalytic)
                    ['{{$countryAnalytic['country']}}',{{$countryAnalytic['sessions']}}],
                    @endforeach

                ]);

                var options = {
                    colorAxis: {colors: ['#dfe6e9','#74b9ff', '#a29bfe','#0984e3','#4374e0']} // orange to blue
                };

                var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Language', 'Speakers (in millions)'],
                        @foreach($fetchTopBrowsers as $fetchTopBrowser)
                    ['{{$fetchTopBrowser['browser']}}',{{$fetchTopBrowser['sessions']}}],
                        @endforeach

                ]);

                var options = {

                    legend: 'none',
                    pieSliceText: 'label',
                    slices: {  4: {offset: 0.2},
                        7: {offset: 0.3},
                        2: {offset: 0.1},
                        15: {offset: 0.5},
                        5: {offset: 0.3,color: '#DB7093' },
                    },
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                        @foreach($fetchUserTypes as $fetchUserType)
                            ['{{trans('website.'.$fetchUserType['type'])}}',{{$fetchUserType['sessions']}}],
                        @endforeach


                ]);

                var options = {
                    legend: 'none',
                    pieSliceText: 'label',

                    pieHole: 0.4,
                    slices: {
                        1: {offset: 0,color: '#07ABA0' },
                        0: {offset: 0,color: '#CA2C68' },
                    },
                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>
    </div>

@endsection
