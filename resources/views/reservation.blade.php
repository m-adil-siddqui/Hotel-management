@extends('layouts.app')
@section('content')
<div class="wrapper">
  
	  <nav class="navbar-default" id="nav-setting" style="">
      <div id="collapsenavbar" class="navbar-collapse">
           <ul class="navbar-nav" id="main-menu">

                    <li class="nav-item active">
                        <a class="active-menu" href="{{url('/home')}}"><i class="fa fa-tachometer-alt"></i> Home</a>
                    </li>
                       
          </ul>
     </div>
    </nav>

    <div class="page-wraper">
    <div class="page-inner-wraper">
			<div class="row">
        
     <div class="col-md-12">
        <h1 class="page-header">
            Reservation
        </h1>
    </div>

				<div class="col-md-6 col-ms-6">
					<div class="card">
						<div class="card-header" style="background: #428bca;">
							PERSONAL INFORMATION
						</div>
						<div class="card-body">
							<form action="{{route('booking.reservation.store')}}" method="post">
								@csrf
								<div class="form-group">
								    <label>Title*</label>
                    @if($errors->has('title'))
                      <span style="color: red;">{{$errors->first('title')}}</span>
                     @endif
                    <select name="title" class="form-control"   >
										<option value selected >Select title</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
										<option value="Prof.">Prof.</option>
										<option value="Rev .">Rev .</option>
										<option value="Rev . Fr">Rev . Fr .</option>
                                     </select>
								</div>
								  <div class="form-group">
                      <label>First Name</label>
                      @if($errors->has('fname'))
                        <span style="color: red;">{{$errors->first('fname')}}</span>
                      @endif
                      <input name="fname" class="form-control">
                  </div>
							   <div class="form-group">
                      <label>Last Name</label>
                      @if($errors->has('lname'))
                        <span style="color: red;">{{$errors->first('lname')}}</span>
                      @endif
                      <input name="lname" class="form-control">
                 </div>
							   <div class="form-group">
                    <label>Email</label>
                    @if($errors->has('email'))
                        <span style="color: red;">{{$errors->first('email')}}</span>
                      @endif
                    <input name="email" type="email" class="form-control">
                  </div>
                 <div class="form">
                 	  <label>Nationality*</label>
                       @if($errors->has('nation'))
                        <span style="color: red;">{{$errors->first('nation')}}</span>
                      @endif
                   	<label class="radio-inline">
                 		<input type="radio" name="nation" value="pak" checked=""> &nbsp;PAK
                   	</label>
                   	<label class="radio-inline">
                 		<input type="radio" name="nation" value="non-pak"> &nbsp;NON PAK
                   	</label>
                 </div>
                               <?php 
								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                               ?>
                               <div class="form-group">
                               	<label>Passport Country*</label>
                                 @if($errors->has('country'))
                                   <span style="color: red;">{{$errors->first('country')}}</span>
                                 @endif
                               	<select class="form-control" name="country">
                               		<option>Select Country</option>
                               		
                               		<?php
                                     foreach ($countries as $key => $value) {
                                     ?>
                                     <option value="<?php echo $key; ?>"><?php echo $value  ;?></option>
                                     <?php
                                     }
                               		?>
                               	</select>
                               </div>
                               	<div class="form-group">
                                    <label>Phone Number</label>
                                    @if($errors->has('phone'))
                                      <span style="color: red;">{{$errors->first('phone')}}</span>
                                    @endif
                                    <input name="phone" type ="text" class="form-control">
                               </div>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="card">
              <div class="card-header" style="background: #428bca;">
                  RESERVATION INFORMATION
              </div>
              <div class="card-body">
							<div class="form-group">
                  <label>Type Of Room *</label>
                     @if($errors->has('troom'))
                        <span style="color: red;">{{$errors->first('troom')}}</span>
                      @endif
                      <select name="troom"  class="form-control" >
				                  <option value selected ></option>
                          <option value="Superior Room">SUPERIOR ROOM</option>
                          <option value="Deluxe Room">DELUXE ROOM</option>
			                  	<option value="Guest House">GUEST HOUSE</option>
			                  	<option value="Single Room">SINGLE ROOM</option>
                      </select>
              </div>
							  <div class="form-group">
                  <label>Bedding Type</label>
                    @if($errors->has('tbed'))
                        <span style="color: red;">{{$errors->first('tbed')}}</span>
                      @endif
                  <select name="tbed" class="form-control" >
	                    <option value selected ></option>
                      <option value="Single">Single</option>
                      <option value="Double">Double</option>
                     	<option value="Triple">Triple</option>
                      <option value="Quad">Quad</option>
                     	<option value="None">None</option>
                  </select>
                </div>
							  <div class="form-group">
                   <label>No.of Rooms *</label>
                   @if($errors->has('nroom'))
                        <span style="color: red;">{{$errors->first('nroom')}}</span>
                      @endif
                    <select name="nroom" class="form-control" >
	                	<option value selected ></option>
                   <option value="1">1</option>
                                        <!--<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>-->
                   </select>
               </div>


							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            @if($errors->has('meal'))
                        <span style="color: red;">{{$errors->first('meal')}}</span>
                      @endif
                                    <select name="meal" class="form-control">
										<option value selected ></option>
                                        <option value="Room only">Room only</option>
                                        <option value="Breakfast">Breakfast</option>
    									<option value="Half Board">Half Board</option>				
    									<option value="Full Board">Full Board</option>
                                    </select>
                              </div>
							  <div class="form-group">
                                    <label>Check-In</label>
                                    @if($errors->has('cin'))
                        <span style="color: red;">{{$errors->first('cin')}}</span>
                      @endif
                                    <input name="cin" type ="date" class="form-control">
                               </div>
							   <div class="form-group">
                                    <label>Check-Out</label>
                                    @if($errors->has('cout'))
                        <span style="color: red;">{{$errors->first('cout')}}</span>
                      @endif
                                    <input name="cout" type ="date" class="form-control">
                               </div>
                       </div>

                    </div>
				</div>
				 
			</div>
			<div class="row" id="well-setting">
				<div class="col-md-12 col-sm-12">
					<div class="well" style="background: #fff;">
						<h4>HUMAN VERIFICATION</h4>
						<p>Type Blew this code <?php $code = rand(); echo $code;?></p><br>
						<input type="text" name="code1" placeholder="Enter code">
                        <input type="hidden" name="code" value="<?php echo $code;?>">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </form>
                        <div id="msg">
                        	@if(session()->has('error'))
                               <div class="alert alert-danger">{{session('error')}}</div>
                        	@endif
                          @if(session()->has('message'))
                               <div class="alert alert-success">{{session('message')}}</div>
                          @endif
                        </div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>



@endsection