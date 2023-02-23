@extends('admission.layouts.admission')
@section('content')
<style>
.circle {
  height: 70px;
  width: 70px;
  background-color: #ffb703;
  border-radius: 50%;
  margin-right:1%;
  margin-left:2.5%;
}
.submitted, .incomplete, .approved, .override, .sched-exam, .done-test, .sent-letter, .permit, .deact-acc{
  margin-top:35%;
  margin-left:15%;
}
p{
  font-size: 11px;
  padding-bottom: 50px;
  padding-top:30px;
  font-weight:bold;
  text-align:center;
}

</style>
<div class="content-wrapper">


  <h1>Dashboard</h1>
  <br>



  <div class="row">
    <div class="col-md-12">
      <div class="card card-body bg-primary text-white mb-3">
        <label>All Applicants</label>
        <h1>{{ $totalUsers }}</h1>
        <a> View</a>


      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="card card-body bg-primary text-white mb-3">
        <label>Basic Education</label>
        <h1>{{ $totalBasicEd }}</h1>
        <a> View</a>


      </div>
    </div>

    <div class="col-md-3">
      <div class="card card-body bg-primary text-white mb-3">
        <label>College</label>
        <h1>{{ $totalCollege }}</h1>
        <a> View</a>


      </div>
    </div>

    <div class="col-md-3">
      <div class="card card-body bg-primary text-white mb-3">
        <label>Transferee</label>
        <h1>{{ $totalTransferee }}</h1>
        <a> View</a>


      </div>
    </div>

    <div class="col-md-3">
      <div class="card card-body bg-primary text-white mb-3">
        <label>Graduate School</label>
        <h1>{{ $totalGraduateSchool }}</h1>
        <a> View</a>
      </div>
    </div>
    </div>
  </div>

  


          
          <!--<div class="row">   
            <div class="col-md-12 grid-margin">
              <div class="row">
                 <div class="col-md-10 mb-8 stretch-card transparent">
                  <div class="card" style="background-color:maroon; color:white; padding-bottom: 50px;">
                    <div class="card-body">
                      <h3 class="mb-2" style="font-weight:bold; font-size:1.5em;">APPLICANT'S STATUS REPORT</h3>
                      <div class="row">
                        <div class="circle">
                          <h3 id="submitted" class="submitted">100</h3>
                          <p>SUBMITTED</p>
                        </div>

                        <div class="circle">
                          <h3 id="incomplete" class="incomplete">100</h3>
                          <p>INCOMPLETE</p>
                        </div>

                        <div class="circle">
                          <h3 id="approved" class="approved">100</h3>
                          <p>APPROVED</p>
                        </div>

                        <div class="circle">
                          <h3 id="override" class="override">100</h3>
                          <p>OVERRIDE</p>
                        </div>

                        <div class="circle">
                          <h3 id="sched-exam" class="sched-exam">100</h3>
                          <p>SCHEDULE EXAM</p>
                        </div>

                        <div class="circle">
                          <h3 id="done-test" class="done-test">100</h3>
                          <p>DONE TESTING</p>
                        </div>

                        <div class="circle">
                          <h3 id="sent-letter" class="sent-letter">100</h3>
                          <p>SENT LETTER</p>
                        </div>

                        <div class="circle">
                          <h3 id="permit" class="permit">100</h3>
                          <p>PRINTED PERMITS</p>
                        </div>

                        <div class="circle">
                          <h3 id="deact-acc" class="deact-acc">100</h3>
                          <p>DEACTIVATE ACCOUNT</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!--<div class="row">
            <div class="col-md-10 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card bg-warning" >
                    <div class="card-body text-right text-light">
                      <h2 class="mb-4"><strong>ALL ADMISSIONS</strong></h2>
                      <h2><i class="fa-solid fa-user-tie" style="padding-right:250px; font-size: 2em;"></i>45</h2>
                      <a href="all-admissions" class="active link text-light">View Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card" style="background-color: #22333b;">
                  
                    <div class="card-body text-right text-light">
                      
                      <h2 class="mb-4 ">COLLEGE</h2>
                      <h2><i class="fa-solid fa-users" style="padding-right:250px; font-size: 2em;"></i>45</h2>
                      <a href="college" class="text-light">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card" style="background-color:#8d99ae;">
                    <div class="card-body text-right text-light">
                      <h2 class="mb-4">GRADUATE SCHOOL</h2>
                      <h2><i class="fa-solid fa-graduation-cap" style="padding-right:250px; font-size: 2em;"></i>45</h2>
                      <a href="graduate" class="text-light">View Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card " style="background-color:#d5bdaf; ">
                    <div class="card-body text-right text-light">
                      <h2 class="mb-4">TRANSFEREE</h2>
                      <h2><i class="fa-solid fa-user-pen" style="padding-right:250px; font-size: 2em;"></i>45</h2>
                      <a href="transferee" class="text-light">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
</div>
          

@endsection