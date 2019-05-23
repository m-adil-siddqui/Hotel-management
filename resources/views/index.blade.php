<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Federo|Oswald:300|Slabo+27px" rel="stylesheet">
      <!--<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> -->
       <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
       integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" 
       crossorigin="anonymous"> -->
        

      <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}"> 
      <link rel="stylesheet" type="text/css" href="{{asset('public/css/fontawesome-all.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="{{asset('public/css/flexslider.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/css/animated.css')}}"> 
      <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
 
    </head>
    <body>
      
    <!---Header----->

    <div class="banner-top">
        <div class="social-bnr-agileits">
            <ul class="social-icons3">
                <li><a href="" class="icon-border facebook"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="" class="icon-border twitter"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="" class="icon-border googleplus"><i class="fab fa-google-plus-square"></i></a></li>
            </ul>
        </div>
        <div class="contact-bnr-w3-agile">
            <ul>
                <li><i class="fa fa-envelope"></i><a href="">codeprojectsorg@gmail.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+92 (42)222-33-55</li>
                <li class="s-bar" style="background:  #ffce14;">
                    <div class="search" style="text-align: center;">
<!--                         <input type="checkbox" class="search_box" id="search_box"> -->
                        <label class="icon-search" for="search_box"><i class="fa fa-search"></i><!-- <span class="glyphicon glyphicon-search" aria-hidden="ture"></span> --></label>
                    </div>
                    <div class="search_form" style="background: #000;">    
                        <form>
                            <input type="text" name="">
                            <input type="submit" name="" value="Search">
                        </form>
                    </div>                    
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="w3-navigation">
        <nav class="navbar  navbar-expand-md  navbar-dark">
            <div class="container">
                <a href="" class="navbar-brand"><h3>SUN <span class="text-warning">RISE</span></h3><p class="text-warning">Your Dreamy Resort</p></a>
                <button class="navbar-toggler" data-target="#collapsenavbar" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center menu-iris" id="collapsenavbar">
                  
                    <ul class="navbar-nav ml-auto menu-list">
                     <li class="nav-item menu-item current-item">
                         <a href="#home" class="nav-link text-white menu-link scroll">HOME</a>
                     </li>  
                     <li class="nav-item menu-item">
                        <a href="#about" class="nav-link text-white menu-link scroll">ABOUT</a>
                    </li>  
                    <li class="nav-item menu-item">
                        <a href="#our-team" class="nav-link text-white menu-link scroll">TEAM</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a href="#gallery" class="nav-link text-white menu-link scroll">GALLERY</a>
                    </li>
                     <li class="nav-item menu-item">
                       <a href="#rooms" class="nav-link text-white menu-link scroll">ROOMS</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a href="#contact_us" class="nav-link text-white menu-link scroll">CONTACT US</a>
                    </li>      
                   </ul>
                  
                </div>
            </div>

        </nav>
    </div>
    <!---slider--->
    <section class="bootstrap-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicators"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="indicators"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="indicators"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('public/images/1.jpg')}}" alt="First slide">
            <div class="container">
               <div class="banner-info">
                 <center>
                   <h2>SUN RISE</h2>
                    <h3>Stay with friends & families</h3>
                    <p>Come & enjoy precious moment with us</p>
                    <div class="learn-more">
                        <a href="#" class="bttn" data-toggle="modal" data-target="#mymodal" >Learn More</a>
                    </div>
                 </center>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/images/2.jpg')}}" alt="Second slide">
               <div class="container">
                   <div class="banner-info">
                     <center>
                       <h2>SUN RISE</h2>
                       <h3>We know what you love</h3>
                        <p>Welcome to our hotels</p>
                        <div class="learn-more">
                            <a href="#" class="bttn" data-toggle="modal" data-target="#mymodal" >Learn More</a>
                        </div>
                     </center>
                  </div>
                 </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/images/3.jpg')}}" alt="Third slide">
               <div class="container">
                 <div class="banner-info">
                   <center>
                     <h2>SUN RISE</h2>
                     <h3>want luxurious vacation?</h3>
                      <p>Get accommodation today</p>
                      <div class="learn-more">
                          <a href="#" class="bttn" data-toggle="modal" data-target="#mymodal" >Learn More</a>
                      </div>
                   </center>
                </div>
              </div>
          </div>
      </div>
 
</div>
<!---
   <div class="thim-click-to-bottom">
                <a href="#about" class="scroll">
                   <i><img src="{{asset('public/images/d.png')}}" width="20" height="60"></i>
                </a>
            </div> -->

    </section>
    <div class="modal fade" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                  <h4>SUN <span>RISE</span></h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>    
                    <div class="modal-body">
                    <center>
                        <img src="{{asset('public/images/1.jpg')}}" width="450" class="img-responsive">
                    </center>
                    <p><h5>We know what you love</h5></p>
                    <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, 
                    makes Star Hotel one of bests in its kind.Try our food menu,
                    awesome services and friendly staff while you are here.</p>
                    </div>
             
            </div>
        </div>
    </div>
<div class="container-fluid room-reser-setting">
    <div class="row">
        <div class="col-md-12">
            <center><a href="{{route('booking.reservation.create')}}"><h2>ROOM RESERVATION</h2></a></center>
        </div>    
    </div>
    <div class="clearfix"></div>
</div>

<div class="container banner_bottom">
  <div class="row">
    <div class="col-md-10 ml-auto mr-auto">
      <center>
        <h3><span>Experience a good stay, enjoy fantastic offers</span><p class="blink"> Find our friendly welcoming reception</p></h3>
      </center>
    </div>
  </div>
</div>

<div class="container-fluid grid_icon">  
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <center>
        <ul class="box_setting">
      <li class="banner_box">
        <div class="grid_effect">
          <span class="icons">   
            <i class="fa fa-bed"></i>
          </span>
          <h4 class="icon-title">Master Bedrooms</h4>
          <span class="sun-rise-logo">Sun Rise</span>
        </div>
      </li>
      <li class="banner_box">
       <div class="grid_effect">
          <span class="icons">   
             <i class="fa fa-building"></i>
           </span>
           <h4 class="icon-title building-title">Sea View Balcony</h4>
           <span class="sun-rise-logo">Sun Rise</span>
        </div>
      </li>
      <li class="banner_box">
        <div class="grid_effect">
         <span class="icons">   
           <i class="fa fa-wifi"></i>
           </span>
           <h4 class="icon-title wifi-title">large cafe</h4>
          <span class="sun-rise-logo">Sun Rise</span>
        </div>
      </li>
      <li class="banner_box">
        <div class="grid_effect">
         <span class="icons">   
         <i class="fa fa-coffee"></i>
           </span>
           <h4 class="icon-title cofe-title">wifi cavrage</h4>
           <span class="sun-rise-logo">Sun Rise</span>
        </div>
      </li>
    </ul>
      </center>
    </div>

  </div>
</div>

<!---About our hotel ---->
<section class="about-our-hotel" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center><h2>About Our Hotel</h2></center>
        <p class="about-desc">One of the Great Hotels of the World, Our Hotel is Country’s only deluxe 5 Star Hotel. Brainchild of promoter, Mr. ABC, The Hotel was envisioned to be country’s most luxurious and exclusive property, offering amenities that a modern world-weary traveler can desire.</p>
       
         <img class="img-fluid" src="{{asset('public/images/about.jpg')}}" 
         style="max-width: 100%; height: auto;">
         <img class="img-fluid" src="{{asset('public/images/a1.jpg')}}" 
          style="max-width: 100%; height: auto;" 
         id="about-img2">  
        
        <div class="about-content">
          <h3>You'll Love All The Amenities We Offer!</h3>
          <p>Lorem ipsum dolor sit amet, ut magna aliqua.</p>
        </div>
      </div> 
    </div>
  </div>
  
  <!--- Our Services -->
    <div class="container-fluid our-services">
      <div class="row">
        <div class="col-md-12">
          <center><h2>Our Services</h2></center>
        </div>
      </div>
      <div class="row">
         <div class="container">
           <div class="row">
              <div class="col-md-6 col-sm-6 col-10 m-auto">
               <div class="our-service-section1">
                 <div class="inner-section-our-services">
                   <div class="log-our-services"><i class="fa fa-credit-card"></i></div>
                   <div class="heading-our-serviecs"><h3>Stay First, Pay After</h3></div>
                   <div class="content-our-services">
                     <p>We Heartly Welcome Our Customer. Customer doesnot have to pay any Amount before staying.. .</p>
                     <li><i class="fa fa-check"></i>Decorated room, proper air conditioned</li>
                     <li><i class="fa fa-check"></i>Private balcony</li>
                     <li><i class="fa fa-check"></i>VISA CARD,DEBIT,CREDIT,PAYPALS Accepted</li>
                   </div>
                 </div>
               </div>
              </div>
              <div class="col-md-6 col-sm-6 col-10 m-auto">
                <div class="our-service-section2">
                 <div class="inner-section-our-services">
                   <div class="log-our-services"><i class="fa fa-clock"></i></div>
                   <div class="heading-our-serviecs"><h3>24 Hour Restaurant</h3></div>
                   <div class="content-our-services">
                     <p>There is 24Hour Restaurant Open for our Customers. Every Items are available at any time...</p>
                      <li><i class="fa fa-check"></i>24 hours room service</li>
                      <li><i class="fa fa-check"></i>24-hour Concierge service</li>
                       <li><i class="fa fa-check"></i>24-hour laundry service.</li>
                   </div>
                 </div>
                </div>
              </div>
           </div>
         </div>
      </div>
    </div>

</section>

<!---------- OUT TEAM  ---->

<div id="our-team">
<div class="container">
          <center>
            <h3>Meet Our Team</h3>
          </center>
          <div id="horizontalTab">  
             <ul class="resp-tabs-list">
               <li><img src="{{asset('public/images/teams1.jpg')}}" onclick="showPanel(0)" class="img-responsive"></li>
               <li><img src="{{asset('public/images/teams2.jpg')}}" onclick="showPanel(1)"  class="img-responsive"></li>
               <li><img src="{{asset('public/images/teams3.jpg')}}" onclick="showPanel(2)" class="img-responsive"></li>
               <li><img src="{{asset('public/images/teams4.jpg')}}" onclick="showPanel(3)" class="img-responsive"></li>
             </ul>
          </div>
   <div class="team-content">       
    <div class="row col-md-10 ml-auto mr-auto">
      <div class="col-md-6 col-sm-10 col-10 m-auto pull-right">
       <!--  <img src="{{asset('public/images/teamb2.jpg')}}" class="img-responsive"> -->
      </div>
    <div class="col-md-6 col-sm-10 col-10 m-auto">
           <h4 class="team-member-name">Lucas Jimenez</h4>
           <p><small>Manager</small></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
          <div class="social-icon">
            <ul>
              <li><a href=""><i class="fab fa-facebook-square "></i></a></li>
              <li><a href=""><i class="fab fa-twitter-square "></i></a></li>
              <li><a href=""><i class="fab fa-google-plus-square "></i></a></li>
              <li><a href=""><i class="fas fa-rss-square "></i></a></li>
            </ul>
          </div>  
    </div>
    </div>
  </div>

  <div class="team-content">
  <div class="row col-md-10 ml-auto mr-auto">
    <div class="col-md-6 col-sm-10 col-10 m-auto pull-right">
      <img src="{{asset('public/images/teamb2.jpg')}}" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>
  <div class="col-md-6 col-sm-10 col-10 m-auto">
         <h4 class="team-member-name">Ivan Simpson</h4>
         <p><small>Manager</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
        <div class="social-icon">
          <ul>
            <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fab fa-twitter-square "></i></a></li>
            <li><a href=""><i class="fab fa-google-plus-square "></i></a></li>
            <li><a href=""><i class="fas fa-rss-square "></i></a></li>
          </ul>
        </div>  
  </div>
  </div>
</div>

<div class="team-content">
  <div class="row col-md-10 ml-auto mr-auto ">
    <div class="col-md-6 col-sm-10 col-10 m-auto pull-right">
      <img src="{{asset('public/images/teamb3.jpg')}}" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>
  <div class="col-md-6 col-sm-10 col-10 m-auto">
         <h4 class="team-member-name">Sarah Connor</h4>
         <p><small>RECEPTIONIST</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
        <div class="social-icon">
          <ul>
            <li><a href=""><i class="fab fa-facebook-square "></i></a></li>
            <li><a href=""><i class="fab fa-twitter-square "></i></a></li>
            <li><a href=""><i class="fab fa-google-plus-square "></i></a></li>
            <li><a href=""><i class="fas fa-rss-square "></i></a></li>
          </ul>
        </div>  
  </div>
  </div>
</div>

<div class="team-content">
  
  <div class="row col-md-10 ml-auto mr-auto ">
    <div class="col-md-6 col-sm-10 col-10 m-auto pull-right">
      <img src="{{asset('public/images/teamb4.jpg')}}" class="img-fluid" style="max-width: 100%;
      height: auto;">
    </div>
  <div class="col-md-6 col-sm-10 col-10 m-auto">
         <h4 class="team-member-name">Marc Gutierrez</h4>
         <p><small>Manager</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
        <div class="social-icon">
          <ul>
            <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fab fa-twitter-square "></i></a></li>
            <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href=""><i class="fas fa-rss-square "></i></a></li>
          </ul>
        </div>  
  </div>
  </div>

</div>
</div>
</div>

<!----- Gallery ---->

<div class="gallery" id="gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <center><p><h3>Our Gallery</h3></p></center>
      </div> 
    </div>
    <div class="row"> 
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1">
          <div class="back-img" style="background-image: url(public/images/g1.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1">
          <div class="back-img" style="background-image: url(public/images/g2.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
         </div>
      </div>
      <div class="col-md-3  col-xs-6 gallery1">
         <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g3.jpg)"></div>
         <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
         </div> 
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1">
          <div class="back-img" style="background-image: url(public/images/g4.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
         </div> 
      </div>
    </div>

     <div class="row">
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1">
          <div class="back-img" style="background-image: url(public/images/g5.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
         </div> 
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g6.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
         </div>
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g7.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
       </div> 
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1">
          <div class="back-img" style="background-image: url(public/images/g8.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
        </div>
       </div> 
    </div>

    <div class="row">
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g9.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>    
         </div> 
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
        <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g10.jpg)"></div>
          <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g4.jpg)"></div>
           
         <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
         </div>
      </div>
      <div class="col-md-3 col-xs-6 gallery1">
         <div class="gimg1"> 
          <div class="back-img" style="background-image: url(public/images/g1.jpg)"></div>
         <div class="textbox">
            <h4>Sun Rise</h4>
            <p><i class="fa fa-image"></i></p>
          </div>
      </div>
       </div> 
    </div> 
  </div>
</div>
<!----- Rooms and Rates --->
<div class="room-rates" id="rooms">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-heading">
          <center>
            <h4>Room And Rates</h4>
          </center>
        </div>
      </div>
      </div>
      <div class="row">
       <div class="col-md-3 col-sm-6 col-8 ml-auto mr-auto">  
        <div class="card animate">
          <div class="card-body" style="padding: 0px !important;">
            <img src="{{asset('public/images/r1.jpg')}}" class="img-fluid"  style="max-width: 100%;">
             <div class="room-cat"><p><h4>Deluxe Room</h4></p></div>
             <div class="stars">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                </ul>
             </div>
             <div class="price-btn">
               <p><span>$</span>&nbsp; &nbsp;&nbsp;<span class="price">320</span> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-warning bok-btn">Book Now</a></p>
             </div>
          </div>
        </div>
        </div>
        <div class="col-md-3 col-sm-6 col-8 ml-auto mr-auto">  
        <div class="card animate">
          <div class="card-body" style="padding: 0px !important;">
            <img src="{{asset('public/images/r2.jpg')}}" class="img-fluid"  style="max-width: 100%;">
             <h4>Luxury Room</h4>
               <div class="stars">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                </ul>
             </div>
             <div class="price-btn">
               <p><span>$</span>&nbsp; &nbsp;&nbsp;<span class="price">220</span> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-warning bok-btn">Book Now</a></p>
             </div>
          </div>
        </div>
        </div>
        <div class="col-md-3 col-sm-6 col-8 ml-auto mr-auto">  
        <div class="card animate">
          <div class="card-body" style="padding: 0px !important;">
            <img src="{{asset('public/images/r3.jpg')}}" class="img-fluid" style="max-width: 100%;">
             <h4>Guest Room</h4>
               <div class="stars">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                </ul>
             </div>
             <div class="price-btn">
               <p><span>$</span>&nbsp; &nbsp;&nbsp;<span class="price">180</span> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-warning bok-btn">Book Now</a></p>
             </div>
          </div>
        </div>
        </div>
        <div class="col-md-3 col-sm-6 col-8 ml-auto mr-auto">  
        <div class="card animate">
          <div class="card-body" style="padding: 0px !important;">
            <img src="{{asset('public/images/r4.jpg')}}" class="img-fluid" style="max-width: 100%;">
            <h4>Single Room</h4>
              <div class="stars">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                </ul>
             </div>
             <div class="price-btn">
               <p><span>$</span>&nbsp; &nbsp;&nbsp;<span class="price">150</span> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-warning bok-btn">Book Now</a></p>
             </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!------- vistor ----->
<div class="vistor">
  <div class="container">
    <h3 class="title-flex">What other visitors experienced</h3>
  </div>
  <div class="layout-work-grid">
    <section class="sliders">
      <div class="flexslider">
        <ul class="slides">
          <li class="cutom">
            <div class="layout-work-grid-left">
              <img src="{{asset('public/images/5.jpg')}}" alt=" " class="img-responsive" />
                <div class="layouts-work-grid-left-pos">
                  <img src="{{asset('public/images/c1.jpg')}}" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="layout-work-grid-right">
              <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>It was worth staying here. The hospitality was too good.Good room services and one of the best hotel in the country </p>
                <h5>Julia Rose</h5>
                <p>Germany</p>

            </div>
          </li>
         <li class="cutom">
            <div class="layout-work-grid-left">
              <img src="{{asset('public/images/5.jpg')}}" alt=" " class="img-responsive" />
                <div class="layouts-work-grid-left-pos">
                  <img src="{{asset('public/images/c2.jpg')}}" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="layout-work-grid-right">
              <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>It was worth staying here. The hospitality was too good.Good room services and one of the best hotel in the country </p>
                <h5>Julia Rose</h5>
                <p>Germany</p>
            </div>
          </li>
          <li class="cutom">
            <div class="layout-work-grid-left">
              <img src="{{asset('public/images/5.jpg')}}" alt=" " class="img-responsive" />
                <div class="layouts-work-grid-left-pos">
                  <img src="{{asset('public/images/c3.jpg')}}" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="layout-work-grid-right">
              <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>It was worth staying here. The hospitality was too good.Good room services and one of the best hotel in the country </p>
                <h5>Julia Rose</h5>
                <p>Germany</p>
            </div>
          </li>
          <li class="cutom">
            <div class="layout-work-grid-left">
              <img src="{{asset('public/images/5.jpg')}}" alt=" " class="img-responsive" />
                <div class="layouts-work-grid-left-pos">
                  <img src="{{asset('public/images/c4.jpg')}}" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="layout-work-grid-right">
              <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>It was worth staying here. The hospitality was too good.Good room services and one of the best hotel in the country </p>
                <h5>Julia Rose</h5>
                <p>Germany</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</div>

<!---- Footer --->
<div class="footer" id="contact_us">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-10 m-auto">
        <div class="contact-form">
          <center>
            <h3>Contact Us</h3>
            <p>Sign Up For Our News Letters</p>
          </center>
          <form action="{{route('admin.contact.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label>Full Name:</label>
              <input type="text" name="name" class="form-control">
            </div>
             <div class="form-group">
              <label>Phone Number:</label>
              <input type="text" name="phone"  class="form-control">
            </div>
             <div class="form-group">
              <label>Email Address:</label>
              <input type="text" name="email"  class="form-control">
            </div>
             <div class="form-group">
              <input type="submit" value="Send Now" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div> 
      <div class="col-md-6 col-10 m-auto">
        <div class="contact-form">
           <center>
            <h3 class="contact-with">Contact With Us</h3>
            </center> 
            <p class="contact"><span>Phone:</span>&nbsp; +92(42)214-00-04</p>
            <p class="contact"><span>Email:</span>&nbsp; xyz@gmail.com</p>
            <p class="contact"><span>Address:</span>&nbsp; xyz Road Lahore</p>
            <div class="social-icons">
              <ul>
                <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                <li><a href=""><i class="fab fa-twitter-square "></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                
              </ul>
           </div> 
           <div class="map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.4079239993!2d74.07127853381661!3d31.48263523074283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C+Punjab!5e0!3m2!1sen!2s!4v1542525211094" width="auto" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="footer-bottom">
       <p>&copy; HOTEL SITE. All Rights Reserved | Brought To You by <span>xyz-code</span></p>
      </div>
    </div>
  </div>
</div> 

<!----go to top ---->
  <div class="gotop">
    <a href="#top" class="go-to-top"><i class="fa fa-arrow-up"></i></a>
  </div>





      <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
      <!--   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
          <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>  
        <script type="text/javascript" src="{{asset('public/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript" charset="utf-8">
         

        
          $(window).load(function() {
            $('.flexslider').flexslider({
                animation:'slide',
                // start:function(slider){
                //     $('body').find('.custom').addClass('myclass');
                // }

            });
          });
             
        </script>
      <script type="text/javascript" src="{{asset('public/js/main_javascript.js')}}"></script>  
      <script type="text/javascript" src="{{asset('public/js/main.js')}}"></script>
    </body>
</html>
