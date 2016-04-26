<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Crime Stopper">
  <meta name="author" content="Himakar">

  <title>Crime Stoppers</title>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome.min.css">
  {!! Html::style('css/custom.css') !!}

  <!--    HTML5 Shim and Respond.js for IE8 support -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<body ng-app="angularApp">

  <!-- Header begins here -->
  <nav class="navbar navhead navbar-default navbar-fixed-top purple">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12 ">
          <div class="navbar-header text-center">
            <div class="row">
              <div class=" col-md-4"></div>
              <div class="col-xs-8 col-md-4">
                <h1><span>CRIME STOPPERS</span></h1>
              </div>
              <div class="col-xs-4">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidenav" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="col-xs-7 col-md-2"></div>
              <div class="col-xs-5 col-md-2"></div>
            </div>
          </div>

          <div id="sidenav" class="collapse navbar-collapse text-center pull-right">
            <ul class="nav navbar-nav"> <li><a class="menu-border" href="{{url('/')}}">Home</a></li></ul>
            <ul class="nav navbar-nav"><li><a class="menu-border" href="{{url('index1')}}">Report Crime Information</a></li></ul>
            <ul class="nav navbar-nav"><li><a class="menu-border" href="">Help / Solve CRIME</a></li></ul>
            <ul class="nav navbar-nav"><li><a class="menu-border" href="">Current Focus</a></li></ul>
            <ul class="nav navbar-nav"><li><a class="menu-border" href="">Media Center</a></li></ul>
            <ul class="nav navbar-nav"><li><a class="menu-border" href="{{url('contact')}}">Contact Us</a></li></ul>
            <ul class="nav navbar-nav"><li><a style="color:white" class="menu-border" href="">MAKE A DONATION</a></li></ul>
            <ul class="nav navbar-nav"><li><a style="color:white" class="menu-border" href="{{url('login')}}">LOGIN</a></li></ul>
            <ul class="nav navbar-nav">
              <li style="bottom:23px ;">
                <h5 style="font-size:17px">Call Us <a href=""><span class="glyphicon glyphicon-earphone"></span></a></h5><h5 style="font-size:17px">080-123456789</h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Header begins here -->

  <main>
    @yield('content')
  </main>

  <!-- Footer begins here -->

  <nav class="navbar navbar-inverse navbar-default navbar-fixed-bottom p-a-3">
    <div style="display:inline-block;width:100%;">
      <div class="col-xs-12 col-md-2 ">
        <ul class="list-unstyled">
          <li style="color:rgba(255,255,255,0.5)">Company</li>
        </ul>
        <ul class="list-unstyled">
          <li><a href="">About Us</a></li>
          <li><a href="">Donate</a></li>
          <li><a href="">Become Volunteer</a></li>
          <li><a href="">Rport Crime</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-2 ">
        <ul class="list-unstyled">
          <li style="color:rgba(255,255,255,0.5)">Support</li>
        </ul>
        <ul class="list-unstyled">
          <li><a href="">FAQ</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-3 " style="
      ">
      <ul class="list-unstyled">
        <li style="color:rgba(255,255,255,0.5)">Get Our App On</li>
      </ul>
      <ul class="list-inline">
        <li><a href=""><img class="center-block" src="/uploads/googlePlayBadge.png" alt="GOOGLE PLAY STORE" width="90px"></a></li>
        <li><a href=""><img class="center-block" src="/uploads/appStoreBadge.png" alt="APPLE STORE" width="90px"></a></li></ul>
        <ul class="list-unstyled">        <li>
          <div class="col-md-12 nopadlr">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Mobile Number" style="border-radius: 0;border: mediumpurple solid 1px;border-right-style: none;background-color: transparent;">
              <span class="input-group-btn"><button class="btn btn-secondary searchbutton" type="button">Get Link!</button>
              </span>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-xs-12 col-md-5">
      <ul class=" list-inline" style="
      ">
      <li style="padding:0"> <a class="btn btn-primary btn-xs" href=""> <em><img src="/uploads/phone.png" alt="Phone" width="20px"></em> <div class="content"> <span class="standout">Call 1800 22 3344</span> <div class="subText">24 X 7</div> </div> </a> </li>
      <li style="padding:0"> <a class="btn btn-primary btn-xs" href="" target="_blank"> <em><img src="/uploads/chat.png" alt="Chat" width="20px"></em> <div class="content"> <span class="standout">Chat online</span> <div class="subText">3pm - 12am / 7 days a week</div> </div> </a> </li>

      <li style="padding:0"> <a class="btn btn-primary btn-xs" href="" target="_blank"> <em><img src="/uploads/email.png" alt="Email" width="20px"></em> <div class="content"> <span class="standout">Email us</span> <div class="subText">Get a response in 24 Hrs</div> </div> </a> </li>
    </ul>
  </div>
</div>

<div class="col-xs-12 col-md-4 " style="">
  <ul class="list-unstyled">
    <li></li>
  </ul>
  <ul class="list-unstyled">
    <li style="color:rgba(255,255,255,0.5)">Copyrights 2016 all rights reserved Himakar</li>
  </ul>
</div>
<div class="col-xs-12 col-md-3 " style="">
  <ul class="list-unstyled">
    <li></li>
  </ul>
  <ul class="list-unstyled">
    <li style="color:rgba(255,255,255,0.5)"><a href="">Privacy &amp; Policy Statement</a></li>
  </ul>
</div>
<div class="col-xs-12 col-md-2 " style="">
  <ul class="list-unstyled">
    <li></li>
  </ul>
  <ul class="list-unstyled">
    <li style="color:rgba(255,255,255,0.5)"><a href="">Terms &amp; Conditions</a></li>
  </ul>
</div>
<div class="col-xs-12 col-md-3 ">

  <ul class="list-inline">
    <li style="padding-left:4px;padding-right:4px;"><a href=""><img src="/uploads/facebook.png" alt="Facebook" class="img-circle center-block" width="30px"></a></li>
    <li style="padding-left:4px;padding-right:4px;"><a href=""><img src="/uploads/linkedin.png" alt="LinkedIn" class="img-circle center-block" width="30px"></a></li>
    <li style="padding-left:4px;padding-right:4px;"><a href=""><img src="/uploads/g+.png" alt="Google Plus" width="30px" class="img-circle center-block"></a></li>
    <li style="padding-left:4px;padding-right:4px;"><a href=""><img src="/uploads/twitter.png" alt="Twitter" width="30px" class="img-circle center-block"></a></li>
    <li style="padding-left:4px;padding-right:4px;"><a href=""><img src="/uploads/youtube.png" alt="Youtube" width="30px" class="img-circle center-block"></a></li>
    <li style="padding-left:4px;padding-right:4px;"><a href=""><img src="/uploads/skype.png" alt="Skype" width="30px" class="img-circle center-block"></a></li>
  </ul>
</div>
</nav>
<!--Footer ends here-->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> 

<script src="js/main.js"></script>
<script src="js/controller/mainCtrl.js"></script>
<script src="js/controller/formCtrl.js"></script>
<script src="js/services/formService.js"></script>

</body>
</html>