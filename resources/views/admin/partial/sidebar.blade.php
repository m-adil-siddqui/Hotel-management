 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="" class="navbar-brand font-weight-bold">ADMIN</a>
            <button class="navbar-toggler" data-target="#collapsenavbar" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
                   
            <ul class="nav navbar-top-links navbar-right">
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="{{route('admin.register')}}"><i class="fa fa-user"></i> User Profile</a>
                    </li>
                    <li>
                        <a href="{{route('admin.room.create')}}"><i class="fas fa-cog"></i> Settings</a>
                    </li>
                    <li class="divider"></li> 
                    <li>

                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();
                        "><i class="fas fa-sign-out-alt"></i> Logout</a>
                        <form style="display: none;" id="logout-form" method="POST" 
                         action="{{route('logout')}}">
                             @csrf
                         </form>
                    </li>
                </ul>
              </li>
            </ul>
            
         </div>

    </nav>
   <nav class="navbar-default" id="nav-setting">
      <div id="collapsenavbar" class="navbar-collapse">
           <ul class="navbar-nav" id="main-menu">

                    <li class="nav-item active">
                        <a class="active-menu" href="{{url('/home')}}"><i class="fa fa-tachometer-alt"></i> Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.contact.index')}}"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/home')}}"><i class="fa fa-chart-bar"></i> Room Booking</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.payment.index')}}"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li class="nav-item">
                        <a  href="{{route('admin.profit')}}"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                             document.getElementById('logout').submit();
                        "><i class="fas fa-sign-out-alt"></i> Logout</a>
                        <form action="{{route('logout')}}" method="POST" id="logout" style="display: none;">
                            @csrf
                        </form>
                    </li>       
          </ul>
     </div>
    </nav>