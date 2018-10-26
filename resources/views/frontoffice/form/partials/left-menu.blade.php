  <section class="left-board">
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
  </section>