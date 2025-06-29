@extends('admin.layouts.master')

@section('title', 'KaleidoLearn | Lessons List')

<!-- page content -->
@section('content')

    <div class="right_col" role="main">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                {!! Breadcrumbs::render('lessons') !!}
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

                <div class="x_panel">

                    <div class="x_title">
                        <h2>Select Course</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="get" action="{{ route('course-lessons-list') }}">
                            <div class="col-md-8" style="margin-left: -120px;">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Course</label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        {{--<input type="hidden" id="token" name="_token" value="{{ Session::token() }}" style="width: 100%;">--}}
                                        <select name="course_id" id="course_id" class="select2_single form-control" tabindex="-1" >
                                            <option></option>
                                            @if($courses)
                                                @foreach($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-success btn-md" style="border-radius: 10px;">View Lessons</button>
                            </div>
                        </form>
                    </div>

                </div>
                @if(isset($lessons))
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Lessons List</h2>
                        <button type="button" class="pull-right btn btn-info btn-sm" data-toggle="modal" data-target="#addModal" style="border-radius: 15px; background-color: #f9c130; padding: 10x 15px; font-size: 15px; color: #fff; border: none;">
                            <img src="static/assets/images/number-shape-sun-mobile.svg" style="width: 20px; margin-right: 5px"/> Add New Lesson
                        </button>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        @if(count($courses)<1)
                            <div class="alert alert-dismissible fade in alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                No Data Found.
                            </div>
                        @else
                        <?php $index = 0; ?>
                        <table class="table table-striped table-bordered dataTable no-footer" id="data">
                            <thead style="background: #187847; color: #fff;">
                            <tr>
                                <th>No.</th>
                                <th>Lesson Number </th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $lesson)
                                <tr>
                                    <td><strong>{{ ++$index }}</strong></td>
                                    <td>
                                        <a href="{{ route('getLessonDetails',['id' => $lesson->id]) }}">
                                        Lesson - {{ $lesson->number }}
                                        </a>
                                    </td>
                                    <td>{{ $lesson->title }}</td>
                                    <td class="text-center">
                                        <button type="button"  style="border-radius: 5px; "
                                                data-id="{{ $lesson->id }}"
                                                data-number="{{ $lesson->number }}"
                                                data-title="{{ $lesson->title }}"
                                                data class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateModal">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>

                                      <a href="{{route('lesson-delete', ['course_id' => $course_id,'id'=>$lesson->id])}}" class="delete" title="Delete"><button type="button" class="btn btn-danger btn-sm" style="border-radius: 5px; background-color: #e23506"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                      <a href="{{route('getLessonDetails', ['id'=>$lesson->id])}}" title="Details"><button type="button" class="btn btn-primary btn-sm" style="border-radius: 5px; background-color: #2172b9"> Details</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>

                </div>
                @endif
            </div>
        </div>

    </div>
    <!--Update Modal -->
        <div class="modal fade" id="updateModal" role="dialog"  style="top:20%" >
            <div class="modal-dialog" style="background-color: #187847; border-radius: 10px;">
                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header" style="background-color: #187847; color: #fff; ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Details</h4>
                    </div>
                    <form action="{{ route('lesson-update') }}" method="post">
                    <div class="modal-body">
                            <div class="col-md-8">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <table class="table">
                                    <input type="hidden" name="modal_id" id="modal_id">
                                    <input type="hidden" name="course_id" value="<?php if(isset($course_id)) { echo $course_id; } ?>">
                                    <tr>
                                        <td colspan="2"><label>Lesson Number</label></td>
                                        <td colspan="2">
                                            <input type="text" name="number" class="form-control" id="modal_number" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Title</label></td>
                                        <td colspan="2">
                                            <input type="text" name="title" class="form-control" id="modal_title" >
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                    </form>
                    <div class="modal-footer"  style="background-color:rgb(255, 255, 255);">
                        <button type="submit" class="btn btn-default pull-right" style="background-color: #187847; color: #fff; border-radius: 10px;">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 10px;">Close</button>
                    </div>

                </div>

            </div>
        </div>
    {{--Update Modal End--}}

    <!--Add Modal -->
        <div class="modal fade" id="addModal" role="dialog"  style="top:20%" >
            <div class="modal-dialog" style="background-color: #187847; border-radius: 10px;">
                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header" style="background-color: #187847; color: #fff; ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Lesson</h4>
                    </div>
                    <form action="{{ route('lesson-add') }}" method="post">
                    <div class="modal-body">
                            <div class="col-md-8">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input type="hidden" name="course_id" value="<?php if(isset($course_id)) { echo $course_id; } ?>">
                                <table class="table">
                                    <tr>
                                        <td colspan="2"><label>Lesson Number</label></td>
                                        <td colspan="2">
                                            <input type="text" name="number" class="form-control"  >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Title</label></td>
                                        <td colspan="2">
                                            <input type="text" name="title" class="form-control" >
                                        </td>
                                    </tr>

                                </table>
                            </div>
                    </div>
                    </form>
                    <div class="modal-footer"   style="background-color:rgb(255, 255, 255);">
                        <button type="submit" class="btn btn-default pull-right" style="background-color: #187847; color: #fff; border-radius: 10px;">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 10px;">Close</button>
                    </div>

                </div>

            </div>
        </div>
    {{--add modal end--}}
@stop
<!-- /page content -->

@section('page_js')
    <script>
        $('#updateModal').on('show.bs.modal', function (e) {
            $('#modal_id').val($(e.relatedTarget).data('id'));
            $('#modal_number').val($(e.relatedTarget).data('number'));
            $('#modal_title').val($(e.relatedTarget).data('title'));
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#data').DataTable({
                dom: "Bfrtip",
                buttons: [
                    {
                        extend: "copy",
                        className: "btn-sm"
                    },
                    {
                        extend: "csv",
                        className: "btn-sm"
                    },
                    {
                        extend: "excel",
                        className: "btn-sm"
                    },
                    {
                        extend: "pdfHtml5",
                        className: "btn-sm"
                    },
                    {
                        extend: "print",
                        className: "btn-sm"
                    },
                ],
                responsive: true
            });
        });
    </script>
@stop