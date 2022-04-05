<!DOCTYPE html>
<html lang="en">

<head>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	{{-- <link type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" /> --}}

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <x-header />
</head>

<body>
    <x-navbar/>
	<div id="booking" class="section" style="background-image: url('{{URL::asset('/img/background.jpg')}}');">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="POST" action="{{route('preparepayment',['id'=>$tour->id])}}">
							@csrf
							<div class="form-group">
								<h1 style="color: white">Booking: BST-{{$tour->id}} {{$tour->title}} Departure: {{$tour->province->province}}</h1>
							</div>
							<input name="tour_id" value="{{$tour->id}}" hidden/>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Phone:</span>
										<input class="form-control" type="tel" placeholder="Phone" name="phone" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Email" name="email" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing Date</span>
										<input class="form-control" type="date" disabled required value="{{$tour->departure_date}}">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Duration</span>
										<input class="form-control" type="number" value="{{$tour->duration}}" disabled  required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<input class="form-control" type="number" name="adults" min="1" value="1"/>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<input class="form-control" type="number" name="children" min="0" value="0"/>
									</div>
								</div>
							</div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Address:</span>
                                        <input class="form-control" type="text" placeholder="Address" name="address" required>
                                    </div>
                                </div>   
                            </div>
							<div class="col-md-3">
								<div class="form-btn">
									<button class="submit-btn">Book</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    @includeIf('partials.scriptjs')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>