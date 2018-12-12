<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/book/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/book/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form form">
						<form  action="{{ route('pesan.store') }}"method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
							<div class="col-md-8">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Fullname" name="pesanNama">
									<span class="form-label">Name</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								<input class="form-control" type="text" placeholder="Hotel's Name"required name="pesanHotel">
									
									<span class="form-label">Hotel</span>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="number" placeholder="(+62) xxxx-xxxx"required name="pesanNoHp">
									<span class="form-label">Phone Number</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="e.g : example@mail.com"required name="pesanEmail">
									<span class="form-label">Email</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<select class="form-control" name="pesanPenyedia">
												<option value="traveloka">Traveloka</option>
                       							<option value="airy">Airy Room</option>
                      						  	<option value="redDoor">Red Doors</option>
									</select>
									<span class="select-arrow"></span>
									<span class="form-label">Penyedia</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="date" required name="checkIn">
									<span class="form-label">Check In</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="date" required name="checkOut">
									<span class="form-label">Check out</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-btn">
									<button class="submit-btn">Check availability</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>