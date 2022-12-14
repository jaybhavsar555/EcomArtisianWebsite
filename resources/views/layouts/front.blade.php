@include('test')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> 
<link id="pagestyle" href="admin/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">

</head>
<body>

    @include('layouts.inc.frontnav')
        <div class="content">
                @yield('content')
 
        </div>   
        
        
               
         @include('layouts.inc.footer')
	


        <!-- whatsapp icon -->
        <div class="whats-app-chat">
            <a href="https://wa.me/123456789?text=I'm%20inquiring%20about%20the%20jewellerey" target="_blank">
                <img src="{{asset('assets/images/whatsapp.png')}}" alt="" height="50px" width="50px">
            </a>
        </div>
    
    
  

    <script src="{{asset('frontend/js/jquery-3.6.1.min.js')}}" ></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}" ></script>
    <script src="{{asset('frontend/js/custom.js')}}" ></script>

    
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
  
    var availableTags = [];
    $.ajax({
            method: "GET",
            url: "/product-list",
            success: function(response) {
                // console.log(response);
                startAutoComplete(response);
            } 
    
        });

        function startAutoComplete(availableTags) 
        {
            $( "#search_product" ).autocomplete({
                    source: availableTags
             });
        }
   
 
  </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')
    @if(session('status')){
        <script>
            swal("{{ session('status') }}");
        </script>
    }
    @endif

   
   
    
 
</body>
</html>
