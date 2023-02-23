@extends('home')
@section('content')
<style>
    .section-50 {
        padding: 50px 0;
    }
    
    .m-b-50 {
        margin-bottom: 50px;
    }
    
    .dark-link {
        color: #333;
    }
    
    .heading-line {
        position: relative;
        padding-bottom: 5px;
    }
    
    .heading-line:after {
        content: "";
        height: 4px;
        width: 75px;
        background-color: #29B6F6;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    
    .notification-ui_dd-content {
        margin-bottom: 30px;
    }
    
    .notification-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 20px;
        margin-bottom: 7px;
        background: #fff;
        -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    }
    
    .notification-list--unread {
        border-left: 2px solid #29B6F6;
    }
    
    .notification-list .notification-list_content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    
    .notification-list .notification-list_content .notification-list_img img {
        height: 48px;
        width: 48px;
        border-radius: 50px;
        margin-right: 20px;
    }
    
    .notification-list .notification-list_content .notification-list_detail p {
        margin-bottom: 5px;
        line-height: 1.2;
    }
    
    .notification-list .notification-list_feature-img img {
        height: 48px;
        width: 48px;
        border-radius: 5px;
        margin-left: 20px;
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
      
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">NOTIFICATION</h3>
                  <h6 class="font-weight-normal mb-0"></h6>

           

                </div>
              </div>
             
            </div>
            <div class="section-100">
              <div class="container">
                  <div class="notification-ui_dd-content">
                      <div class="notification-list notification-list--unread">
                          <div class="notification-list_content">
                              <div class="notification-list_img">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user">
                              </div>
                              <div class="notification-list_detail">
                                  <p><b>John Doe</b> </p>
                                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                                  <p class="text-muted"><small>10 mins ago</small></p>
                              </div>
                          </div>
                          <div class="notification-list_feature-img">
                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Feature image">
                          </div>
                      </div>

                      <div class="notification-list notification-list--unread">
                          <div class="notification-list_content">
                              <div class="notification-list_img">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user">
                              </div>
                              <div class="notification-list_detail">
                                  <p><b>Richard Miles</b> </p>
                                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                                  <p class="text-muted"><small>10 mins ago</small></p>
                              </div>
                          </div>
                          <div class="notification-list_feature-img">
                              <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Feature image">
                          </div>
                      </div>

                      <div class="notification-list">
                          <div class="notification-list_content">
                              <div class="notification-list_img">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user">
                              </div>
                              <div class="notification-list_detail">
                                  <p><b>Brian Cumin</b> </p>
                                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                                  <p class="text-muted"><small>10 mins ago</small></p>
                              </div>
                          </div>
                          <div class="notification-list_feature-img">
                              <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Feature image">
                          </div>
                      </div>

                      <div class="notification-list">
                          <div class="notification-list_content">
                              <div class="notification-list_img">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user">
                              </div>
                              <div class="notification-list_detail">
                                  <p><b>Lance Bogrol</b> </p>
                                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                                  <p class="text-muted"><small>10 mins ago</small></p>
                              </div>
                          </div>
                          <div class="notification-list_feature-img">
                              <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Feature image">
                          </div>
                      </div>

                      <div class="notification-list">
                          <div class="notification-list_content">
                              <div class="notification-list_img">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user">
                              </div>
                              <div class="notification-list_detail">
                                  <p><b>Parsley Montana</b> </p>
                                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                                  <p class="text-muted"><small>10 mins ago</small></p>
                              </div>
                          </div>
                          <div class="notification-list_feature-img">
                              <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Feature image">
                          </div>
                      </div>
                  </div>
          
                  <div class="text-center">
                      <a href="#!" class="dark-link">Load more activity</a>
                  </div>
          
              </div>
            </div>

          
          </footer>
          <!-- partial -->
        </div>
          </div>

      
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection