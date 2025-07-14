@extends('admin.layouts.master')
@section('title', 'KaleidoLearn | Dashboard')
@section('content')
        <!-- page content -->
<div class="right_col" role="main">
    @if(isset($errors))
        @if ( count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endif
    @if(\Session::has('msg'))

    @endif
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
            <div class="tile-stats"  style="background:rgb(243, 255, 240); border: 3px solid rgb(218, 233, 214);">
                <div class="icon"><i class="fas fa-chalkboard-teacher" style="color: green;"></i></i></div>
                <div class="count" style="color: green;">{{ $totalTeachers ?? 'N/A' }}</div>
                <h3 style="color: green;">Teachers</h3>
                <img src="{{ asset('static/assets/images/green-overlay.svg') }}" alt="Teachers Image" class="tile-image">
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats" style="background:rgb(255, 240, 246); border: 3px solid rgb(252, 208, 226);">
                <div class="icon"><i class="fa fa-users"  style="color: #f5a0c2;"></i></div>
                <div class="count" style="color: rgb(246, 142, 184)">{{ $totalStudents ?? 'N/A' }}</div>
                <h3 style="color:rgb(246, 142, 184);">Students</h3>
                <img src="{{ asset('static/assets/images/pink-overlay.svg') }}" alt="Teachers Image" class="tile-image">
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats" style="background:rgb(243, 240, 255); border: 3px solid rgb(192, 210, 227);">
                <div class="icon"><i class="fa fa-book"  style="color: #2172b9;"></i></div>
                <div class="count" style="color:rgb(14, 82, 141)">{{ $totalCourses ?? 'N/A' }}</div>
                <h3 style="color: rgb(14, 82, 141)">Courses</h3>
                <img src="{{ asset('static/assets/images/blue-overlay.svg') }}" alt="Blue Image" class="tile-image">
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats" style="background:rgb(254, 255, 240); border: 3px solid rgb(254, 236, 193);">
                <div class="icon"><i class="fa fa-graduation-cap"  style="color: #f9c130;"></i></div>
                <div class="count" style="color: #f9c130;">{{ $totalCertified ?? 'N/A' }}</div>
                <h3 style="color: #f9c130;">Certified Students</h3>
                <img src="{{ asset('static/assets/images/yellow-overlay.svg') }}" alt="Pink Image" class="tile-image">
            </div>
        </div>

    </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph">

                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>{{ date('F Y') }} Performance</h3>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div id="chart_plot_01" class="demo-placeholder"></div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                        <div class="x_title">
                            <h2>Best Performing Teachers</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6">
                            @foreach($topTeachers as  $teacher)
                            <div>
                                <p>{{ $teacher->name }}</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 100%;">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $teacher->point }}"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <br />
</div>
<!-- /page content -->

@stop
@section('page_js')
    <script>

        var arr_data1 = [
            {{ $studentGraphData }}
        ];

        var arr_data2 = [
            {{ $teacherGraphData }}
        ];

        var chart_plot_01_settings = {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        }
        if ($("#chart_plot_01").length){
            console.log('Plot1');

            $.plot( $("#chart_plot_01"), [ arr_data1, arr_data2 ],  chart_plot_01_settings );
        }
    </script>
@stop