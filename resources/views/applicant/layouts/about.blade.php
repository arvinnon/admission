@extends('home')
@section('content')
<style>
    p, li, h2,h3{
        color:#8b0000;
        font-weight: bold;
    }
    p, li{
        font-size: 1em;
    }
    h2{
        text-align:center;
    }
</style>
<div class="content-wrapper">
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
  <div class="">
    <h1>REQUIREMENTS AND PROCEDURES</h1>
    <h2>ADMISSION REQUIREMENTS</h2>
    <h3>INCOMING FRESHMEN</h3>
    <ol type="a">
        <li>Original and photocopy Grade 12 Report Card
        <li>Photocopy of NSA/PSO Birth Certificate
        <li>Marriage Certificate (if married)
        <li>Certificate of Good Moral Character from Senior High School
        <li>Undertaking [download here] signed by the student and parent/guardian
        <li>One (1) copy of 2x2 latest photo
    </ol>
    <h3>COLLEGE TRANSFEREES / 2ND COURSES</h3>
    <ol type="a">
        <li>Original and photocopy Grade 12 Report Card
        <li>Photocopy of NSA/PSO Birth Certificate
        <li>Marriage Certificate (if married)
        <li>Certificate of Good Moral Character from Senior High School
        <li>Undertaking [download here] signed by the student and parent/guardian
        <li>One (1) copy of 2x2 latest photo
    </ol>
    <h2>ADMISSION PROCEDURE</h2>
    <p>1. Pay the processing fee of PHP 400 at the University Finance Office or any payment channels of Hau:<a href="https://www.hau.edu.ph/finance"> https://www.hau.edu.ph/finance</a>. Secure the payment receipt as this will be uploaded during the online application process. Note: If you wish to pay at the University Finance Office, kindly visit the Admissions Office to secure an Application Fee Slip as this will presented upon payment.</p>
    <p>2. Fill out the online application through <a href="https://www.hau.edu.ph/admissions/online-application-details/college-applicants">https://www.hau.edu.ph/admissions/online-application-details/college-applicants</a>. upload the payment receipt, Grade 12 copy of grades (1st and 2nd grading period) and PSA/NSO Birth Certificate on the "documents" section.</p>
    <p>3. Get your entrance exam schedule from the Testing Center (for on-site application) or wait for the email of the Testing Center for your entrance exam schedule (for online application).</p>
    <p>4. Submit the hard copies of all the requirements at the Admissions Office, then proceed with the enrollment.</p>
  </div>
</div>
@endsection