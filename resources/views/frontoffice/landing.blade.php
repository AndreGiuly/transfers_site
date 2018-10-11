@extends('frontoffice.base')

@section('style')
<style>


.container.search-form {
    background: #4ee7b0;
    top: 75%;
    position: absolute;
    /*padding: 20px;*/
    margin: 0 auto;
    width: 80%;
    left: 10%;
    padding: 60px;

}

.sticky-wrapper {
  height: auto !important;
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

    {{-- QUOTE --}}
    <div class="intro-content">
      <h2>Say <span>HI</span> to the best transfers<br>in <span>PORTUGAL</span>!</h2>
    </div>
    
    <div class="container search-form">
      <div class="row">
        <form action="transfer/booking" method="POST">
          {{ csrf_field() }}
          
          <div class="row">
            <input type="radio" name="type" value="1" checked="checked" class="icheck">From airport
            <input type="radio" name="type" value="2" class="icheck">To airport
            <input type="radio" name="type" value="3" class="icheck">City-to-city
          </div>
          
          <!--
          <div class="row">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
              <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Some content.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
              </div>
            </div>
          </div>
          -->

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group floatlabel">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fas fa-plane-arrival"></i></div>
                  <select name="from" id="from"  class="form-control select2" aria-label="Wich airport are you arriving at?" aria-describedby="basic-addon1" >
                    <option value=""></option>

                    <optgroup label="<i class='fa fa-plane'></i> Airports">
                      <option value="lisboa" title="ChIJx_bMokYyGQ0Rss59FGBkWOQ" data-active="0">Aeroporto da Portela, Lisboa</option>
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

            <div class="col-xs-6">
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xs-3">
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                  
                </div>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                  
                </div>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                </div>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                </div>
              </div>
            </div>

          </div>


          <div class="row">  

            <div class="form-group">
              <input type="checkbox" name="only_one_way"> <label for="only_one_way">Only one way</label>
            </div>
            
          </div>
           
          <button class="btn-get-started btn-search" type="submit">SEARCH</button>  
        </form>
      </div>
    </div>  

  </section>
  <!-- #intro -->



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
    
/*
    var mapOptions = {
      zoom : 10,
      preserveViewport: true
    }

    map = new google.maps.Map(document.getElementById('map'),mapOptions);
    directionsDisplay.setMap(map);
*/


google.maps.event.addDomListener(window,'load',function(){

      var options = {
        componentRestrictions: {country: "pt"}
      };

      //var from_places = new google.maps.places.Autocomplete(document.getElementById('depart'),options);
      var to_places = new google.maps.places.Autocomplete(document.getElementById('to_place'),options);
});


    </script>
@endsection

