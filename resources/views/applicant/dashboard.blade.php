@extends('home')
@section('content')
<style>
  p{
    font-weight: bold;
    font-size: 1em;
  }
  .btn{
    font-weight: bold;
    font-size: 1em;
    background-color: #ffb703;
  }
</style>
<div class="container-scroller">
  
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="ti-settings"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
    </div>
    
    <!--Side Bar-->
    
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome Aamir</h3>
                <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 grid-margin stretch-card">
            <div class="card tale-bg">
              <div class="card-people mt-auto">
                <img src="https://www.hau.edu.ph/images/banner-3.jpg" alt="people">
                <div class="weather-info">
                  <div class="d-flex">
                    <!--<div>
                      <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                    </div>
                    <div class="ml-2">
                      <h4 class="location font-weight-normal">Bangalore</h4>
                      <h6 class="font-weight-normal">India</h6>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 grid-margin transparent">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Notifications</p>
                <ul class="icon-data-list">
                  <li>
                    <div class="d-flex">
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user">
                      <div>
                        <p class="text-info mb-1">Isabella Becker</p>
                        <p class="mb-0">Sales dashboard have been created</p>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="d-flex">
                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user">
                      <div>
                        <p class="text-info mb-1">Adam Warren</p>
                        <p class="mb-0">You have done a great job #TW111</p>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="d-flex">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user">
                      <div>
                        <p class="text-info mb-1">Adam Warren</p>
                        <p class="mb-0">You have done a great job #TW111</p>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="d-flex">
                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user">
                      <div>
                        <p class="text-info mb-1">Adam Warren</p>
                        <p class="mb-0">You have done a great job #TW111</p>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="d-flex">
                      <img src="https://bootdey.com/img/Content/avatar/avatar9.png" alt="user">
                      <div>
                        <p class="text-info mb-1">Adam Warren</p>
                        <p class="mb-0">You have done a great job #TW111</p>
                      </div>
                    </div>
                  </li>

               

                 
                  <a href="notification.html"><h5 style="padding-left: 50%;">View All</h5></a>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 grid-margin transparent" style="margin-left: 67%; ">
          <div class="card" style="background-color: rgb(255, 255, 255);">
            <div class="card-body">
              <p class="card-title">Inbox</p>
              <ul class="icon-data-list">
                <li>
                  <div class="d-flex">
                    <img src="images/faces/face1.jpg" alt="user">
                    <div>
                      <p class="text-info mb-1">Isabella Becker</p>
                      <p class="mb-0">Sales dashboard have been created</p>
                      <small>9:30 am</small>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="d-flex">
                    <img src="images/faces/face2.jpg" alt="user">
                    <div>
                      <p class="text-info mb-1">Adam Warren</p>
                      <p class="mb-0">You have done a great job #TW111</p>
                      <small>10:30 am</small>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="d-flex">
                    <img src="images/faces/face2.jpg" alt="user">
                    <div>
                      <p class="text-info mb-1">Adam Warren</p>
                      <p class="mb-0">You have done a great job #TW111</p>
                      <small>10:30 am</small>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="d-flex">
                    <img src="images/faces/face2.jpg" alt="user">
                    <div>
                      <p class="text-info mb-1">Adam Warren</p>
                      <p class="mb-0">You have done a great job #TW111</p>
                      <small>10:30 am</small>
                    </div>
                  </div>
                </li>
                <a href="inbox"><h5 style="padding-left: 50%;">View All</h5></a>
              </ul>
            </div>
          </div>
        </div>

        
  
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <!--<footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
        </div>
      </footer>-->
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
@endsection