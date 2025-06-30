@extends('admin.layouts.master')
@section('title', 'KaleidoLearn | Courses')
@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">

        <div class="clearfix"></div>
    @if(count($studentCourses)>0)
        <div class="row">
            <div class="col-md-12">
                {!! Breadcrumbs::render('coursesForStudents') !!}
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Currently In Progress <small> See what you're currently working on. </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            @foreach($studentCourses as $sCourse)
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{ url($sCourse->teacher_course->course->featured_image) }}" alt="image" />
                                            <div class="mask">
                                                <p>{{ $sCourse->teacher_course->course->short_code }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('student-course-details',['teacher_course_id' => $sCourse->teacher_course->id]) }}">
                                        <div class="caption">
                                            {{ $sCourse->teacher_course->course->title }}
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {!! $studentCourses->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
        <div class="clearfix"></div>

    @if(count($trendingCourses)>0)
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Featured Courses <small> Check out the courses most popular with others. </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            @foreach($trendingCourses as $tCourse)
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{ url($tCourse->teacher_course->course->featured_image) }}" alt="image" />
                                            <div class="mask">
                                                <p>{{ $tCourse->teacher_course->course->short_code }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('student-course-details',['teacher_course_id' => $tCourse->teacher_course->id]) }}">
                                        <div class="caption">
                                           <p>{{ $tCourse->teacher_course->course->title }}</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {!! $trendingCourses->render() !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
        <div class="clearfix"></div>
    @if(count($AllCourses)>0)
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All Courses <small> Browse all available courses. </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            @foreach($AllCourses as $aCourse)
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{ url($aCourse->course->featured_image) }}" alt="image" />
                                        <div class="mask">
                                            <p>{{ $aCourse->course->short_code }}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('student-course-details',['teacher_course_id' => $aCourse->id]) }}">
                                    <div class="caption">
                                        <p>{{ $tCourse->teacher_course->course->title }}</p>
                                    </div>
                                    </a>    
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {!! $AllCourses->render() !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    </div>
</div>
<!-- /page content -->

@stop