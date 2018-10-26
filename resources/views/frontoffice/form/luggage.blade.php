@extends('frontoffice.base')

@section('title')
Booking
@endsection

@section('style')
<style>
body {
  background: #eaeaea;
}





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





}

.left-col {
  border: 2px solid #59698D;
  width: 100%;
  text-align: center;
  background: white;
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
</style>
@endsection

@section('content')
<div class="container-fluid">
<h2 class="text-center font-bold"><strong>Registration form with steps</strong></h2>

<!-- Stepper -->

@include('frontoffice.form.partials.stepper')

<div class="row">
  @include('frontoffice.form.partials.left-menu')


  <section>
    <div class="col-xs-8">
      <form action="{{ URL::to('/transfer/booking/luggage') }}" method="POST">
        {{ csrf_field() }}
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
           <button class="btn-get-started btn-search pull-right" type="submit">NEXT</button>  
        }
                 
      </form>

       <button class="btn-get-started btn-search  pull-left">BACK</button>  
      
    </div>
  </section>

</div>
@endsection

@section('script')
	<script>

	</script>
@endsection