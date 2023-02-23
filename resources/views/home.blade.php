
<title>HAU ADMISSION PORTAL</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('applicant/vendors/feather/feather.css') }}">
   <link rel="stylesheet" href="{{ asset('applicant/vendors/ti-icons/css/themify-icons.css') }}">
   <link rel="stylesheet" href="{{ asset('applicant/vendors/css/vendor.bundle.base.css')}}">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <link rel="stylesheet" href="{{ asset('applicant/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
   <link rel="stylesheet" href="{{ asset('applicant/vendors/ti-icons/css/themify-icons.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />



   <link rel="stylesheet" href="{{asset('applicant/vendors/apply/style.css')  }}" />

   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="{{ asset('applicant/css/vertical-layout-light/style.css') }}">
   <!-- endinject -->
   <link rel="shortcut icon" href="{{ asset('admission/images/favicon.png') }}" />
   @livewireStyles

<div class="container-scroller"> 
       @include('applicant.layouts.navbar')
       <div class="container-fluid page-body-wrapper">
           @include('applicant.layouts.sidebar')
           <div class="main-panel"> 
               <div class="content-wrapper">
                   @yield('content')
               </div>
           </div>
       </div>   
   </div>

       <script src="{{ asset('applicant/vendors/js/vendor.bundle.base.js') }}"></script>
       <script src="{{ asset('applicant/vendors/datatables.net/jquery.dataTables.js') }}"></script>
       <script src="{{ asset('applicant/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
       <script src="{{ asset('applicant/js/dataTables.select.min.js') }}"></script>

       <script src="{{ asset('applicant/js/off-canvas.js') }}"></script>
       <script src="{{ asset('applicant/js/hoverable-collapse.js') }}"></script>
       <script src="{{ asset('applicant/js/template.js') }}"></script>
       <script src="{{ asset('applicant/js/settings.js') }}"></script>
       <script src="{{ asset('applicant/js/todolist.js') }}"></script>
    
       <script src="{{ asset('applicant/js/dashboard.js') }}"></script>
       <script src="{{ asset('applicant/js/Chart.roundedBarCharts.js') }}"></script>
       <script src="{{ asset('applicant/js/script.js') }}" defer></script>
       @livewireScripts