
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
   <link rel="stylesheet" type="text/css" href="{{asset('public/morris/morris-0.4.3.min.css')}}">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/dataTables/dataTables.bootstrap.css')}}">
    

    <link rel="stylesheet" type="text/css" href="{{asset('public/css/animated.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/admin_style.css')}}">
</head>
<body>
  <div class="wrapper">
<div id="update-modal"></div>
  @include('../admin/partial/sidebar')
    <div class="page-wraper">
    <div class="page-inner-wraper">
  @yield('content')
<div id="append-update-modal"></div>


   </div>
   </div> 
</div>

     <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
     
     <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
     @yield('script')
     <script type="text/javascript">
           $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
           $(function(){

              $.get('{{URL::route("admin.room.index")}}', function(rooms){
                 $("#append-data").empty().append(rooms);
              });

              $('#append-data').on('submit' , '#ajaxData', function(e){
                e.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                  url:'{{URL::route("admin.room.store")}}',
                  type:'POST',
                  data:data 
              })
             .done(function(data){
              $("#append-data").empty().append(data);
              })
             .fail(function(error){
              $("#append-data").empty();

              $.each(error.responseJSON, function(index, value){
                console.log(index+  " index")
                   //console.log(value['troom']);
                //$("#append-data #error").append(value['troom']);
              });

             })
           });
    
     //Delete Room record

          $("#append-data").on('click', '#tbtn',function(){
            var id = $(this).data('task');
            $.post('{{URL::to("admin/room")}}/'+id, function(data){
              $("#append-data").empty().append(data);
            });
          });
   

         $("#register-form").on('click', '.update', function(){
          var id = $(this).data('task');
         // alert(id);
           $.get('{{URL::to("admin/edit")}}/'+id, function(data){
             $("#register-form").empty().append(data);
             $("#updateModal").modal('show');
             console.log(data);
           })
         });
      
     
        $.get('{{URL::route("admin.user.index")}}', function(data){
           $("#register-form").empty().append(data);
        });


     /** 
     *
     * Delete User 
     *
     **/

     $("#register-form").on('click', '.user-del', function(){ 
        var id = $(this).data('task');
        $.post('{{URL::to("admin/user/destroy")}}/'+id, function(data){
          $("#register-form").empty().append(data);
        });
      });

      $.get('{{URL::route("admin.contact.create")}}', function(data){
           $("#contact-page").empty().append(data);
        });
      
      $("#contact-page").on('click', '.approve', function(){
        var id = $(this).data('task');
        $.get('{{URL::to("admin/contact/approve")}}/'+id, function(data){
             $("#contact-page").empty().append(data);
        })
      });

      $("#contact-page").on('click', '.unapprove', function(){
        var id = $(this).data('task');
        $.get('{{URL::to("admin/contact/unapprove")}}/'+id, function(data){
             $("#contact-page").empty().append(data);
        })
      });

      $("#contact-page").on('click', '.del', function(){
        var id = $(this).data('task');
        $.get('{{URL::to("admin/contact/destroy")}}/'+id, function(data){
             $("#contact-page").empty().append(data);
        })
      });


});
     </script> 
     <script type="text/javascript" src="{{asset('public/assets/dataTables/dataTables.bootstrap.js')}}"></script> 
     <script type="text/javascript" src="{{asset('public/assets/dataTables/jquery.dataTables.js')}}"></script>
     <script type="text/javascript">
       $(document).ready(function(){
        $("#data-table").dataTable();
        $("#contact-page #contact-table").dataTable();
       });
     </script>
     <script type="text/javascript" src="{{asset('public/js/main.js')}}"></script>
    
</body>
</html>