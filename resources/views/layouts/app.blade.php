
<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>

   <link href="https://fonts.googleapis.com/css?family=Federo|Oswald:300|Slabo+27px" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
       integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" 
       crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">   

    

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    

    <link rel="stylesheet" type="text/css" href="{{asset('public/css/animated.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/admin_style.css')}}">
  
</head>
<body>

   
    
  @yield('content')


   </div>
   </div> 
</div>
     <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
     
     <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
    
     </script>  
     <script type="text/javascript" src="{{asset('public/js/main.js')}}"></script>
    
</body>
</html>