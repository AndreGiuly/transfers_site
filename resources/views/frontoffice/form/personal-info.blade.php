@extends('frontoffice.base')

@section('title')
Booking
@endsection

@section('style')
<style>
body {
  background: #eaeaea;
}

fieldset {
	background: white;
	padding: 20px;
	border: 2px solid #aaa;
	margin-bottom: 20px;
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
		<div class="container">
			<div class="row">


				<div class="form-board">
					<h1>dsada</h1>
					<fieldset>
						
						<div class="row">

						 	<div class="form-group col-md-2">
						 		<label for="title">Title</label>
						 		 <select name="title" class="form-control" id="title">
				                  <option value="">Mr</option>
				                  <option value="">Mrs</option>
				                  <option value="">Miss</option>
				                  <option value="">Ms</option>
				                </select>
				              </div>
						 	
						 	
						 	<div class="form-group col-md-5">
						 		<div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
						 	</div>

						 	<div class="form-group col-md-5">
						 		<div class="input-field">
				                  <label for="lname">Last Name</label>
				                  <input id="lname" class="form-control" name="lname" type="text"  class="validate">
				                </div>
						 	</div>

						 	<div class="form-group col-md-12">
						 		<div class="input-field">
				                  <label for="email">Email</label>
				                  <input id="email" class="form-control" name="email" type="text"  class="validate">
				                </div>
						 	</div>

						</div>
					</fieldset>

					<h1>Arrival</h1>
					<fieldset>
						<div class="row">
							<div class="col-xs-2">
								<p>From:</p>
								<p>Lisbon airport (LIS)</p>
								<br><br>
								<p>From:</p>
								<p>Lisbon airport (LIS)</p>
							</div>
							<div class="col-xs-10">
								<div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
							</div>
						</div>
					</fieldset>
					
					<h1>Depart</h1>
					<fieldset>
						<div class="row">
							<div class="col-xs-2">
								<p>From:</p>
								<p>Lisbon airport (LIS)</p>
								<br><br>
								<p>From:</p>
								<p>Lisbon airport (LIS)</p>
							</div>
							<div class="col-xs-10">
								<div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
				                <div class="input-field">
				                  <label for="fname">First Name</label>
				                  <input id="fname" class="form-control" name="fname" type="text"  class="validate">
				                </div>
							</div>
						</div>
					</fieldset>

				</div>	
			</div>
					
		</div>
	</section>

</div>
@endsection

@section('script')
  <script>

  </script>
@endsection