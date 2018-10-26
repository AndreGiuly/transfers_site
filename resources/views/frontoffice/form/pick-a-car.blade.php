@extends('frontoffice.base')

@section('title')
Booking
@endsection

@section('style')
<style>
body {
  background: #eaeaea;
}
.steps-form-2 {
    display: table;
    width: 100%;
    position: relative; }
.steps-form-2 .steps-row-2 {
    display: table-row; }
.steps-form-2 .steps-row-2:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 2px;
    background-color: #7283a7; }
.steps-form-2 .steps-row-2 .steps-step-2 {
    display: table-cell;
    text-align: center;
    position: relative; }
.steps-form-2 .steps-row-2 .steps-step-2 p {
    margin-top: 0.5rem; }
.steps-form-2 .steps-row-2 .steps-step-2 button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important; }
.steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 {
    width: 70px;
    height: 70px;
    border: 2px solid #59698D;
    background-color: white !important;
    color: #59698D !important;
    border-radius: 50%;
    padding: 22px 18px 15px 18px;
    margin-top: -22px; }
.steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2:hover {
    border: 2px solid #4285F4;
    color: #4285F4 !important;
    background-color: white !important; }
.steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 .fa {
    font-size: 1.7rem; }




  .car-card .car-photo img {
    max-width: 200px;
    max-height: 150px;
    margin: 10px;
  }

  .car-card .car-prices {
    float: right;

  }

  .car-card {
    text-align: left;
    border: 2px solid #eaeaea;
  }

  .car-card .car-title {

    font-size: 28px;
    font-weight: bold;
  }
  .card-infos {
    padding: 10px;
  }

  .card-icon {
    font-size: 25px;
    vertical-align: middle;
    line-height: 1.5;
    color: grey;
  }


  #cars-list li {
    list-style: none;
  }

  .car-card {
    border-left: 4px solid #4386fc;
    background: white;
  }

  .line-separator {
    margin: 10px;
  }

  .card-infos strong {
    font-size: 10px;
    font-weight: bold;
    color: grey;
  }

  .card-infos .local {
    font-size: 14px;
  }

  .booking-card-subtitle{
    font-weight: bold;
    font-size: 13px;
  }

  .car-prices h1 {
    line-height: 0.6;
  }

  .car-prices small {
    font-size: 13px;

  }

  .car-prices .free-cancelation {
    color: #40b227;
    font-weight: 800px;
    font-size: 11px;
  }

  .car-prices .zero-fees {
    background: #eaeaea;
    border-radius: 10px;
    text-align: center;
    font-weight: bold;
  }

  .car-prices strike {
    color: #e43a61;
    font-size: 19px;
    text-align: center;
  }

  .car-extra {
    display: inline-block;;
    background: #eaeaea;
    font-size: 12px;
    padding: 3px;
    border-radius: 5px;
    font-weight: bold;
  }

  .car-extra.premium {
    background: gold;
  }

  .car-extra.porter {
    background: green;
  }

  .car-footer {
    text-align: center;
  }

  .car-footer .col-xs-3 {
    border-right: 1px solid grey;
    padding: 15px;
    background: #eaeaea;
  }

  .no-margin-bottom {
    margin-bottom: 0;
  }

  .car-footer button {
    background: #4386fc;
    color: white;
    padding: 10px 50px;
    border-radius: 25px;
    border-bottom: #4386fc;
  }

  .col-xs-3.select-div {
    padding: 4px;
  }

  #cars-list li {
    margin-bottom: 17.5px;
  }

  .car-specs .col-xs-6 {
    margin-top: 20px;
    font-size: 13px;
  }

.left-col {
  border: 2px solid #59698D;
  width: 100%;
  text-align: center;
  background: white;
}
.steps-form-2{
  width: 60%;
  margin: 0 auto
}

.steps-form-2 .steps-row-2:before {
  width: 80%;
  left: 10%;
}

.steps-form {
  width: 80%;
  margin: 0 auto;
}
}
</style>
@endsection

@section('content')
<div class="container-fluid">
<h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong>Registration form with steps</strong></h2>

<!-- Stepper -->
<div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
        	<p>Choose a Vehicle</p>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
       		<p>Luggage</p>
        </div>
        <div class="steps-step-2">
            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
        	<p>Luggage</p>
        </div>
        <div class="steps-step-2">
            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
        	<p>Personal Details</p>
        </div>
        <div class="steps-step-2">
            <a href="#step-5" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
        	<p>Review & Submit</p>
        </div>
        <div class="steps-step-2">
            <a href="#step-6" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
        	<p>Payment Details</p>
        </div>
    </div>
</div>
<div class="steps-form row">
  <div class="col-xs-2">
      <div class="left-col">
        <h2 id="booking-card-title">TRANSFER BOOKING DETAILS</h2>
        <input type="text" name="session_id" value="{{session()->get('session_id') }}">
        <div class="booking-card-subtitle">FIRST TRANSFER:</div>

        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>ORIGIN</strong><br>
              <span class="local"><span id="origin-1">{{ session()->get('origin') }}</span></span>
            </div>
          </div>
        </div>

        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>DESTINATION</strong><br>
              <span class="local"> <span id="destination-1"></span>{{ session()->get('destination') }}</span>
            </div>

          </div>
        </div>

        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>TRAVEL DATE</strong><br>
              <span class="local"><span id="traveldate-1">{{ session()->get('pick_up_date') }}</span></span>
               <span class="local2"><span id="travelhour-1">{{ session()->get('pick_up_hour') }}</span></span>
            </div>



          </div>
        </div>

        <hr>
        <div class="booking-card-subtitle">SECOND TRANSFER:</div>
        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>ORIGIN</strong><br>
              <span class="local"><span id="origin-2"></span></span>
            </div>

          </div>
        </div>

        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>DESTINATION</strong><br>
              <span class="local"><span id="destination-2"></span></span>
            </div>

          </div>
        </div>

        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>TRAVEL DATE</strong><br>
              <span class="local"><span id="traveldate-2"></span></span>
            </div>

          </div>
        </div>
      </div>
      <div class="clearfix line-separator"></div>
      <div class="left-col">

        <h2 id="booking-card-title">TRANSFER BOOKING DETAILS</h2>

        <div class="booking-card-subtitle">FIRST TRANSFER:</div>

        <div class="card-infos">
          <div class="row">

            <div class="col-xs-2">
              <i class="card-icon fas fa-luggage-cart"></i>
            </div>

            <div class="col-xs-10">
              <strong>DEPARTURE</strong><br>
              <span class="local">  adsdadas</span>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="col-xs-8">
    <div id="cars-list">
            <ul>
              <li>
                <div class="car-card car">

                  <div class="row">
                    <div class="col-xs-4">
                      <div class="car-photo">
                        <img src="https://www.laudoracing-models.com/4099-thickbox_default/fiat-uno-turbo-2-serie-mk2-1990-118-lm104a.jpg" alt="car1">
                      </div>
                    </div>

                    <div class="col-xs-5">
                      <h1 class="car-title">Private Taxi</h1>
                      <div class="car-infos">
                        <div class="car-specs">

                          <div class="row">
                            <div class="col-xs-6">
                              <i class="fa fa-users"></i> 5 passegers
                            </div>
                       
                            <div class="col-xs-6">
                              <i class="fas fa-suitcase"></i> 2 medium suitcases
                            </div>
                       
                            <div class="col-xs-6">
                              <i class="fas fa-map-pin"></i> Door to door
                            </div>
                           
                            <div class="col-xs-6">
                             <i class="far fa-clock"></i> 1 hour
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-3">
                      <div class="car-prices">
                        <strike>60 €</strike>
                        <h1 class="car-price">52 €<br>
                        <small>Return Price</small></h1>
                        <div class="free-cancelation"> <i class="fas fa-check-circle"></i> FREE Cancelation</div>
                        <div class="zero-fees">Zero Fees</div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="container">
                      <div class="car-extra premium"><i class="fas fa-medal"></i> Premium Vehicle</div>
                      <div class="car-extra porter"><i class="fas fa-leaf"></i> Porter-Service</div>
                    </div>
                  </div>
                  <hr class="no-margin-bottom">

                  <div class="car-footer row">
                    <div class="container-fluid">
                      <div class="col-xs-3"><i class="fa fa-star"></i> Private Service</div>
                      <div class="col-xs-3"><i class="fa fa-star"></i> Meet & Greet</div>
                      <div class="col-xs-3">More info</div>
                      <div class="col-xs-3 select-div"><button type="submit" class="select-car">Select Car</button></div>
                    </div>
                  </div>
                </div>
              </li>
            
            </ul>
    </div>
    
  </div>
<!-- Steps form -->
</div>
@endsection

@section('script')
	<script>
// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Steppers
$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
          $item.addClass('btn-amber');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
});
	</script>
@endsection