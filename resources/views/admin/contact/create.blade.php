<div class="row">
<div class="col-md-12">
    <h1 class="page-header">
        News letters <small>Panel</small>
    </h1>
       @if(session()->has('message'))
        <p class="alert alert-success" style="margin-left: 5px;">{{session('message')}}</p>
       @endif
</div>
</div><!---- /.row--->

<div class="row">

	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div style="padding: 2em;">
				<h2 style="padding: 1em 0em 2em 0em;">Send The News Letters to Followers</h2>
				<button class="btn btn-primary" data-toggle="modal" data-target="#newsModal">Send New News Letters</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row" style="margin-top: 2em;">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover payment-tbl" 
					id="contact-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone Number</th>
                                <th>Email</th>
                                <th>Date</th>
								<th>Status</th>
								<th>Apporve | Unapprove</th>
								<th>Remove</th>
								 
							</tr>
						</thead>
						<tbody>
							@foreach($contacts as $c)
								<tr>
									<td>{{$c->name}}</td>
									<td>{{$c->phone}}</td>
									<td>{{$c->email}}</td>
									<td>{{$c->created_at}}</td>
									<td>
										@if($c->status == 'approved')
                                          <span style="color: green;">Approved</span>
                                        @elseif($c->status == 'unapproved')
                                          <span style="color: red;">Pending</span>
                                        @endif    
									</td>
									<td><button class="btn btn-primary btn-sm approve" data-task="{{$c->id}}">Approved</button> | <button class="btn btn-primary btn-sm unapprove" data-task="{{$c->id}}">Unapproved</button></td>
									<td><button class="btn btn-danger btn-sm del" data-task="{{$c->id}}">Remove</button></td>
								</tr>
					           @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

 





	<div class="modal fade" id="newsModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	        	<h4 class="modal-title" id="myModalLabel">Compose News Letter</h4>
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	           
	        </div>
			<form method="POST" action="{{route('admin.newsletter.store')}}">
				@csrf
	        <div class="modal-body">
	            <div class="form-group">
	            <label>Title</label>
	            @if($errors->has('title'))
                  <span style="color: red;">{{$errors->first('title')}}</span>
                @endif  

	            <input name="title" class="form-control" placeholder="Enter Title">
				</div>
			</div>
			<div class="modal-body">
	            <div class="form-group">
	            <label>Subject</label>
	             @if($errors->has('subject'))
                  <span style="color: red;">{{$errors->first('subject')}}</span>
                @endif  
	            <input name="subject" class="form-control" placeholder="Enter Subject">
				</div>
	        </div>
			<div class="modal-body">
			<div class="form-group">
			  <label for="comment">News</label>
			   @if($errors->has('news'))
                  <span style="color: red;">{{$errors->first('news')}}</span>
                @endif  
			  <textarea name="news" class="form-control" rows="5" id="comment"></textarea>
			</div>
			 </div>
	        <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
	           <input type="submit" name="log" value="Send" class="btn btn-primary">
			  </form>
			   
	        </div>
	    </div>
	</div>
	</div>




