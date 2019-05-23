@extends('admin.layout.app')
@section('content')                   
    
<div class="row">
  <div class="col-md-12">
    <h1 class="page-header">
        Profit Details
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
								<th>#</th>
								<th>Name</th>
                                <th>Check in</th>
                                <th>Check out</th>
								<th>Room Rent</th>
								<th>Bed Rent</th>
								<th>Meals</th>
                                <th>Gr.Total</th>
								<th>Profit</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($profit as $key => $p)
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$p->customer->title." ".$p->customer->fname." ".$p->customer->lname}}</td>
									<td>{{$p->reservation->cin}}</td>
									<td>{{$p->reservation->cout}}</td>
									<td>${{$p->room_price}}</td>
									<td>${{$p->bed_price}}</td>
									<td>${{$p->meal_price}}</td>
									<td>${{$p->total_price}}</td>
									<td>${{$p->total_price * 10/100}}</td>
							
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