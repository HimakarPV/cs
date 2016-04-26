<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="autor" content="">
	<title>ADMIN</title>

 {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js')!!}
 <script src="js/tether.min.js"></script>
 {!!Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}

</head>

<body ng-app="adminAngularApp" ng-controller="adminController">
  <div id="cl-wrapper" style="opacity: 1; margin-left: 0px;">
    <div class="cl-sidebar">
      <div class="cl-toggle"><i class="fa fa-bars"></i></div>
      <div class="cl-navblock">
        <div class="menu-space">
          <div class="content">
            <!-- <div class="sidebar-logo">
            <h3 style="margin: 0; padding-top: 5px; color: #fff;">{{Auth::user()->name}}</h3>
          </div> -->
          <div class="side-user">
            <div class="avatar"><img src="uploads/avatar6.jpg" alt="Avatar"></div>
            <div class="info">
              <h3 style="margin: 0;">{{Auth::user()->name}}</h3>
                <!-- <p>40 <b>GB</b> / 100 <b>GB</b><span><a href="#"><i class="fa fa-plus"></i></a></span></p>
                <div class="progress progress-user">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">50% Complete (success)</span>
                  </div>
                </div> -->
              </div>
            </div>
            <ul class="leftnav">
              <li class="parent dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-home"></i><span>Dashboard</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="active"><a href="index.html">Version 1</a></li>
                  <li><a href="#">Version 2</a></li>
                </ul>
              </li>

              

              <li class="parent"><a href="#"><i class="fa fa-desktop"></i><span>Categories</span></a>
                <ul class="sub-menu">
                  <li><a href="#"><span class="label label-primary pull-right">New</span>Boxed Layout</a></li>
                  <li><a href="#"><span class="label label-primary pull-right">New</span>Top Menu</a></li>
                </ul>
              </li>
              
              <li class="parent" ng-repeat="item in items" ng-click="showSubMenu(item,$index)">
                <a href="#" role="button"><i class="fa fa-home"></i><span><% item.title %></span></a>
              </li>
              
              <ul class="list-unstyled">
                <li class="active" ng-repeat="item in sublinks">
                  <a class="text-center" role="button" ng-href="<% item.href %>" target="<% item.target %>" ><% item.title %></a>
                </li>
              </ul>

              <li class="parent"><a href="#"><i class="fa fa-list-alt"></i><span>Forms</span></a>
                <ul class="sub-menu">
                  <li><a href="#">Components</a></li>
                  <li><a href="#"><span class="label label-primary pull-right">New</span>Multiselect</a></li>
                  <li><a href="#">Validation</a></li>
                  <li><a href="#">Wizard</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="pcont">
      <nav class="navbar navbar-default navbar-static-top ">
        <div class="container" style="padding-top:7px;padding-bottom:7px">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Admin Panel</a> -->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
            <li><a href="{{route('admin.index')}}">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check())
            <li><a href="{{route('auth.login')}}">Login</a></li>
            <li><a href="{{route('auth.register')}}">Register</a></li>
            @else
            <li><a href="{{route('authenticated.logout')}}">Logout</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <div class="bodycontainer">
     @yield('content')
   </div>
 </div>
</div>
</body>


{!! Html::style('css/app.css') !!}
{!! Html::style('css/main.css') !!}


<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> 
<script src="js/admin.js"></script>
<script src="js/controller/adminCtrl.js"></script>
<script src="js/services/adminService.js"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-
awesome.min.css">


</html>