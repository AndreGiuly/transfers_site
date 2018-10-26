@extends('frontoffice.base')

@section('style')
<style>

.select2 {
width:100%!important;
}
.container.search-form {
    background: #4ee7b0;
    top: 75%;
    position: absolute;
    /*padding: 20px;*/
    margin: 0 auto;
    width: 60%;
    left: 20%;
    padding: 60px;

}

.sticky-wrapper {
  height: auto !important;
}

.transfer-types {
  margin-bottom: 20px;
}

.transfer-types input {
  margin-left: 20px;
}

#map {
  height: 150px;
  width: 300px;
  border: 5px solid red;
  margin-top: 300px;
  margin-left: 600px;
}


.drop-down-container {
  width: 200px;
  border: 1px solid #ccc;
  border-top: 0;
  padding: 10px;
  margin-top: 0px;
  position: absolute;
  z-index: 1;
  background-color: white;
  border-radius: 0 0 5px 5px;
}
 .drop-down-container ul {
    width: 100%;
    list-style: none;
    margin: 0 auto;
    text-align: left;
  }

.drop-down-container .input-group-addon {
  background: none;
  border: none;
  padding: 0;
}

.passengers-li {
  margin-left: 15px;
  text-align: center;
  font-size: 12px;
  text-align: initial;
}

#date_arrival {
  height: 39px;
}
.steps-form-2 {
  width: 60% !important;
  margin: 0 auto;
}
.steps-form-2 .steps-row-2:before {
  width: 80%;
  left: 10%;
}
</style>
@endsection;

@section('title')
Homepage
@endsection
@section('content')

@php
session_start();

@endphp

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    {{-- SLOGAN --}}
    <div class="intro-content">
      <h2>Say <span>HI</span> to the best transfers<br>in <span>PORTUGAL</span>!</h2>
    </div>
    
    <div class="container search-form">
      <div class="row">
        <form action="transfer/booking" method="POST">
          {{ csrf_field() }}
          
          <div class="row transfer-types">
            <input type="radio" name="transfer_type" value="1" checked="checked" class="icheck transfer_type"> From airport
            <input type="radio" name="transfer_type" value="2" class="icheck transfer_type"> To airport
            <input type="radio" name="transfer_type" value="3" class="icheck transfer_type"> City-to-city
          </div>
          
          <div class="row from_airport_fields">

            <div class="col-xs-12 col-md-6">

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  
                  <select name="from_airport_from" id="from_airport"  class="form-control select2" aria-label="Wich airport are you arriving at?" aria-describedby="basic-addon1" >
                    <option value=""></option>

                    <optgroup label="<i class='fa fa-plane'></i> Airports">
                      <option value="Aeroporto de Lisboa, Lisbon" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" local="Aeroporto de Lisboa, Lisbon" latitude="38.771163582" longitude="-9.133832798" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="Aeroporto Francisco Sá Carneiro, Porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0" local="Aeroporto Francisco Sá Carneiro, Porto">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="Aeroporto de Beja, Beja"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0" local="Aeroporto de Beja, Alentejo">Aeroporto de Beja, Alentejo</option>
                      <option value="Aeroporto de Faro, Algarve"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0" local="Aeroporto de Faro, Algarve">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Ports">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Stations">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <label class="sr-only" for="to_place">Where you want to go?</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  <input type="text" class="form-control" name="from_airport_to" id="to_place" placeholder="Where you want to go?">
                  <input type="hidden" id="destination">
                </div>
              </div>
            </div>
          </div>

          <div class="row to_airport_fields" style="display: none">    

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <label class="sr-only" for="from_place">Where you want to go?</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  <input type="text" class="form-control" name="to_airport_from" id="from_place" placeholder="Where you want to go?">
                  <input type="hidden" id="destination">
                </div>
              </div>
            </div>
         
            <div class="col-xs-12 col-md-6">

              <div class="form-group">

                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  
                  <select name="to_airport_to" id="to_airport"  class="form-control select2" aria-label="Wich airport are you arriving at?" aria-describedby="basic-addon1" >
                    <option value=""></option>

                    <optgroup label="<i class='fa fa-plane'></i> Airports">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" local="Aeroporto de Lisboa, Lisbon" latitude="38.771163582" longitude="-9.133832798" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Ports">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Stations">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>
                  </select>

                </div>
              </div>
            </div>
          </div>

          <div class="row city_to_city"  style="display: none">    

            <div class="col-xs-12 col-md-6">

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  
                  <select name="city_to_city_from" id="city-to-city_from"  class="form-control select2" aria-label="Wich airport are you arriving at?" aria-describedby="basic-addon1" >
                    <option value=""></option>

                    <optgroup label="<i class='fa fa-plane'></i> Airports">
                      <option value="Aeroporto de Lisboa, Lisboa" title="Aeroporto de Lisboa, Lisbon" local="Aeroporto de Lisboa, Lisbon" latitude="38.771163582" longitude="-9.133832798" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="Aeroporto Sá Carneiro, Porto"  title="Aeroporto Sá Carneiro, Porto" local="Aeroporto Sá Carneiro, Porto" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="Aeroporto de Beja, Beja"  title="Aeroporto de Beja, Alentejo" local="Aeroporto de Beja, Beja" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="Aeroporto de Faro, Algarve"   title="Aeroporto de Faro, Algarve" local="Aeroporto de Faro, Algarve" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Ports">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Stations">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
         
           <div class="col-xs-12 col-md-6">

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  
                  <select name="city_to_city_to" id="city-to-city_to"  class="form-control select2" aria-label="Wich airport are you arriving at?" aria-describedby="basic-addon1" >
                    <option value=""></option>

                    <optgroup label="<i class='fa fa-plane'></i> Airports">
                      <option value="ChIJx_bMokYyGQ0Rss59FGBkWOQ" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" local="Aeroporto de Lisboa, Lisbon" latitude="38.771163582" longitude="-9.133832798" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Ports">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>

                    <optgroup label="<i class='fa fa-ship'></i> Stations">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
                      <option value="porto"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto Francisco Sá Carneiro, Porto</option>
                      <option value="alentejo"  title="ChIJrStKYWRvJA0R0TlgbYpXGhU" data-active="0">Aeroporto de Beja, Alentejo</option>
                      <option value="faro"   title="ChIJm5mnTbBSBQ0RRztnYx5VRCE" data-active="0">Aeroporto de Faro, Algarve</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <label for="last_name">Arrival Date</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  <input type="text" name="arrival_date" class="form-control datepicker-field" data-language='en' id="date_arrival" placeholder="What is the date of your arrival?" autocomplete="off">
                   <div class="input-group-addon">
                    <select name="arrival_hour">
                      @for ($hour = 23; $hour >= 0; $hour--)
                        @php
                        if($hour < 10){
                          $hour = '0'.$hour;
                        }
                          
                        @endphp
                        <option value="{{ $hour }}">{{ $hour }}</option>
                        
                      @endfor
                    </select>:
                     <select name="arrival_minutes">
                      @for ($minutes = 00; $minutes <= 55; $minutes = $minutes +5)
                        @php
                        if($minutes < 10){
                          $minutes = '0'.$minutes;
                        }
                          
                        @endphp
                        <option value="{{ $minutes }}">{{ $minutes }}</option>
                        
                      @endfor
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <label for="last_name">Departure Date</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  <input type="text" name="departure_date" class="form-control datepicker-field" data-language='en' id="date_departure" placeholder="What is the date of your arrival?" autocomplete="off">
                   <div class="input-group-addon">
                    <select name="departure_hour">
                      @for ($hour = 23; $hour >= 0; $hour--)
                        @php
                        if($hour < 10){
                          $hour = '0'.$hour;
                        }
                          
                        @endphp
                        <option value="{{ $hour }}">{{ $hour }}</option>
                        
                      @endfor
                    </select>:
                     <select name="departure_minutes">
                      @for ($minutes = 00; $minutes <= 55; $minutes = $minutes +5)
                        @php
                        if($minutes < 10){
                          $minutes = '0'.$minutes;
                        }
                          
                        @endphp
                        <option value="{{ $minutes }}">{{ $minutes }}</option>
                        
                      @endfor
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                 <label for="last_name">Passengers</label>
                <div class="input-field">
                  <input class="form-control passengers" name="passengers" type="text" class="validate" value="2 adults" id="passengers" style="margin-bottom: 0; background: white; cursor: pointer;" autocomplete="off" readonly="readonly">

                  <!-- Dropdown Structure -->
                  <div class="drop-down-container container hidden">
                  
                    <div class="row">
                      <ul class="dropdown-list">
                        <li class="passengers-li">Adults (+12 years)
                          <div class="row" style="width: 100px;">
                            <div class="btn-group" role="group" aria-label="Basic example">

                              <div class="input-group">
                                <div class="input-group-addon"><button type="button" class="btn passengers-btn" id="adult-minus" onclick="getPassengers('minus', 'adults')">-</button></div>
                                  <input style="width: 35px; padding: 0px; text-align: center; font-size: 16px;" type="number" value="2" id="adults" class="passengers-btn" name="adults">
                                <div class="input-group-addon"><button type="button" class="btn passengers-btn" id="adult-plus" onclick="getPassengers('add', 'adults')">+</button></div>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li class="passengers-li">Children (2-12 years)
                          <div class="row" style="width: 100px;">
                            <div class="btn-group" role="group" aria-label="Basic example">

                              <div class="input-group">
                                <div class="input-group-addon"><button type="button" class="btn passengers-btn" id="adult-minus" onclick="getPassengers('minus', 'childrens')">-</button></div>
                                  <input style="width: 35px; padding: 0px; text-align: center; font-size: 16px;" type="number" value="0" id="childrens" class="passengers-btn" name="children">
                                <div class="input-group-addon"><button type="button" class="btn passengers-btn" id="adult-plus" onclick="getPassengers('add', 'childrens')">+</button></div>
                              </div>

                            </div>
                          </div>
                        </li>  
                        </li class="passengers-li">
                         <li class="passengers-li">Infants (Under 2 years)
                          <div class="row" style="width: 100px;">
                            <div class="btn-group" role="group" aria-label="Basic example">

                              <div class="input-group">
                                <div class="input-group-addon"><button type="button" class="btn passengers-btn" id="adult-minus" onclick="getPassengers('minus', 'infants')">-</button></div>
                                  <input style="width: 35px; padding: 0px; text-align: center; font-size: 16px;" type="number" value="0" id="infants" class="passengers-btn" name="infants">
                                <div class="input-group-addon"><button type="button" class="btn passengers-btn" id="adult-plus" onclick="getPassengers('add', 'infants')">+</button></div>
                              </div>

                            </div>
                          </div>
                        </li>
                       
                      </ul>
                    </div>

                  </div>
                </div>
              </div> 
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input type="checkbox" class="icheck" name="one_way"> <label for="only_one_way">Only one way</label>
              </div>
            </div>

        

          </div>


          <div class="row">  

            <div class="form-group">
              <input type="checkbox" class="icheck" name="one_way"> <label for="only_one_way">Only one way</label>
            </div>
            
          </div>
           <input type="hidden" name="result" id="result">
           <input type="hidden" name="distance" id="distance">
           <input type="hidden" name="duration" id="duration">
          <button class="btn-get-started btn-search" type="submit">SEARCH</button>  
        </form>
      </div>
    </div>  

  </section>
  <!-- #intro -->
  
  <div id="map"></div>


  <main id="main">


    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="homepage/img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

          </div>
        </div>

      </div>
    </section
    ><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Clients</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="homepage/img/clients/client-1.png" alt="">
          <img src="homepage/img/clients/client-2.png" alt="">
          <img src="homepage/img/clients/client-3.png" alt="">
          <img src="homepage/img/clients/client-4.png" alt="">
          <img src="homepage/img/clients/client-5.png" alt="">
          <img src="homepage/img/clients/client-6.png" alt="">
          <img src="homepage/img/clients/client-7.png" alt="">
          <img src="homepage/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/1.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/2.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/3.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/4.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/5.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/6.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/7.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="homepage/img/portfolio/8.jpg" class="portfolio-popup">
                <img src="homepage/img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="homepage/img/quote-sign-left.png" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="homepage/img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="homepage/img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="homepage/img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="homepage/img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="homepage/img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="homepage/img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="homepage/img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="homepage/img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="homepage/img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="homepage/img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="homepage/img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="homepage/img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="homepage/img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="homepage/img/testimonial-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="homepage/img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="homepage/img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="homepage/img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="homepage/img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="transfer/booking" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

@endsection

@section('script')
<script>
    function formatState (state) {
    if (!state.id) {
      return state.text;
    }


    var baseUrl = "images/ports";
    var $state = $(
      '<span><img class="img img-circle" style="width:50px; height: 50px;" src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" /> ' + state.text + '</span>'
      );
    return $state;
  };

  //Render select2 with images
  $('.select2').select2({
    placeholder: "Which airport are you arring at?",
    allowClear: true,
    padding: '10px',

    templateResult: formatState,

    templateSelection: function (option) {
      if (option.id.length > 0 ) {
        return option.text + "<i class='fa fa-dot-circle-o'></i>";
      } else {
        return option.text;
      }
    },
    escapeMarkup: function (m) {
      return m;
    }
  });

    var directionsDisplay = new google.maps.DirectionsRenderer();
    var directionsService = new google.maps.DirectionsService();
    var map;
    var placeId;
    var mapOptions = {
      zoom : 10,
      preserveViewport: true
    }

    map = new google.maps.Map(document.getElementById('map'),mapOptions);

    directionsDisplay.setMap(map);

    google.maps.event.addDomListener(window,'load',function(){

      var options = {
        componentRestrictions: {country: "pt"}
      };

      //var from_places = new google.maps.places.Autocomplete(document.getElementById('depart'),options);
      var to_places = new google.maps.places.Autocomplete(document.getElementById('to_place'),options);

      //when to_places changes, will trigger this listener
      google.maps.event.addListener(to_places,'place_changed', function(){

        var to = to_places.getPlace();
        var to_address = to.formatted_address;

        $('#destination').val(to_address); 

        origin = $('#from_airport option:selected');

        origin_latitude = origin.attr('latitude');
        origin_longitude = origin.attr('longitude');

        origin =  origin.attr('local');

        destination = $('#destination').val();

        var service = new google.maps.places.PlacesService(map);
       

        calculateDistance(origin,destination);
        calculateRoute(origin,destination);


      })
    });

    // Checks that the PlacesServiceStatus is OK, and adds a marker
// using the place ID and location from the PlacesService.
function getPlace(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    var marker = new google.maps.Marker({
      map: map,
      place: {
        placeId: results[0].place_id,
        location: results[0].geometry.location
      }
    });
  }
}

    function calculateDistance(origin,destination){
      var origin = origin;
      var destination = destination;




      console.log(origin);

      var service = new google.maps.DistanceMatrixService();
      service.getDistanceMatrix(
      {
        origins: [origin],
        destinations : [destination],
        travelMode : google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.metric,
        avoidHighways : false,
        avoidTolls: false,
      },callback);
    }

      //get distance results
      function callback(response,status){

      //Check if the status is ok
      if(status != google.maps.DistanceMatrixStatus.OK) {
        err = 'Error';
        $('#result').val(err);
        console.log('Error: '+err);
      } else {
        var origin = response.originAddresses[0];
        var destination = response.destinationAddresses[0];
        
        if(response.rows[0].elements[0].status === 'ZERO_RESULTS'){
          $('#result').html('Better get on a plane. There are no roads between '+origin +' and '+destination+'.');
        } else {
          var distance = response.rows[0].elements[0].distance;
          var duration = response.rows[0].elements[0].duration;

          var distance_in_km = (distance.value / 1000).toFixed(2);
          var duration_text  = duration.text;
          var duration_value = duration.value; //in seconds

          $('#distance').val(distance_in_km+' kms');
          $('#duration').val(duration_text);
          if(distance_in_km > 100){
           map.setZoom(6);
          } 

          if(distance_in_km <= 100 && distance_in_km > 60){
            map.setZoom(8);
          }

            if(distance_in_km <= 60) {
            map.setZoom(10);
          }
        }
      } 
    }






    function calculateRoute(origin,destination){

      var request = {
        origin: origin,
        destination : destination,
        travelMode: 'DRIVING'
      };


      directionsService.route(request, function(result,status){
        if(status == 'OK'){
          directionsDisplay.setDirections(result);
           map.setZoom(14);

        }
      }) 

    }

$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

$('.datepicker-field').datepicker({
   minDate: new Date(),
   autoClose: true,
    dateFormat: 'dd/mm/yyyy',
  onSelect: function (fd, d, picker) {
            // Do nothing if selection was cleared
            if (!d) return;

            var day = d.getDay();
              
        }

});
$('.datepicker-field').data('datepicker');


$('.passengers').click(function(){
  $('.drop-down-container').removeClass('hidden');
})


function getPassengers(operation, field){
  last_value = parseInt($('#'+field).val()); 

  if(operation == 'add'){
    new_val = last_value+1;
  } else {
    if(last_value > 0){
      new_val = last_value-1;
    }
  }

  $('#'+field).val(new_val);
  return true;
}

//When click outside of passagers div, hide it.
$("body").click(function(e){
    if(e.target.className !== "btn passengers-btn waves-effect waves-light" 
      && e.target.className !== "form-control passengers"  
      && e.target.className !== "passengers-btn" 
      && e.target.className !== "passengers-li" 
      && e.target.className !== "col-xs-4"){
      $(".drop-down-container").addClass('hidden');
      adults = $('#adults').val();
      childrens = $('#childrens').val();
      infants = $('#infants').val();
      text = adults+ ' adults';

      if(childrens > 0){
        text = text + ' + '+childrens+' children';
      }

      if(infants > 0){
        text = text + ' + '+infants+' infant';
      }
      $('#passengers').val(text)
    }
  });


 $('input[name=transfer_type]').on('ifClicked', function (event) { 
  type = $(this).val();
    switch(type) {
    case '1':
        $('.from_airport_fields').show();
        $('.to_airport_fields').hide();
        $('.city_to_city').hide();
        break;
    case '2':
        $('.from_airport_fields').hide();
         $('.to_airport_fields').show();
        $('.city_to_city').hide();
        break;
    case '3':
        $('.from_airport_fields').hide();
        $('.to_airport_fields').hide();
        $('.city_to_city').show();
        break;
    default:
        $('.from_airport_fields').show();
        $('.to_airport_fields').hide();
        $('.city_to_city').hide();
}
});


    </script>
@endsection

