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


  #extras h3 {
    border-bottom: 1px solid grey;
    padding-bottom: 15px;
  }

.extras-list li {
  padding: 20px;
  border-bottom: 1px solid grey
}

.extras-list .icon {
  float: left;
  max-width: 50px;
  max-height: 60px;
}

.extra-description{
  text-align: left;
}

.row {
  margin-bottom: 0px;
}

.extra-quantity label {
  font-size: 10px;
  font-weight: 0;
  color: black;
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
    <form action="{{ URL::to('/transfer/booking/select-car') }}" method="POST">
      <h2 class="fs-title">Extras</h2>
          <h3 class="fs-subtitle">We will never sell it</h3>

          <div class="container-fluid">
            
              <ul class="extras-list">
                <li>
                  <div class="row">
                    <div class="col-xs-1">
                      <img src="https://www.stylemygolf.com/media/catalog/product/cache/1/image/373x373/9df78eab33525d08d6e5fb8d27136e95/c/a/cart-bag-main.png" class="icon" alt="Golf Bag">
                    </div>
                    <div class="col-xs-9 extra-description">
                      <p class="extra-name">Golf Bag </p>
                      <p class="extra-notes">1 x medium size golf bag with golf clubs safely secured inside.</p>
                    </div>

                    <div class="col-xs-2 extra-quantity">

                      <div class="row">
                        <div class="col-xs-4">
                          <label for="sort"> Outward </label>
                          
                        </div>
                    
                        <div class="col-xs-8">
                            <select class="form-control" name="sort" id="sort">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                         </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-4">
                          <label for="sort"> Return </label>
                          
                        </div>
                    
                        <div class="col-xs-8">
                            <select class="form-control" name="sort" id="sort">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                         </div>
                      </div>
               
                    </div>
                  </div>
                </li> 
                  <li>
                  <div class="row">
                    <div class="col-xs-1">
                      <img src="https://www.stylemygolf.com/media/catalog/product/cache/1/image/373x373/9df78eab33525d08d6e5fb8d27136e95/c/a/cart-bag-main.png" class="icon" alt="Golf Bag">
                    </div>
                    <div class="col-xs-9 extra-description">
                      <p class="extra-name">Golf Bag </p>
                      <p class="extra-notes">1 x medium size golf bag with golf clubs safely secured inside.</p>
                    </div>

                    <div class="col-xs-2 extra-quantity">

                      <div class="row">
                        <div class="col-xs-4">
                          <label for="sort"> Outward </label>
                          
                        </div>
                    
                        <div class="col-xs-8">
                            <select class="form-control" name="sort" id="sort">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                         </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-4">
                          <label for="sort"> Return </label>
                          
                        </div>
                    
                        <div class="col-xs-8">
                            <select class="form-control" name="sort" id="sort">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                         </div>
                      </div>
               
                    </div>
                  </div>
                </li>    
              </ul>
          </div>
          <button>Submit</button>
               
    </form>
     <button>Back</button>
    
  </div>
<!-- Steps form -->
</div>
@endsection

@section('script')
	<script>

	</script>
@endsection