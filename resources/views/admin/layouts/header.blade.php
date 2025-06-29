<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <title>@yield('title')</title>

    @include('admin.layouts.css')

    @yield('page_css')

</head>
<body class="nav-md">
<div class="loader"></div>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('dashboard') }}" class="site_title">
                        <img src="static/assets/images/Group-3w.svg" alt="Logo" class="logo" style="width: 200px;">
                    </a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ asset(Auth::user()->picture) }}" alt="user image" class="img-circle profile_img" style="margin-left: 20px; margin-top: 30px">
                    </div>
                    <div class="profile_info">
                        <span style="color: white">Welcome,</span>
                        <h2 style="font-weight: 1000; font-size: 20px; color:rgb(247, 255, 139);">{{ Auth::user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>