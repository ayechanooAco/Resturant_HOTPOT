<!--

=========================================================
* Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    WaWa Hotpot
  </title>

  <!-- csrf token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link href="{{asset('template/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('template/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('template/assets/css/argon-dashboard.css?v=1.1.1')}}" rel="stylesheet" />

  <!-- fontawesome -->
   <link href="{{asset('template/assets/fontawesome/css/all.min.css')}}" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

   <!-- datatabljs -->
   <link href="{{asset('template/assets/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  
 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

 <link href="{{asset('template/assets/css/mine.css')}}" rel="stylesheet">



</head>

<body class="">
  
   <!-- navstart here -->
      @include('frontend.nav-side')
  <!-- end here -->
  <div class="main-content">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-danger pb-6 pt-3 pt-md-3">
      <div class="container-fluid ">
        <div class=" col-md-12 showTableCounter"></div>
        @include('frontend.four-card')
        <input type="hidden" name="counterNo">
      </div>
    </div>
    <div class="container-fluid bg-white ">

      @yield('content')
      
      <!-- Footer -->
      
    </div>
    <footer class="container-fluid  bg-default p-4">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-xl-center text-white">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold text-white ml-1" target="_blank">Aye Chan Oo</a>
            </div>
          </div>
         
        </div>
      </footer>
  </div>
  
  @include('frontend/modal')

  <!--   Core   -->
  <script src="{{asset('template/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('template/assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('template/assets/js/argon-dashboard.min.js')}}"></script>
  <script src="{{asset('template/assets/fontawesome/js/all.min.js')}}" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

   <script src="{{asset('template/assets/datatables/jquery.dataTables.js')}}"></script>

  <script src="{{asset('template/assets/datatables/dataTables.bootstrap4.js')}}"></script>




  <!-- <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script> -->
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
       $('#currycard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#currycard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#meatcard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#meatcard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#vegetablecard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#vegetablecard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#seafoodcard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#seafoodcard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('div').on('click',function(){
        var t=this.id;
          if(t=='currycard'){
             $('#curry-list').removeClass('d-none');
            $('#seafood-list').addClass('d-none');
            $('#meat-list').addClass('d-none');
            $('#vegetable-list').addClass('d-none');

            }
           if(t=='meatcard'){
            //console.log('heloe');
           $('#meat-list').removeClass('d-none');
            $('#curry-list').addClass('d-none');
            $('#seafood-list').addClass('d-none');
            $('#vegetable-list').addClass('d-none')
          }
           if(t=='seafoodcard'){
           // console.log('whello')
           $('#seafood-list').removeClass('d-none');
            $('#curry-list').addClass('d-none');
            $('#meat-list').addClass('d-none');
            $('#vegetable-list').addClass('d-none')
          }
           if(t=='vegetablecard'){
            //console.log('helo world');
            $('#vegetable-list').removeClass('d-none');
            $('#curry-list').addClass('d-none');
            $('#seafood-list').addClass('d-none');
            $('#meat-list').addClass('d-none')
          }
       })




    })
  </script>
  <script src="{{asset('template/assets/js/mine.js')}}"></script>
  @yield('script')

</body>

</html>