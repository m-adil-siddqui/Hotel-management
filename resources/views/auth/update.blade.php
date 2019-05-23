<div class="modal fade" id=updateModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update User name and Password</h4>
                <button data-dismiss="modal" type="button" aria-hidden="true" class="close">&times;</button>
                
            </div>
            <form action="{{route('admin.register')}}" method="POST">
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