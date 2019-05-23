@extends('admin.layout.app')
@section('content')                   
    
    
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Status <small>Room Booking</small>
                    </h1>
                </div>
            </div><!---- /.row--->

            <div class="row">
                @if(session()->has('message'))
                 <p class="alert alert-success" style="margin-left: 5px;">{{session('message')}}</p>
                @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div id="accordion">
                                <div class="card card-primary">
                                    <div class="card-header"  style="background: #428bca;">
                                        <h4 class="card-title">
                                            <a href="#collapsetow"  data-toggle="collapse" data-parent="accordion">
                                                <button class="btn btn-default">New Room Booking
                                                    <span class="badge">
                                                      {{$count}}
                                                    </span></button>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse in" id="collapsetow" style="height: auto;">
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive payment-tbl">
                                                        <table class="table">
                                                            <thead>
                                                              <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Country</th>
                                                                <th>Room</th>
                                                                <th>Bedding</th>
                                                                <th>Meal</th>
                                                                <th>Check In</th>
                                                                <th>Check Out</th>
                                                                <th>Status</th>
                                                                <th>More</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($reservation as $key => $re)
                                                                  <?php $no = 0;?>
                                                                 @if($re->status == 'Not confirm')
                                                                <tr>
                                                                    <td>{{$no + 1}}</td>
                                                                    @foreach($customers as $c)
                                                                      @if($re->customer_id == $c->id)
                                                                       <td>{{$c->fname}} {{$c->lname}}</td>
                                                                       <td>{{$c->email}}</td>
                                                                       <td>{{$c->country}}</td>
                                                                      @endif
                                                                    @endforeach
                                                                    <td>{{$re->room}}</td>
                                                                    <td>{{$re->bed}}</td>
                                                                    <td>{{$re->meal}}</td>
                                                                    <td>{{$re->cin}}</td>
                                                                    <td>{{$re->cout}}</td>
                                                                    <td>{{$re->status}}</td>
                                                                    <td><a href="{{route('booking.reservation.show',$re)}}" class="btn btn-primary btn-sting">Confirm</a></td>
                                                                </tr>
                                                                 @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="margin-top: 1em;">
                                    <div class="card-header" style="background: #d9edf7;">
                                        <h4 class="card-title">
                                            <a href="#collapsethree" data-parent="accordion" data-toggle="collapse">
                                                <button class="btn btn-primary" type="button">Booked Room
                                                    <?php $no1 = 0; ?>
                                                    @foreach($reservation as $r)
                                                      @if($r->status == 'confirm')
                                                         <?php
                                                           $no1++;
                                                          ?>
                                                      @endif
                                                    @endforeach
                                                    <span class="badge2"><?php echo $no1;?></span>
                                                </button>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsethree" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="card-body">
                                            <div class="row">
                                            @foreach($reservation as $r)
                                              @if($r->status == 'confirm')
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <i class="fa fa-users fa-5x" style="color: #4cb1cf;"></i>
                                                        <h4>{{$r->customer->fname}}</h4>
                                                    </div>
                                                    <div class="card-footer">
                                                        <a href="{{route('booking.show',$r->id)}}" class="btn btn-primary btn-sm" style="float: left;">Show</a>
                                                        <h6 style="float: right;">{{$r->room}}</h6>
                                                    </div> 
                                                </div>
                                                </div>
                                              @endif
                                            @endforeach
                                            
                                            </div>
                                           
                                        </div>
                                    </div>   
                                </div>
                                <div class="card" style="margin-top: 1em;">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            <a href="#collapseone" data-toggle="collapse" data-parent="accordion">
                                                <button type="button" class="btn btn-primary">Followers
                                                  <span class="badge2">
                                                      <?php
                                                         $no = 0;
                                                      ?>
                                                      @foreach($contacts as $v)
                                                           <?php
                                                            $no++;

                                                           ?>
                                                      @endforeach
                                                      <?php
                                                          echo $no;
                                                      ?>
                                                  </span>
                                                </button>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Full Name</th>
                                                                    <th>Email</th>
                                                                    <th>Follow start</th>
                                                                    <th>Permission status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($contacts as $key => $c)
                                                                <tr>
                                                                    <td>{{$key+1}}</td>
                                                                    <td>{{$c->name}}</td>
                                                                    <td>{{$c->email}}</td>
                                                                    <td>{{$c->created_at}}</td>
                                                                    <td>{{$c->status}}</td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div><a href="{{route('admin.contact.index')}}" class="btn btn-primary btn-sm">More Action</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
















@endsection