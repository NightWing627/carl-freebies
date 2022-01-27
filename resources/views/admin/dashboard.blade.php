@extends('layouts.admin')

@section('content')
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="fa fa-laptop"></i>Dashboard</li>
              </ol>
            </div>
          </div>

          <div class="flash-message">
            @if(\Session::has('message'))
            <p class="alert
            {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message') }}</p>
            @endif
          </div> 
  
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="info-box blue-bg">
                <i class="fa fa-cloud-download"></i>
                <div class="count">{{ $category_count }}</div>
                <div class="title">Categories</div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="info-box brown-bg">
                <i class="fa fa-users"></i>
                <div class="count">{{ $user_count }}</div>
                <div class="title">Users</div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="info-box dark-bg">
                <i class="fa fa-question"></i>
                <div class="count">{{ $freebies_count }}</div>
                <div class="title">Freebies</div>
              </div>
            </div> 
          </div>
        </section>
      </section>
      <!--main content end-->
@endsection