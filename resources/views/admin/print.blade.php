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

					  <h1 class="sh1">Invoice</h1>
					     <div class="address">
						  <p>SUN RISE HOTEL,</p>
						  <p>New Kalmunani Road,<br>Battialoa,<br>Sri Lanka.</p>
						  <p>(+94) 65 222 44 55</p>
					    </div>
			          <div class="simg"><img src="{{asset('public/images/sun.png')}}"></div>
			          <div class="clearfix"></div>

			          <div class="cus-name">
			          	<p><h4>Customer Name :- <small>
			          	{{$payment->customer->title." ".$payment->customer->fname." ".$payment->customer->lname}}</small></h4></p>
			          </div>
			          <div class="check">
			          	<table class="meta">
			          		 
			          		<tr>
			          			<th>Invoice #</th>
			          			<td>{{$payment->id}}</td>
			          		</tr>
			          		<tr>
			          			<th>Date</th>
			          			<td>{{$payment->reservation->cout}}</td>
			          		</tr>
			          	</table>
			          </div>
			          <div class="clearfix"></div>

			      <!--     <div class="details">
			          	<table class="info">
			          		<tr>
			          			<td>Custoemr phone: &nbsp;&nbsp;</td>
			          			<td>Custoemr country: &nbsp;&nbsp;</td>
			          		</tr>
			          		<tr>
			          			<td>Custoemr email: &nbsp;&nbsp;</td>
			          			<td>Custoemr nationality: &nbsp;&nbsp;</td>
			          		</tr>
			          	</table>
			          </div> -->
			          <div class="clearfix"></div>

			          <div class="details">
			          	<table class="info">
			          		<thead>
				          		<tr>
				          			<th>Item</th>
				          			<th>No of Days</th>
				          			<th>Rate</th>
				          			<th>Quantity</th>
				          			<th>Price</th>
				          		</tr>
			          		</thead>
			          		<tbody>
				          		<tr>
				          			<td>Superior Room</td>
				          			<td>{{$payment->reservation->num_days}}</td>
				          			@if($payment->reservation->room == 'Single Room')
                                       <td>
                                       	<?php
                                           $rPrice = 150;
                                           echo $rPrice;
                                       	?>
                                       </td>
                                    @elseif($payment->reservation->room == 'Guest House')   
                                       <td>
                                       	<?php
                                           $rPrice = 180;
                                           echo "$".$rPrice;
                                       	?>

                                       </td>
                                    @elseif($payment->reservation->room == 'Deluxe Room')   
                                       <td>
                                       	<?php
                                           $rPrice = 220;
                                           echo "$".$rPrice;
                                       	?>

                                       </td>   
				                    @elseif($payment->reservation->room == 'Superior Room')   
                                       <td>
                                      	<?php
                                           $rPrice = 320;
                                           echo "$".$rPrice;
                                       	?>
                                       </td>
				          			@endif
				          			<td>{{$payment->reservation->num_room}}</td>
				          			<td>${{$payment->room_price}}</td>
				          		</tr>
				          		<tr>
				          			<td>Double Room</td>
				          			<td>{{$payment->reservation->num_days}}</td>
                                       @if($payment->reservation->bed == 'Single')
                                          <td>
                                          	<?php
                                                 $bPrice = $rPrice * 1/100;
                                                 echo "$".$bPrice;
                                          	 ?>
                                          </td>
                                       @elseif($payment->reservation->bed == 'Double')
                                         <td>
                                         	<?php
                                                 $bPrice = $rPrice * 2/100;
                                                 echo "$".$bPrice;
                                          	 ?>
                                         </td>
                                         @elseif($payment->reservation->bed == 'Triple')
                                         <td>
                                         	<?php
                                                 $bPrice = $rPrice * 3/100;
                                                 echo "$".$bPrice;
                                          	 ?>
                                         </td> 
                                        @elseif($payment->reservation->bed == 'Quad')
                                         <td>
                                         	<?php
                                                 $bPrice = $rPrice * 4/100;
                                                 echo "$".$bPrice;
                                          	 ?>
                                         </td>  

                                        @endif  
				          			    <td>{{$payment->reservation->num_room}}</td>
				          			    <td>${{$payment->bed_price}}</td>
				          		</tr>
				          		<tr>
				          			<td>Room Only</td>
				          			<td>{{$payment->reservation->num_days}}</td>
				          			 
				          				 @if($payment->reservation->meal == 'Room only')
                                          <td>
                                          	<?php
                                                 $mPrice = $bPrice * 0;
                                                 echo "$".$mPrice;
                                          	 ?>
                                          </td>
                                       @elseif($payment->reservation->meal == 'Breakfast')
                                         <td>
                                         	<?php
                                                 $mPrice = $bPrice * 2;
                                                 echo "$".$mPrice;
                                          	 ?>
                                         </td>
                                         @elseif($payment->reservation->meal == 'Half Board')
                                         <td>
                                         	<?php
                                                 $mPrice = $bPrice * 3;
                                                 echo "$".$mPrice;
                                          	 ?>
                                         </td> 
                                        @elseif($payment->reservation->meal == 'Full Board')
                                         <td>
                                         	<?php
                                                 $mPrice = $bPrice * 4;
                                                 echo "$".$mPrice;
                                          	 ?>
                                         </td>  

                                        @endif 

				          	 
				          			<td>{{$payment->reservation->num_room}}</td>
				          			<td>${{$payment->meal_price}}</td>
				          		</tr>
			          		</tbody>
			          	</table>
			          </div>
			          <div class="clearfix"></div>
<!-- 			          <div class="row">
			          	<div class="col-sm-3 offset-sm-7"> -->
			          	 <div class="check-amount">
			          	 		<table class="meta-amount">
			          			<tr>
			          				<th>Total</th>
			          				<td>${{$payment->total_price}}</td>
			          			</tr>
			          			<tr>
			          				<th>Amount Paid</th>
			          				<td>$0.00</td>
			          			</tr>
			          			<tr>
			          				<th>Balance Due</th>
			          				<td>${{$payment->total_price}}</td>
			          			</tr>
			          		</table>
			          	 </div>
<!-- 			          	</div>	
			          </div> -->

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