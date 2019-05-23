
<div class="row">
  <div class="col-md-12">
    <h1 class="page-header">
        User Profile
    </h1>
  </div>
</div><!---- /.row--->

<div class="row">
    <div class="col-md-12">
        @if(session()->has('message'))
          <p class="alert alert-success">{{session('message')}}</p>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover payment-tbl">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>User Name</th>
                                <th>Update</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(@$users as $key => $u)
                              <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$u->email}}</td>
                                  <td><button   data-task="{{$u->id}}" 
                                   class="btn btn-primary btn-sm update">Update</button></td>
                                  <td><button data-task="{{$u->id}}" class="btn btn-danger btn-sm user-del">Remove</a></td>
                                  
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="margin-top: 2em;"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add New</button></div>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add new User name and Password</h4>
                <button data-dismiss="modal" type="button" aria-hidden="true" class="close">&times;</button>
                
            </div>
            <form action="{{route('admin.register')}}" method="POST">
                @csrf
            <div class="modal-body">
                 <div class="form-group">
                     <input name="name" type="text" class="form-control" placeholder="Enter User name">
                </div>
                 <div class="form-group">
                     <input name="password"  type="password" class="form-control" placeholder="Enter password" style="border: 1px solid gray;">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id=updateModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update User name and Password</h4>
                <button data-dismiss="modal" type="button" aria-hidden="true" class="close">&times;</button>
                
            </div>
            <form action="" method="POST">
                @csrf
            <div class="modal-body">
                 <div class="form-group">
                     <input name="name" type="text" value="" class="form-control" placeholder="Enter User name">
                </div>
                 <div class="form-group">
                     <input name="password"  type="password" class="form-control" placeholder="Enter password" style="border: 1px solid gray;">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">Update</button>
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

