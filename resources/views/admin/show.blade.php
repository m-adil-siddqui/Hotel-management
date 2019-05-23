<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
</head>
<body>
<div class="full-pg">
	<div class="inner-pg">
		<header>
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-2 m-auto">
					<div class="content">

					  <h1 class="sh1">Information of Guest</h1>
					     <div class="address">
						  <p>SUN RISE HOTEL,</p>
						  <p>New Kalmunani Road,<br>Battialoa,<br>Sri Lanka.</p>
						  <p>(+94) 65 222 44 55</p>
					    </div>
			          <div class="simg"><img src="{{asset('public/images/sun.png')}}"></div>
			          <div class="clearfix"></div>

			          <div class="cus-name">
			          	<p><h4>Customer Name :- <small>{{$reser->customer->fname . " " . $reser->customer->lname}}</small></h4></p>
			          </div>
			          <div class="check">
			          	<table class="meta">
			          		<tr>
			          			<th>Customer ID</th>
			          			<td>{{$reser->customer_id}}</td>
			          		</tr>
			          		<tr>
			          			<th>Check in Date</th>
			          			<td>{{$reser->cin}}</td>
			          		</tr>
			          		<tr>
			          			<th>Check out Date</th>
			          			<td>{{$reser->cout}}</td>
			          		</tr>
			          	</table>
			          </div>
			          <div class="clearfix"></div>

			          <div class="details">
			          	<table class="info">
			          		<tr>
			          			<td>Custoemr phone: &nbsp;&nbsp;{{$reser->customer->phone}}</td>
			          			<td>Custoemr country: &nbsp;&nbsp;{{$reser->customer->country}}</td>
			          		</tr>
			          		<tr>
			          			<td>Custoemr email: &nbsp;&nbsp;{{$reser->customer->email}}</td>
			          			<td>Custoemr nationality: &nbsp;&nbsp;{{$reser->customer->nationality}}</td>
			          		</tr>
			          	</table>
			          </div>
			          <div class="clearfix"></div>

			          <div class="details">
			          	<table class="info">
			          		<thead>
				          		<tr>
				          			<th>Item</th>
				          			<th>No of Days</th>
				          		</tr>
			          		</thead>
			          		<tbody>
				          		<tr>
				          			<td>Superior Room</td>
				          			<td>{{$reser->num_days}}</td>
				          		</tr>
				          		<tr>
				          			<td>Double Room</td>
				          			<td>{{$reser->num_days}}</td>
				          		</tr>
				          		<tr>
				          			<td>Room Only</td>
				          			<td>{{$reser->num_days}}</td>
				          		</tr>
			          		</tbody>
			          	</table>
			          </div>
			          <div class="clearfix"></div>

			          <aside>
			          	<h1>Contact Us</h1>
			          	<div class="aside-footer">Email :- adil@gmail.com || web :- www.xyz.com || phone :- 03215-5485</div>
			          </aside>
			       </div><!--- /content -->
				</div>
			</div>
		</div>
		</header>
  </div>
</div>

<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
</body>
</html>