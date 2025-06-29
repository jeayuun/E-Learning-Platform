<?php
$user_type =  \Illuminate\Support\Facades\Auth::user()->user_type;
$teacher = \App\Libraries\Enumerations\UserTypes::$TEACHER;
$student = \App\Libraries\Enumerations\UserTypes::$STUDENT;
$admin = \App\Libraries\Enumerations\UserTypes::$ADMIN;

?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="{{Route::currentRouteName()=='dashboard' ? 'active' : ''}}"><a href="{{ Route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                    @if($user_type == $admin)
                 <h3 style="color: white;">Administration</h3>
                 <li>
                      <a><i class="fas fa-users-cog w-5 sidebar-icon" style="margin-right: 17px"></i> Teacher <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li class="{{Route::currentRouteName()=='teachers-list' ? 'active' : ''}}"><a href="{{Route('teachers-list')}}"><img src="static/assets/images/flower.svg" style="width: 20px; margin-right: 5px"/></i> Manage Teachers </a></li>
                      </ul>
                 </li>
                    @endif
                    @if($user_type == $admin || $user_type == $teacher)
                 <li>
                      <a><i class="fa-regular fa-address-book w-5 sidebar-icon" style="margin-right: 22px"></i> Student <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        @if($user_type == $admin)
                      <li class="{{Route::currentRouteName()=='students-list' ? 'active' : ''}}"><a href="{{Route('students-list')}}"><img src="static/assets/images/persona-1-shape-3.svg" style="width: 20px; margin-right: 5px"/></i> Manage Students </a></li>
                        @endif
                        @if($user_type == $teacher)
                      <li class="{{Route::currentRouteName()=='getTeacherStudentsListPage' ? 'active' : ''}}"><a href="{{Route('getTeacherStudentsListPage')}}"><img src="static/assets/images/number-shape-polygon-mobile.svg" style="width: 20px; margin-right: 5px"/></i> My Students </a></li>
                        @endif

                      </ul>
                 </li>
                    @endif
                    @if($user_type == $admin)
                 <li>
                      <a><i class="fa-solid fa-bookmark" aria-hidden="true" style="margin-right: 27px"></i> Subject <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li class="{{Route::currentRouteName()=='departments-list' ? 'active' : ''}}"><a href="{{Route('departments-list')}}"><img src="static/assets/images/flower-center2.svg" style="width: 20px; margin-right: 5px"/></i> Manage Subjects </a></li>
                      </ul>
                 </li>
                    @endif
                    @if($user_type == $teacher)
                 <li>
                      <a><i class="fa-solid fa-bookmark" aria-hidden="true" style="margin-right: 27px"></i> Subject <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li class="{{Route::currentRouteName()=='departments-list' ? 'active' : ''}}"><a href="{{Route('departments-list')}}"><img src="static/assets/images/flower-center2.svg" style="width: 20px; margin-right: 5px"/></i> View Subjects </a></li>
                      </ul>
                 </li>
                    @endif
                 <li>
                      <a><i class="fas fa-book w-5 sidebar-icon" style="margin-right: 25px"></i> Course <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      @if($user_type == $admin)
                      <li class="{{Route::currentRouteName()=='courses-list' ? 'active' : ''}}"><a href="{{Route('courses-list')}}"><img src="static/assets/images/number-shape-polygon-mobile.svg" style="width: 20px; margin-right: 5px"/> </i> Manage Courses </a></li>
                      @endif
                      @if($user_type == $teacher)
                      <li class="{{Route::currentRouteName()=='courses-list' ? 'active' : ''}}"><a href="{{Route('courses-list')}}"><img src="static/assets/images/number-shape-polygon-mobile.svg" style="width: 20px; margin-right: 5px"/> </i> All Courses </a></li>
                      @endif
                      @if($user_type == $admin)
                          <li class="{{Route::currentRouteName()=='courses-listing-settings' ? 'active' : ''}}"><a href="{{ route('courses-listing-settings') }}"><img src="static/assets/images/persona-1-shape.svg" style="width: 20px; margin-right: 5px"/> </i> Popular Courses </a></li>
                      @endif
                      @if($user_type == $teacher)
                      <li class="{{Route::currentRouteName()=='my-courses-list' ? 'active' : ''}}"><a href="{{Route('my-courses-list')}}"><img src="static/assets/images/persona-1-shape-3.svg" style="width: 20px; margin-right: 5px"/> My Courses </a></li> 
                      @endif
                     @if($user_type == $student)
                      <li class="{{Route::currentRouteName()=='student-courses-list' ? 'active' : ''}}"><a href="{{Route('student-courses-list')}}"><img src="static/assets/images/persona-1-shape-3.svg" style="width: 20px; margin-right: 5px"/></i>  Courses </a></li>
                      <li class="{{Route::currentRouteName()=='logged-student-courses-list' ? 'active' : ''}}"><a href="{{ route('logged-student-courses-list') }}"><img src="static/assets/images/flower.svg" style="width: 20px; margin-right: 5px"/></i> My Courses </a></li>
                     @endif
                      </ul>
                 </li>
                    @if($user_type == $teacher)
                <li>
                    <a><i class="fa fa-file-text-o"></i> Course Lessons <span class="fa fa-chevron-down"></span></a> 
                    <ul class="nav child_menu">
                        <li class="{{Route::currentRouteName()=='course-lessons-list' ? 'active' : ''}}"><a href="{{Route('course-lessons-list')}}"><img src="static/assets/images/number-shape-sun-mobile.svg" style="width: 20px; margin-right: 5px"/> Lessons List </a></li>
                    </ul>
                </li>
                    @endif
                    @if($user_type == $teacher)
                <li>
                    <a><i class="fa fa-question"></i> Questions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li class="{{Route::currentRouteName()=='question-list' ? 'active' : ''}}"><a href="{{Route('question-list')}}"><i class="fa fa-question"></i> View Questions </a></li>
                        <li class="{{Route::currentRouteName()=='question-make' ? 'active' : ''}}"><a href="{{Route('question-make')}}"><i class="fa fa-plus"></i> Make Question File </a></li>
                        <li class="{{Route::currentRouteName()=='getAllQuestionFiles' ? 'active' : ''}}"><a href="{{Route('getAllQuestionFiles')}}"><i class="fa fa-list-alt"></i> Question File List</a></li>
                    </ul>
                </li>
                    @endif
                    @if($user_type == $teacher)
                <li>
                    <a><i class="fa fa-sticky-note"></i> Exam <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        @if($user_type == $teacher)
                        <li class="{{Route::currentRouteName()=='getExamListPage' ? 'active' : ''}}"><a href="{{ route('getExamListPage') }}"><img src="static/assets/images/number-shape-polygon-mobile.svg" style="width: 20px; margin-right: 5px"/> List of Exams </a></li>
                        <li class="{{Route::currentRouteName()=='getExamCreatePage' ? 'active' : ''}}"><a href="{{ route('getExamCreatePage') }}"><img src="static/assets/images/persona-1-shape-3.svg" style="width: 20px; margin-right: 5px"/> Create Exam </a></li>
                        <li class="{{Route::currentRouteName()=='getStudentExamSubmissionsByCourse' ? 'active' : ''}}"><a href="{{ route('getStudentExamSubmissionsByCourse') }}"><img src="static/assets/images/flower.svg" style="width: 20px; margin-right: 5px"/> Submissions </a></li>
                        @endif
                    </ul>
                </li>
                    @endif

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <style>
                body {
                    background-color: #F5F7FA; 
                    font-family: 'Poppins', sans-serif;
                }

                .main_menu_side {
                    background-color: #2172b9;
                    overflow-y: auto; 
                }
                .profile.clearfix {
                    background-color: #2172b9;
                    display: flex;
                }
                .navbar.nav_title {
                    background-color: #2172b9;
                    border: 0 !important;
                    padding: 15px 0;
                }
                #sidebar .toggle-button-container {
                    position: absolute;
                    right: 10px;
                    top: 10px;
                    z-index: 10;
                }
                #sidebar .toggle-button-container button {
                    background-color: #6366f1;
                    color: #ffffff;
                    border-radius: 8px;
                    padding: 8px;
                    transition: background-color 0.2s ease;
                }
                #sidebar .toggle-button-container button:hover {
                    background: #478cc8;
                }


                .menu_section h3 {
                    text-transform: uppercase;
                    font-size: 0.9em; 
                    letter-spacing: 0.05em;
                    margin-bottom: 15px;
                    padding-top: 15px; 
                }

                .side-menu {
                    padding: 0;
                    margin: 0;
                    padding-left: 10px;
                    padding-right: 10px;
                    position: fixed;
                }

                .side-menu > li:hover {
                    text-shadow: rgba(195, 195, 195, 0.25) 0 -1px 0;
                    background: #478cc8;
                    box-shadow: rgba(188, 188, 188, 0.25) 0 1px 0, inset rgba(255, 255, 255, 0.392) 0 1px 0;
                    border-radius: 10px; 
                }

                .side-menu > li.active > a {
                    background: #478cc8;
                    color: #ffffff; 
                    font-weight: 700; 
                    border-radius: 10px;
                }

                .side-menu > li > a i {
                    font-size: 1.3em; 
                    margin-right: 12px; 
                }

                .side-menu ul.child_menu {
                    background-color: #61c8e2;
                    border-radius: 10px;
                    padding: 10px 0;
                    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.03); /* Very subtle inner shadow */
                }

                .side-menu ul.child_menu li a {
                    color:#105490;
                    font-weight: 1000;
                    border-radius: 6px;
                }

                .side-menu ul.child_menu li:hover > a, .side-menu ul.child_menu li.active > a {
                    background:rgb(140, 225, 247);
                    font-weight: 600;
                    margin-right: 10px;
                    border-radius: 10px;
                }

                .side-menu .fa-chevron-down {
                    float: right;
                    color: white; 
                    transition: transform 0.2s ease, color 0.2s ease;
                }

                .side-menu li.active > a .fa-chevron-down {
                    transform: rotate(90deg);
                    margin-top: -4px;
                }

                .tile-stats {
                    border: none;
                    border-radius: 15px;
                    padding: 20px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
                    transition: all 0.3s ease;
                    text-align: center;
                    height: 270px;
                    display: flex;
                    justify-content: center;        
                    align-items: center;
                    border-radius: 20px;
                    overflow: hidden;
                    aspect-ratio: 1 / 1;
                }

                .tile-stats .tile-image {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover; 
                    opacity: 1; 
                    transition: opacity 0.3s ease; 
                }

                .tile-stats .icon {
                    top: 20%; 
                    left: 45%; 
                    transform: translate(-50%, -50%); 
                    font-size: 5rem;
                }

                .tile-stats .icon i {
                    font-size: 48px;
                    margin-bottom: 10px;
                }

                .tile-stats .count {
                    font-size: 3.5em;
                    font-weight: 1000;
                    line-height: 1;
                    margin-top:40px
                }

                .tile-stats h3 {
                    font-size: 1.2em;
                    margin-top: 5px;
                    font-weight: 700;
                    margin-top:40px
                }
            </style>

@include('admin.layouts.top_nav')