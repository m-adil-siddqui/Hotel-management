  <div class="col-md-12">
        <h1 class="page-header">
            New Room
        </h1>
        @if(isset($message))
        <div class="alert alert-warning alert-dismissible">
          
            <p>{{@$message}}</p>
          
          <button data-dismiss="alert" class="close" type="button">&times;</button>
        </div>
        @endif
    </div>
    <div class="col-md-5 col-sm-5">
      <div class="card">
        <div class="card-header" style="background: #428bca;  border-color: #428bca;">
          <h6 class="card-title">Add New Room</h6>
        </div>
          
         <div class="card-body">
                            <form id="ajaxData" method="POST" action='{{URL::route("admin.room.store")}}'>
                                @csrf
                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control">
                                                <option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                                <option value="Guest House">GUEST HOUSE</option>
                                                <option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
                              
                                <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control">
                                                <option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                                                <option value="Triple">None</option>
                                                                                             
                                            </select>
                                            
                               </div>
                             <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
                            </form>  
                 
            </div>
      </div>
    </div>
    <div class="col-md-7 col-sm-7">
        <div class="card">
            <div class="card-header" style="background: #428bca; border-color: #428bca;">
                <h6 class="card-title">Room Information</h6>
            </div>
               <div class="card-body">
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
                                            <th>Bedding</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      

                                      @if(isset($rooms))
                                          @foreach($rooms as $key => $r)
                                         <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$r->troom}}</td>
                                            <td>{{$r->bed}}</td>
                                           
                                            <td><button type="button"  id="tbtn" data-task="{{$r->id}}" class="btn btn-danger tablebtn">Delete</button></td>
                                          
                                        </tr>
                                       @endforeach
                                       @endif
                                   </tbody>
                               </table>
                           </div>
            </div>
        </div>
    </div>