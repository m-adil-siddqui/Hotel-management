@extends('admin.layout.app')
@section('content')                   
    
<div class="row">
  <div class="col-md-12">
    <h1 class="page-header">
        Payment Details
    </h1>
  </div>
</div><!---- /.row--->

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover payment-tbl" 
					id="data-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Room type</th>
                                <th>Bed Type</th>
                                <th>Check in</th>
								<th>Check out</th>
								<th>No of Room</th>
								<th>Meal Type</th>
                                <th>Room Rent</th>
								<th>Bed Rent</th>
								<th>Meals </th>
								<th>Gr.Total</th>
								<th>Print</th>
							</tr>
						</thead>
						<tbody>
							@foreach($payment as $p)
								<tr>
									<td>{{$p->customer->title." ".$p->customer->fname." ".$p->customer->lname}}</td>
									<td>{{$p->reservation->room}}</td>
									<td>{{$p->reservation->bed}}</td>
									<td>{{$p->reservation->cin}}</td>
									<td>{{$p->reservation->cout}}</td>
									<td>{{$p->reservation->num_room}}</td>
									<td>{{$p->reservation->meal}}</td>
									<td>{{$p->room_price}}</td>
									<td>{{$p->bed_price}}</td>
									<td>{{$p->meal_price}}</td>
									<td>{{$p->total_price}}</td>
									<td><a href="{{route('admin.payment.print',$p->id)}}" class="btn btn-primary btn-sm btn-sting"><i class="fa fa-print"></i> Print</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>





@endsection            