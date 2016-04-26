@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="col-md-12 col-xs-12">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 blockbody">
        <div>
          <h1>Contact Us</h1><br>
          <p><strong>If this is an emergency, please call 100 now.</strong></p>
          <p>Reporting is confidential, we only need your information to solve crime, not your name.</p>
          <h3>1800 333 444  or  Report Crime Online</h3>
        </div><hr>

        <div>
          <h1>Enquiry Form</h1>
          <br><p>For all office enquiries please use below form. DO NOT report crime through this form.</p>
          <form action="/contact" method="post" class="ng-pristine ng-valid">
            <input type="hidden" name="_token" value="13VVpkB5NaH0TemJveLchsIRpW402DsqwR6bCDfO">
            <div class="row control-group">
              <div class="form-group col-xs-12">
                <label for="name">Name</label>
                <input type="text" class="form-control nbr" id="name" name="name" value="" autofocus="">
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12">
                <label for="email">Email</label>
                <input type="email" class="form-control nbr" id="email" name="email" value="">
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 controls">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control nbr" id="phone" name="phone" value="">
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 controls">
                <label for="message">Message</label>
                <textarea rows="5" class="form-control nbr" id="message" name="message"></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="padtb">
  <div class="container-fluid text-center testimonyblock">
    <h2 style="color:rgb(41, 2, 84);padding-top:10px;"><strong>Our Volunteer Speaks</strong></h2>
    <div class="cardcontainer">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3 col-xs-12">
            <a href="#">
              <div class="card testimonytext">
                <div class="padlr">
                  <div class="imageblock">
                    <img src="/uploads/testimony.jpg" class="img-circle center-block" style="max-width:45%;height:auto;" alt="Volunteer Image : Himakar">
                    <h4>Himakar</h4>
                    <p><img src="/uploads/location.png" class="img-circle" width="15px" alt="Location: Bangalore, KA"> Bangalore, KA, INDIA</p>
                  </div>
                  <hr>
                  <h4>We Work Hard And Work Great</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-xs-12">
            <a href="#">
              <div class="card testimonytext">
                <div class="padlr">
                  <div class="imageblock">
                    <img src="/uploads/testimony.jpg" class="img-circle center-block" style="max-width:45%;height:auto;" alt="Volunteer Image : Himakar">
                    <h4>Himakar</h4>
                    <p><img src="/uploads/location.png" class="img-circle" width="15px" alt="Location: Bangalore, KA"> Bangalore, KA, INDIA</p>
                  </div>
                  <hr>
                  <h4>We Work Hard And Work Great</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-xs-12">
            <a href="#">
              <div class="card testimonytext">
                <div class="padlr">
                  <div class="imageblock">
                    <img src="/uploads/testimony.jpg" class="img-circle center-block" style="max-width:45%;height:auto;" alt="Volunteer Image : Himakar">
                    <h4>Himakar</h4>
                    <p><img src="/uploads/location.png" class="img-circle" width="15px" alt="Location: Bangalore, KA"> Bangalore, KA, INDIA</p>
                  </div>
                  <hr>
                  <h4>We Work Hard And Work Great</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-xs-12">
            <a href="#">
              <div class="card testimonytext">
                <div class="padlr">
                  <div class="imageblock">
                    <img src="/uploads/testimony.jpg" class="img-circle center-block" style="max-width:45%;height:auto;" alt="Volunteer Image : Himakar">
                    <h4>Himakar</h4>
                    <p><img src="/uploads/location.png" class="img-circle" width="15px" alt="Location: Bangalore, KA"> Bangalore, KA, INDIA</p>
                  </div>
                  <hr>
                  <h4>We Work Hard And Work Great</h4>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <a href=""><h4>Read More..</h4></a>
  </div>
</div>
@stop