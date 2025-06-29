@extends('admin.layouts.master')

@section('title', 'KaleidoLearn | My Courses List')

<!-- page content -->
@section('content')

    <div class="right_col" role="main">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                {!! Breadcrumbs::render('teacher_own_courses') !!}
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
                        <h2>My Courses List</h2>
                        <button type="button" class="pull-right btn btn-info btn-sm" data-toggle="modal" data-target="#addModal"
                        style="border-radius: 15px; background-color: #f05227; padding: 10x 15px; font-size: 15px; color: #fff; border: none;">
                            <img src="{{ asset('static/assets/images/persona-1-shape-3.svg') }}" style="width: 20px; margin-right: 5px"/>Add New Course
                        </button>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        @if(count($teacher_courses)<1)
                            <div class="alert alert-dismissible fade in alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                You do not handle any courses.
                            </div>
                        @else
                        <?php $index = 0; ?>
                        <table class="table table-striped table-bordered dataTable no-footer" id="data" style="border-radius: 10px;">
                            <thead style="background: #f9c130; color: #fff;">
                            <tr>
                                <th>No.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teacher_courses as $t_course)
                                <tr>
                                    <td><strong>{{ ++$index }}</strong></td>
                                    <td>{{ $t_course->course_title }}</td>
                                    <td>{{ $t_course->course_short_code }}</td>
                                    <td>{{ $t_course->created_at }}</td>
                                    <td class="text-center">
                                      <a href="{{route('my-courses-delete', ['id'=>$t_course->id])}}" class="delete" title="Delete"><button type="button" class="btn btn-danger btn-sm" style="border-radius: 5px; background-color: #e23506"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!--Add Modal -->
        <div class="modal fade" id="addModal" role="dialog" style="top:20%" >
            <div class="modal-dialog" style="background-color: #f9c130; border-radius: 10px;">
                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header" style="background-color: #f9c130; color: #fff; ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Course</h4>
                    </div>
                    <form action="{{ route('my-courses-add') }}" method="post">
                    <div class="modal-body">
                            <div class="col-md-8">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <table class="table">
                                    <tr>
                                        <td colspan="2"><label>Select Course</label></td>
                                        <td colspan="2">
                                            <select name="course" id="course" required class="form-control">
                                                @foreach($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                    </form>
                    <div class="modal-footer" style="background-color:rgb(255, 255, 255);">
                            <button type="submit" class="btn btn-default pull-right" style="background-color:#f9c130; color: #fff; border-radius: 10px;">Submit</button>
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
            $('#modal_department_id').val($(e.relatedTarget).data('department_id'));
            $('#modal_title').val($(e.relatedTarget).data('title'));
            $('#modal_short_code').val($(e.relatedTarget).data('short_code'));
            $('#modal_status').val($(e.relatedTarget).data('status'));
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