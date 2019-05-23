@extends('admin.layout.app')
@section('content')
    <?php
      $scls = 0;
      $dcls = 0;
      $gcls = 0;
      $sngcls = 0;
      $total = 0;
      $roomPrice = 0;
      $bedPrice = 0;
      $mealPrice = 0;
      $totalSuperior = 0;
      $totalDeluxe = 0;
      $totalGuest = 0;
      $totalSingle = 0;
    ?>

    @foreach($payments as $p)
      @if($p->reservation->room == 'Superior Room')
        <?php $totalSuperior += 1 ?>

      @elseif($p->reservation->room == 'Deluxe Room')
        <?php $totalDeluxe += 1 ?> 

     @elseif($p->reservation->room == 'Guest House')
        <?php $totalGuest += 1 ?>     
     
     @elseif($p->reservation->room == 'Single Room')
        <?php $totalSingle += 1 ?>

     @endif    
    @endforeach
   
   


    @foreach($rooms as $key => $r)
        <?php $total++; ?>

          @if($r->troom == 'Superior Room')

            <?php  $scls++; ?>
          @endif  
          @if($r->troom == 'Deluxe Room')

            <?php  $dcls++; ?> 
          @endif

          @if($r->troom == 'Guest House')

            <?php  $gcls++; 
                
            ?>
          @endif  
          @if($r->troom == 'Single Room')
            <?php  $sngcls++;?> 
          @endif
          
    @endforeach 

@if($reservation->room == 'Superior Room')
    <?php $roomPrice = 320; ?>
  
  @elseif($reservation->room == 'Deluxe Room')
    <?php $roomPrice = 220; ?>
  
  @elseif($reservation->room == 'Guest House')
    <?php $roomPrice = 180; ?>

  @else($reservation->room == 'Single Room')
    <?php $roomPrice = 150; ?>  
  
  @endif


  @if($reservation->bed == 'Single')
    <?php $bedPrice = $roomPrice * 1/100; ?>
  
  @elseif($reservation->bed == 'Double')
    <?php $bedPrice = $roomPrice * 2/100; ?>
  
  @elseif($reservation->bed == 'Triple')
    <?php $bedPrice = $roomPrice * 3/100; ?>

  @elseif($reservation->bed == 'Quad')
    <?php $bedPrice = $roomPrice * 4/100; ?>

  @else($reservation->bed == 'None')
    <?php $bedPrice = $roomPrice * 0/100; ?>  
  
  @endif


  @if($reservation->meal == 'Room only')
    <?php $mealPrice = $bedPrice * 0; ?>
  
  @elseif($reservation->meal == 'Breakfast')
    <?php $mealPrice = $bedPrice * 2; ?>
  
  @elseif($reservation->meal == 'Half Board')
    <?php $mealPrice = $bedPrice * 3; ?>

  @else($reservation->meal == 'Full Board')
    <?php $mealPrice = $bedPrice * 4; ?>  
  
  @endif
 <?php
 $totalRomprice = $roomPrice * $reservation->num_days * $reservation->num_room;
 $totalMealprice = $mealPrice * $reservation->num_days;
 $totalBedprice = $bedPrice * $reservation->num_days;
 $total_amount = $totalRomprice + $totalBedprice + $totalMealprice;
 ?>


<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Room Booking <small>Room Booking</small>
        </h1>

    </div>
    <div class="col-md-8 col-sm-6">
    	<div class="card">
    		<div class="card-header" style="background: #d9edf7; border-color: #d9edf7;">
    			<h5 class="card-title">Booking Confirmation</h5>
    		</div>
    		<div class="card-body">
    			<div class="table-responsive">
    				<table class="table">
    					<tr>
    						<th>DESCRIPTION</th>
    						<th>INFORMATION</th>
    					</tr>
    					  <tr>
                        <td>Name</td>
                         <td>{{$reservation->customer->title}} {{$reservation->customer->fname}} {{$reservation->customer->lname}}</td>
                        </tr>
					<tr>
                        <td>Email</td>
                        <td>{{$reservation->customer->email}}</td>
                        
                    </tr>
					<tr>
                        <td>Nationality </td>
                        <td>{{$reservation->customer->nationality}}</td>
                        
                    </tr>
					<tr>
                        <td>Country </td>
                        <td>{{$reservation->customer->country}}</td>
                        
                    </tr>
					<tr>
                        <td>Phone No </td>
                        <td>{{$reservation->customer->phone}}</td>
                        
                    </tr>
					<tr>
                        <td>Type Of the Room </td>
                        <td>{{$reservation->room}}</td>
                        
                    </tr>
					<tr>
                        <td>No Of the Room </td>
                        <td>{{$reservation->num_room}}</td>
                        
                    </tr>
					<tr>
                        <td>Meal Plan </td>
                        <td>{{$reservation->meal}}</td>
                        
                    </tr>
					<tr>
                        <td>Bedding </td>
                        <td>{{$reservation->bed}}</td>
                        
                    </tr>
					<tr>
                        <td>Check-in Date </td>
                        <td>{{$reservation->cin}}</td>
                        
                    </tr>
					<tr>
                        <td>Check-out Date</td>
                        <td>{{$reservation->cout}}</td>
                        
                    </tr>
					<tr>
                        <td>No of days</td>
                        <td>{{$reservation->num_days}}</td>
                        
                    </tr>
					<tr>
                        <td>Status Level</td>
                        <td>{{$reservation->status}}</td>
                        
                    </tr>
                                   
    				</table>
    			</div>
    		</div>
    		<div class="card-footer">
    			<form method="POST" action="{{route('admin.payment.store')}}">
                    @csrf
    				<div class="form-group">
    					<label>Select Confirmation</label>
    					<select class="form-control" name="status">
    						<option value="">Select</option>
    						<option value="confirm">Confirm</option>
    					</select>
    				</div>
    				<div class="form-group">
                        <input type="hidden" name="id" value="{{$reservation->id}}">
                        <input type="hidden" name="cid" value="{{$reservation->customer->id}}">
                        <input type="hidden" name="bed" value="{{$reservation->bed}}">
                        <input type="hidden" name="room" value="{{$reservation->room}}">
                        <input type="hidden" name="rprice" value="<?php echo $totalRomprice?>">
                        <input type="hidden" name="bprice" value="<?php echo $totalBedprice?>">
                        <input type="hidden" name="mprice" value="<?php echo $totalMealprice?>">
                        <input type="hidden" name="tamount" value="<?php echo $total_amount?>">
    					<input type="submit" name="submit" value="Confirm" class="btn btn-success">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h6>Available Rooms</h6>
            </div>
            <div class="card-body">
                <table width="200px;">
                         
                    <tr>
                        <td>Superior room</td>
                        <td><button class="btn btn-primary btn-circle"><?php 
                          echo ($scls-$totalSuperior <= 0) ? '0' : $scls-$totalSuperior;
                         ?></button></td>
                    </tr>
                    <tr>
                        <td>Deluxe room</td>
                        <td><button class="btn btn-primary btn-circle"><?php
                          echo ($dcls-$totalDeluxe <= 0) ? '0' : $dcls-$totalDeluxe;
                         ?></button></td>
                    </tr>
                     <tr>
                        <td>Guest house</td>
                        <td><button class="btn btn-primary btn-circle"><?php
                          
                          echo ($gcls-$totalGuest <= 0) ? '0' : $gcls-$totalGuest;
                          
                         ?></button></td>
                    </tr>
                    <tr>
                        <td>Single room</td>
                        <td><button class="btn btn-primary btn-circle"><?php 
                           echo ($sngcls-$totalSingle <= 0) ? '0' : $sngcls-$totalSingle;
                          ?></button></td>
                    </tr>
                    <tr>
                        <td>Total rooms</td>
                        <td><button class="btn btn-danger btn-circle"><?php echo 
                          ($scls-$totalSuperior) + ($dcls-$totalDeluxe) + ($gcls-$totalGuest) + ($sngcls-$totalSingle)
                         ?></button></td>
                        
                    </tr>
                </table>
            </div>
        </div>
    
    </div>
</div><!---- /.row-->





@endsection


