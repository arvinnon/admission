@extends('home')
@section('content')

<style>
  #regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 100%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-11 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">APPLICATION DATA ENTRY</h3>
              <h6 class="font-weight-normal mb-0">Fill all the required fields to go to the next step.</h6>
              <br/> 

              <!--<form action="dataInsert" class="form" method="post" enctype="multipart/form-data">
               
                <!-- Progress bar -->
                <!--<div class="progressbar">
                  <div class="progress" id="progress"></div>
                  
                  <div
                    class="progress-step progress-step-active"
                    data-title="Application Information"
                  ></div>
                  <div class="progress-step" data-title="Personal Information"></div>
                  <div class="progress-step" data-title="Contact Information"></div>
                  <div class="progress-step" data-title="Emergency"></div>
                  <div class="progress-step" data-title="Documents"></div>
                  <div class="progress-step" data-title="Family Data"></div>
                  <div class="progress-step" data-title="Education Background"></div>
                  <div class="progress-step" data-title="Survey Questions"></div>
                </div>-->
          
                  <!-- Steps -->
                 <br/>
                  <!--Application Information
                  <div class="form-step form-step-active">

                    <form class="row g-4" >
                        <div class="col-auto">
                          <label for="semester" class="">Application for:</label>
                          <input type="text" name="semester class">
        
                        </div>
                        
                      </form>
                    
                    <div class="">
                      <a href="#" class="btn btn-next width-50 ml-auto btn-primary">Next</a>
                    </div>
                  </div>-->

                <!--Personal Information
                <div class="form-step">
                  <div class="input-group">
                  </div>

                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                  </div>
                  <br/>
                  <div class="row"> 
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Sex" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Date of Birth" aria-label="Last name">
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nationality" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Place of Birth" aria-label="Last name">
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Religion" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Siblings" aria-label="Last name">
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Civil Status" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Ordinal Position" aria-label="Last name">
                    </div>
                  </div>

                 
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->

                <!--<div class="form-step">
                  <div class="input-group">
                    <form class="row g-3">
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Check me out
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </form>
                  </div>
               


                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>

                <div class="form-step">
                  <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" />
                  </div>
                  <div class="input-group">
                    <label for="ID">National ID</label>
                    <input type="number" name="ID" id="ID" />
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>

                <div class="form-step">
                  <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" />
                  </div>
                  <div class="input-group">
                    <label for="ID">National ID</label>
                    <input type="number" name="ID" id="ID" />
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>

                <div class="form-step">
                  <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" />
                  </div>
                  <div class="input-group">
                    <label for="ID">National ID</label>
                    <input type="number" name="ID" id="ID" />
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>

                <div class="form-step">
                  <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" />
                  </div>
                  <div class="input-group">
                    <label for="ID">National ID</label>
                    <input type="number" name="ID" id="ID" />
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>

                <div class="form-step">
                  <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" />
                  </div>
                  <div class="input-group">
                    <label for="ID">National ID</label>
                    <input type="number" name="ID" id="ID" />
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>-->


                @csrf <!--Cross-site request forgeries-->

                <!--<label for="fname" class="control-label">First Name:</label>
                <input type="text" name="fname" class="form-control"> <br>

                <label for="lname" class="control-label">Last Name:</label>
                <input type="text" name="lname" class="form-control"> <br>

                <label for="apply" class="control-label">Apply For:</label>
                <select class="form-select" aria-label="Default select example" style="width: 100%;">
                  <option selected>Open this select menu</option>
                  <option value="basic">Basic Education</option>
                  <option value="transferee">Transferee</option>
                  <option value="college">College</option>
                  <option value="graduate">Graduate School</option>
                </select>

                <br>
                <br>

                <label for="email" class="control-label">Email:</label>
                <input type="text" name="email" class="form-control"> <br>
                
                
                <label for="phone" class="control-label">Phone:</label>
                <input type="text" name="phone" class="form-control"> <br>
    
                <label for="address" class="control-label">Address:</label>
                <input type="text" name="address" class="form-control"> <br>
                
                <input type="submit" class="btn-primary">-->









          
                <!--Progress bar
                <div class="progressbar">
                  <div class="progress" id="progress"></div>
                  
                  <div class="progress-step progress-step-active" data-title="Application Information"></div>
                  <div class="progress-step" data-title="Personal "></div>
                  <div class="progress-step" data-title="Address"></div>
                  <div class="progress-step" data-title="Contact"></div>
                  <div class="progress-step" data-title="Emergency"></div>
                  <div class="progress-step" data-title="Documents"></div>
                  <div class="progress-step" data-title="Family"></div>
                  <div class="progress-step" data-title="Education"></div>
                  <div class="progress-step" data-title="Survey"></div>
                </div>-->
          
                  <!-- Steps--> 
                 <br/>
                  <!--Application Information
                  <div class="form-step form-step-active">

                    <div class="container">
              
                      <form action="dataInsert" method="post" enctype="multipart/form-data">
                          @csrf 
                          <div class="row">
                            <div class="col">
                              <label for="name" class="control-label">Application for:</label>
                            </div>
                            <div class="col">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Select Semester</option>
                                <option value="sem1">SY 2022 - 2023 2nd Trimester - Graduate Schoo/</option>
                                <option value="sem2">SY 2022 - 2023 2nd Trimester - PhD</option>
                                <option value="sem3">SY 2022 - 2023 3rd Trimester - Graduate School</option>
                                <option value="sem4">SY 2022 - 2023 3rd Trimester - PhD</option>
                                <option value="sem5">SY 2023 - 2024 1st Semester College</option>
                                <option value="sem6">SY 2023 - 2024 1st Semester Senior High School</option>
                                <option value="sem7">SY 2023 - 2024 1st Semester Junior High School</option>
                              </select>
                            </div>
                            
                            <div class="col">
                              <p hidden>If you are an old student of HAU.</p>
                            </div>
                            
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col">
                              <label for="student-no" class="control-label">Old Student No:</label>
                            </div>
                            <div class="col">
                              <p>N/A <a href="">change</a></p>
                            </div>
                            <div class="col">
                              <p>If you are an old student of HAU.</p>
                            </div>
                          </div>
                          <hr style="border: 2px black solid;"/>
                          <div class="row">
                            <div class="col">
                              <label for="date" class="control-label">Application Date:</label>
                            </div>
                            <div class="col">
                              <p>2023-2-17</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <label for="name" class="control-label" required>Entry Classification:</label>
                            </div>
                            <div class="col">
                              <select class="form-select" aria-label="Default select example">
                                <option value="class1" selected>Freshmen</option>
                                <option value="class2">Transferee</option>
                                <option value="class3">Cross-Enrollee</option>
                                <option value="class4">Returnee</option>
                                <option value="class5">Old Student</option>
                                <option value="class6">Non Credit</option>
                                <option value="class7">Methods</option>
                                <option value="class8">Masterate</option>
                                <option value="class9">Shifting/Returnee</option>
                                <option value="class10">Shifter</option>
                                <option value="class11">Second Courser</option>
                              </select>
                            </div>
                            
                            <div class="col">
                              <p>Mandatory field. Classification applicant.</p>
                            </div>
                            
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col">
                              <label for="name" class="control-label" required>Education Type:</label>
                            </div>
                            <div class="col">
                              <select class="form-select" aria-label="Default select example">
                                <option value="educ1" selected>Select Type</option>
                                <option value="educ2">College</option>
                                
                              </select>
                            </div>
                            
                            <div class="col">
                              <p hidden>Mandatory field. Classification applicant.</p>
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col">
                              <label for="name" class="control-label" required>Course Applied:</label>
                            </div>
                            <div class="col">
                              <select class="form-select" aria-label="Default select example">
                                <option  selected>Select Type</option>
                                <optgroup label="College of Criminal Justice Education & Forensics">
                                  <option value="course1">Bachelor of Science in Forensic Science</option>
                                  <option value="course2">Bachelor of Science in Criminology</option>
                                </optgroup>
                                <optgroup label="Junior High School">
                                  <option value="course3">Junior High School</option>
                                </optgroup>
                                <optgroup label="Graduate Certificate Program in Teaching">
                                  <option value="course4">Graduate Certificate Program in Teaching</option>
                                </optgroup>
                                <optgroup label="School of Arts and Sciences">
                                  <option value="course5">Bachelor of Arts in Communication</option>
                                  <option value="course6">Bachelor of Arts in Psychology</option>
                                  <option value="course7">Bachelor of Arts - Master of Arts in Psychology</option>
                                  <option value="course8">Bachelor of Science in Pyschology</option>
                                </optgroup>
                                <optgroup label="School of Business and Accountancy">
                                  <option value="course9">Bachelor of Science in Accountancy</option>
                                  <option value="course10">Bachelor of Science in Business Administration - Business Management</option>
                                  <option value="course11">Bachelor of Science in Business Administration - Legal Management</option>
                                  <option value="course12">Bachelor of Science in Business Administration - Marketing Management</option>
                                  <option value="course13">Bachelor of Science in Business Administration Major in Financial Management</option>
                                  <option value="course14">Bachelor of Science in Business Administration Major in Human Resource Management</option>
                                  <option value="course15">Bachelor of Science in Internal Auditing</option>
                                  <option value="course16">Bachelor of Science in Management Accounting</option>
                                </optgroup>
                                <optgroup label="School of Computing">
                                  <option value="course17">Bachelor of Science in Computer Science</option>
                                  <option value="course18">Bachelor of Science in Cybersecurity</option>
                                  <option value="course19">Bachelor of Science in Cybersecurity plus Professional Science Master</option>
                                  <option value="course20">Bachelor of Science in Entertainment and Multimedia Computing with Area of Specialization in Digital Animation</option>
                                  <option value="course21">Bacheclor of Science in Information Technology with Area of Specialization in Network Administration</option>
                                  <option value="course22">Bacheclor of Science in Information Technology with Area of Specialization in Web Development</option>
                                </optgroup>
                                <optgroup label="School of Education">
                                  <option value="course23">Bachelor of Elementary Education</option>
                                  <option value="course24">Bachelor of Physical Education</option>
                                  <option value="course25">Bachelor of Secondary Education Major in English</option>
                                  <option value="course26">Bachelor of Secondary Education Major in Filipino</option>
                                  <option value="course27">Bachelor of Secondary Education Major in Mathematics </option>
                                  <option value="course28">Bachelor of Secondary Education Major in Social Studies</option>
                                  <option value="course29">Bachelor of Secondary Education Major in Religious and Values Education</option>
                                  <option value="course30">Bachelor of Secondary Education Major in Science</option>
                                  <option value="course31">Bachelor of Special Needs Education</option>
                                </optgroup>
                                <optgroup label="School of Engineering and Architecture">
                                  <option value="course32">Bachelor of Science in Aeronautical Engineering</option>
                                  <option value="course33">Bachelor of Science in Architecture</option>
                                  <option value="course34">Bachelor of Science in Civil Engineering</option>
                                  <option value="course35">Bachelor of Science in Computer Engineering</option>
                                  <option value="course36">Bachelor of Science in Electrical Engineering</option>
                                  <option value="course37">Bachelor of Science in Electronics Engineering</option>
                                  <option value="course38">Bachelor of Science in Industrial Engineering</option>
                                  <option value="course39">Bachelor of Science in Mechanical Engineering</option>
                                  <option value="course40">Bachelor of Science in Civil Engineering (Construction Engineering and Management)</option>
                                  <option value="course41">Bachelor of Science in Civil Engineering (Structural Engineering )</option>
                                  <option value="course42">Bachelor of Science in Civil Engineering (Transporation Engineering)</option>
                                </optgroup>
                                <optgroup label="School of Hospitality and Tourism Management">
                                  <option value="course43">Bachelor of Science in Hospitality Management Major in Accomodations and Lodging Operations</option>
                                  <option value="course44">Bachelor of Science in Hospitality Management Major in Culinary Arts and Kitchen Operations</option>
                                  <option value="course45">Bachelor of Science in Hospitality Management Major in Restaurant and Food Services Operations</option>
                                  <option value="course46">Bachelor of Science in Tourism Management Major in Travel and Tour Operations</option>
                                  <option value="course47">Bachelor of Science in Tourism Management Major in Destination Management</option>
                                  <option value="course48">Bachelor of Science in Tourism Management Major in Events Management</option>
                                  <option value="course49">Bachelor of Science in International Gastronomy</option>
                                </optgroup>
                                <optgroup label="School of Nursing and Allied Medical Sciences">
                                  <option value="course50">Bachelor of Science in Medical Technology</option>
                                  <option value="course51">Bacelor of Science in Nursing</option>
                                  <option value="course52">Bachelor of Science in Radiologic Technology</option>
                                </optgroup>
                                <optgroup label="Senior High School">
                                  <option value="course53">SHS - Accountancy, Business and Management</option>
                                  <option value="course54">SHS - General Academic</option>
                                  <option value="course55">SHS - Humanities and Social Sciences</option>
                                  <option value="course56">SHS - Science, Technology, Engineering and Math</option>
                                  <option value="course57">SHS-TVL - Home Economics</option>
                                  <option value="course58">SHS-TVL- Information and Communication Technology</option>
                                </optgroup>
                              </select>
                            </div>
                            
                            <div class="col">
                              <p>Mandatory field. </p>
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col">
                              <label for="name" class="control-label" required>Year Level:</label>
                            </div>
                            <div class="col">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Select Type</option>
                                <option value="year1">1st Year</option>
                                <option value="year2">2nd Year</option>
                                <option value="year3">3rd Year</option>
                                <option value="year4">4th Year</option>
                                <option value="year5">5th Year</option>
                              </select>
                            </div>
                            
                            <div class="col">
                              <p>Year level of student.</p>
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col">
                              <label for="lrn" class="control-label" required>LRN:</label>
                            </div>
                            <div class="col">
                              <input type="text" name="lrn" class="form-control">
                            </div>
                            <div class="col">
                              <p hidden>Mandatory field. Classification applicant.</p>
                            </div>
                          </div>
                      </form>
                  
                      <br/>
                      <br/>
                      <br/>
                      <div class="">
                        <a href="#" class="btn btn-next width-50 ml-auto btn-primary">Next</a>
                      </div>
                    </div>
                  </div>-->

                <!--Personal Information
                <div class="form-step">
                  <div class="input-group">
                  </div>

                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Surname" aria-label="surname">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First Name" aria-label="first name">
                    </div>

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Middle Name" aria-label="middle name">
                    </div>
                  </div>
                  <br/>
                  <div class="row"> 
                   <div class="col-2">
                    <label for="sex">Sex:</label>
                   </div>
                    <div class="col">
                      <div class="form-check form-check-inline">
                      
                        <input class="form-check-input" type="radio" name="male" id="male" value="option1">
                        <label class="form-check-label" for="male">Male</label>
                        <input class="form-check-input" type="radio" name="female" id="female" value="option2">
                        <label class="form-check-label" for="female">Female</label>
                      </div>
                    </div>

                    <div class="col-4">
                      <label for="birthday">Date of Birth:</label>
                      <input type="date" id="birthday" name="birthday">
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="nationality">Nationality:</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Select Nationality</option>
                        <option value="nation1">AFGHAN</option>
                        <option value="nation2">AMERICAN</option>
                        <option value="nation3">ARAB</option>
                        <option value="nation4">AUSTRALIAN</option>
                        <option value="nation5">AUSTRIAN</option>
                        <option value="nation6">BAHRAINI</option>
                        <option value="nation7">BANGLADESHI</option>
                        <option value="nation8">BELGIAN</option>
                        <option value="nation9">BRITISH</option>
                        <option value="nation10">BRUNEIAN</option>
                        <option value="nation11">BURMESE</option>
                        <option value="nation12">CAMBODIAN</option>
                        <option value="nation13">CANADIAN</option>
                        <option value="nation14">CHINESE</option>
                        <option value="nation15">DANISH</option>
                        <option value="nation16">FILIPINO</option>
                        <option value="nation17">FRENCH</option>
                        <option value="nation18">GERMAN</option>
                        <option value="nation19">GREEK</option>
                        <option value="nation20">HUNGARIAN</option>
                        <option value="nation21">INDIAN</option>
                        <option value="nation22">INDONESIAN</option>
                        <option value="nation23">IRANIAN</option>
                        <option value="nation24">IRAQI</option>
                        <option value="nation25">ISRAELI</option>
                        <option value="nation26">ITALIAN</option>
                        <option value="nation27">JAPANESE</option>
                        <option value="nation28">JORDANIAN</option>
                        <option value="nation29">KOREAN</option>
                        <option value="nation30">LEBANESE</option>
                        <option value="nation31">MALAYSIAN</option>
                        <option value="nation32">MEXICAN</option>
                        <option value="nation33">NAMIBIAN</option>
                        <option value="nation34">NAPALESE</option>
                        <option value="nation35">NIGERIAN</option>
                        <option value="nation36">NORWEGIAN</option>
                        <option value="nation37">PALESTINIAN</option>
                        <option value="nation38">PORTUGESE</option>
                        <option value="nation39">SIBERIAN</option>
                        <option value="nation40">SINGAPOREAN</option>
                        <option value="nation41">SPANISH</option>
                        <option value="nation42">SUDANESE</option>
                        <option value="nation43">SYRIAN</option>
                        <option value="nation44">TAIWANESE</option>
                        <option value="nation45">THAI</option>
                        <option value="nation46">TURKISH</option>
                        <option value="nation47">UGANDAN</option>
                        <option value="nation48">VIETNAMESE</option>
                      </select>
                      <p>Classify applicant's nationality from available list.</p>
                    </div>
                    <div class="col">
                      <label for="place">Place of Birth:</label>
                      <input type="text" class="form-control" placeholder="Place of Birth" aria-label="place of birth">
                      <p>As per birth certificate.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="religion">Religion:</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>< Select Religion ></option>
                        <option value="religion1">AGLIPAYAN</option>
                        <option value="religion2">AGNOSTIC</option>
                        <option value="religion3">ANG DATING DAAN</option>
                        <option value="religion4">APOSTOLIC CHRISTIAN</option>
                        <option value="religion5">ASSEMBLY OF GOD</option>
                        <option value="religion6">ATHEIST</option>
                        <option value="religion7">BAPTIST</option>
                        <option value="religion8">BORN AGAIN CHRISTIAN</option>
                        <option value="religion9">BUDDHIST</option>
                        <option value="religion10">CATHOLIC</option>
                        <option value="religion11">CHRISTIAN</option>
                        <option value="religion12">ESPIRITISTA</option>
                        <option value="religion13">EVANGELICAL</option>
                        <option value="religion14">HINDU</option>
                        <option value="religion15">IEMELIF</option>
                        <option value="religion16">IGLESIA NI CRISTO</option>
                        <option value="religion17">ISLAM</option>
                        <option value="religion18">JEHOVAH'S WITNESS</option>
                        <option value="religion19">JUDAISM</option>
                        <option value="religion20">MCGI</option>
                        <option value="religion21">METHODIST</option>
                        <option value="religion22">MORMON</option>
                        <option value="religion23">MUSLIM</option>
                        <option value="religion24">OTHERS</option>
                        <option value="religion25">PROTESTANT</option>
                        <option value="religion26">ROMAN CATHOLIC</option>
                        <option value="religion27">SEVENTH-DAY ADVENTIST</option>
                        <option value="religion28">SIKH</option>
                      </select>
                      <p>Classify applicant's religion from available list.</p>
                    </div>
                    <div class="col">
                      <label for="siblings">Siblings</label>
                      <input type="text" class="form-control" placeholder="Siblings" aria-label="siblings">
                      <p>Classify applicant's total number of siblings.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="religion">Civil Status:</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>< Select ></option>
                        <option value="religion1">Single</option>
                        <option value="religion2">Married</option>
                        <option value="religion3">Divorces</option>
                        <option value="religion4">Legally Seperated</option>
                        <option value="religion5">Widowed</option>
                      </select>
                      <p>Classify applicant's civil status from available list.</p>
                    </div>
                    <div class="col">
                      <label for="ordinal position">Ordinal Position (Rank):</label>
                      <input type="text" class="form-control" placeholder="Ordinal Position" aria-label="ordinal position">
                      <p>Classify applicant's ordinal position.</p>
                    </div>
                  </div>

                 
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->

                <!--Contact Information
                <div class="form-step">
                    <div class="row">
                      <div class="col-2">
                        <label for="present">Present Address:</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Number, Unit, Street Name, Building ">
                        <p>Number, Unit, Street Name, Building</p>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Barangay, Village, Subdivision, District ">
                        <p>Barangay, Village, Subdivision, District</p>
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-2">
                        <label for="present" hidden>Present Address:</label>
                      </div>
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder="Municipality / City">
                        <p>Municipality / City</p>
                      </div>
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder="Province / Region ">
                        <p>Province / Region </p>
                      </div>
                      <div class="col-2">
                        <input type="text" class="form-control">
                        <p>ZIP/Postal Code</p>
                      </div>
                    
                      <br/>
                      <div class="row">
                        <div class="col-2">
                          <label for="present" hidden>Present Address:</label>
                        </div>
                        <div class="col-4">
                          <input type="text" class="form-control" placeholder="Country">
                          <p>Country</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2">
                          <label for="present" hidden>Present Address:</label>
                        </div>
                        <div class="col">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="address">
                            <label for="address">Permanent address is the same as present address.</label>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <!--Permanent Address
                    <div class="row">
                      <div class="col-2">
                        <label for="permanent">Permanent Address:</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Number, Unit, Street Name, Building ">
                        <p>Number, Unit, Street Name, Building</p>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Barangay, Village, Subdivision, District ">
                        <p>Barangay, Village, Subdivision, District</p>
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-2">
                        <label for="present" hidden>Present Address:</label>
                      </div>
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder="Municipality / City">
                        <p>Municipality / City</p>
                      </div>
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder="Province / Region ">
                        <p>Province / Region </p>
                      </div>
                      <div class="col-2">
                        <input type="text" class="form-control">
                        <p>ZIP/Postal Code</p>
                      </div>
                    
                      <br/>
                      <div class="row">
                        <div class="col-2">
                          <label for="present" hidden>Present Address:</label>
                        </div>
                        <div class="col-4">
                          <input type="text" class="form-control" placeholder="Country">
                          <p>Country</p>
                        </div>
                      </div>
                      
                    </div>
               


                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                  
                </div>

                <div class="form-step">
                  <div class="row">
                    <div class="col">
                      <label for="homephone">Home Phone No.:</label>
                    </div>
                    <div class="col">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col">
                      <p>(Area Code) Phone No.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="mobilephone">Mobile Phone No.:</label>
                    </div>
                    <div class="col">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col">
                      <p>(Area Code) Mobile No.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="email">Email Address:</label>
                    </div>
                    <div class="col">
                      <input type="email" class="form-control">
                    </div>
                    <div class="col">
                      <p hidden>(Area Code) Mobile No.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="emailcode">Email Verification Code:</label>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control">
                      <br/>
                      <button class="btn btn-primary">Send Verification Code</button>
                    </div>
                    <div class="col">
                      <p>Once you entered your e-mail, click the Send
                        Verification Code button. You'll receive a confirmation
                        e-mail on your inbox or spam folder. Copy and paste it
                        on the place holder. You may resend another verification
                        code after a minute.</p>
                    </div>
                  </div>
                  <br/>
                  
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->

                <!--Emergency
                <div class="form-step">
                  <div class="row">
                    <div class="col">
                      <label for="guardian">Guardian / Contact Person:</label>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control">
                    </div>
                    <div class="col">
                      <p>In case of emergency. Mandatory field.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="relationship">Relationship:</label>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control">
                    </div>
                    <div class="col">
                      <p>Relationship with the contact person given.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="home">Home Phone No.:</label>
                    </div>
                    <div class="col">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col">
                      <p >Home phone number of the contact person. Mandatory field.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="mobile">Mobile Phone No.:</label>
                    </div>
                    <div class="col">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col">
                      <p>Mobile phone number of the contact person.</p>
                    </div>
                  </div>
                  <br/>
                  
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->

                <!--Documents
                <div class="form-step">
                  <div class="row">
                    <div class="col">
                      <label for="referenceno">Reference Number:</label>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control">
                    </div>
                    <div class="col">
                      <p hidden></p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="file1">Processing/Application Fee Payment slip:</label>
                    </div>
                    <div class="col-4">
                      <input type="file" class="form-control" id="file1">
                    </div>
                    <div class="col">
                      <p> This document is required.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="file2">Copy of Grades (Form 138):</label>
                    </div>
                    <div class="col-4">
                      <input type="file" class="form-control" id="file2">
                    </div>
                    <div class="col">
                      <p> This document is required.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col">
                      <label for="file3">PSA / Birth Certificate:</label>
                    </div>
                    <div class="col-4">
                      <input type="file" class="form-control" id="file3">
                    </div>
                    <div class="col">
                      <p hidden> This document is required.</p>
                    </div>
                  </div>
                  <br/>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->
                
                <!--Family Data
                <div class="form-step">
                  <div class="row">
                    <table>
                      <tr style="border: 1px solid black; background-color: #8b0000; color:white;">
                        <th>STAT</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>RELATIONSHIP</th>
                        <th>OCCUPATION</th>
                        <th style="width: 5%;"></th>
                      </tr>
                      <tr style="border: 1px solid black">
                        <td style="border: 1px solid black"><i class="fa-regular fa-pen-to-square" ></i></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example">
                          <option selected>< Select ></option>
                          <option value="relation1">Brother</option>
                          <option value="relation2">Daughter</option>
                          <option value="relation3">Father</option>
                          <option value="relation4">Mother</option>
                          <option value="relation5">Nephew</option>
                          <option value="relation6">Neice</option>
                          <option value="relation7">Sister</option>
                          <option value="relation8">Son</option>
                          <option value="relation9">Spouse</option>
                          <option value="relation10">Stepdaughter</option>
                          <option value="relation11">Stepson</option>
                        </select></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><button class="btn btn-danger">OK</button></td>
                      </tr>
                    </table>
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->

                <!--Educational Background
                <div class="form-step">
                  <div class="row">
                    <table>
                      <tr style="border: 1px solid black; background-color: #8b0000; color:white;">
                        <th>STAT</th>
                        <th>FROM</th>
                        <th>TO</th>
                        <th>EDUCATION TYPE</th>
                        <th>COURSE / PROGRAM / STRAND</th>
                        <th>NAME OF SCHOOL</th>
                        <th>SCHOOL TYPE</th>
                        <th style="width: 5%;"></th>
                      </tr>
                      <tr style="border: 1px solid black">
                        <td style="border: 1px solid black"><i class="fa-regular fa-pen-to-square" ></i></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example">
                          <option selected>< Select ></option>
                          <option value="eductype1">Preparatory/Nursery</option>
                          <option value="eductype2">Grade School</option>
                          <option value="eductype3">High School</option>
                          <option value="eductype4">Vocational/Trade</option>
                          <option value="eductype5">College</option>
                          <option value="eductype6">Post Graduate (Masters)</option>
                          <option value="eductype7">Post Graduate (PhD)</option>
                          <option value="eductype8">Junior High School</option>
                          <option value="eductype9">Senior High School</option>
                        </select></td>
                        <td style="border: 1px solid black"></td>
                        <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;"></td>
                        <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example">
                          <option selected>< Unknown ></option>
                          <option value="schooltype1">Private</option>
                          <option value="schooltype2">Public</option>
                        </select></td>
                        <td style="border: 1px solid black"><button class="btn btn-danger">OK</button></td>
                      </tr>
                    </table>
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>

                <div class="form-step">
                  <table>
                    <tr>
                      <th>QUESTIONS</th>
                      <th>ANSWERS</th>
                    </tr>
                    <tr>
                      <td>a. What is your best reason/s for choosing HAU?</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>	Others</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>	b. What are your schools of choice:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>	i. First Choice:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>	ii. Second Choice:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>iii. Third Choice:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>What has helped you decide to choose HAU?</td>
                      <td></td>
                    </tr>
                  </table>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-primary">Previous</a>
                    <a href="#" class="btn btn-next btn-primary">Next</a>
                  </div>
                </div>-->
              </form>


              <form id="regForm" action="dataInsert" class="form" method="post" enctype="multipart/form-data">

                <h4 style="">Application Form Test:</h4>
                <br>
                
                <!-- One "tab" for each step in the form: -->

                
                <!--<div class="tab">Name:</div>-->
                @csrf
                <div class="tab">
                  
                <label for="fname">First Name</label>
                <p><input name= "fname" placeholder="First name..." oninput="this.className = ''"></p>

                <label for="lname">Last Name</label>
                <p><input name= "lname" placeholder="Last name..." oninput="this.className = ''"></p>
                </div>
                

                <div class="tab">
                  <label for="apply">Apply For</label>
                  <select class="form-select" aria-label="Default select example" style="width: 100%;" name="entry_classification">
                    <option selected>Open this select menu</option>
                    <option value="basic education">Basic Education</option>
                    <option value="transferee">Transferee</option>
                    <option value="college">College</option>
                    <option value="graduate school">Graduate School</option>
                  </select>
                </div>

                 
                <div class="tab">
                  <label for="address">Address</label>
                  <p><input name="address"placeholder="Address..." oninput="this.className = ''"></p>
                </div>
                

                <div class="tab">
                  <label for="contact">Contact</label>
                  <p><input name = "email" placeholder="E-mail..." oninput="this.className = ''"></p>
                  <p><input name =" phone" placeholder="Phone..." oninput="this.className = ''"></p>
                </div>
               
                
                <br>
                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                </div>
                
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
                
                </form>


                <script>
                  var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab
                
                function showTab(n) {
                  // This function will display the specified tab of the form ...
                  var x = document.getElementsByClassName("tab");
                  x[n].style.display = "block";
                  // ... and fix the Previous/Next buttons:
                  if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                  } else {
                    document.getElementById("prevBtn").style.display = "inline";
                  }
                  if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                  } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                  }
                  // ... and run a function that displays the correct step indicator:
                  fixStepIndicator(n)
                }
                
                function nextPrev(n) {
                  // This function will figure out which tab to display
                  var x = document.getElementsByClassName("tab");
                  // Exit the function if any field in the current tab is invalid:
                  if (n == 1 && !validateForm()) return false;
                  // Hide the current tab:
                  x[currentTab].style.display = "none";
                  // Increase or decrease the current tab by 1:
                  currentTab = currentTab + n;
                  // if you have reached the end of the form... :
                  if (currentTab >= x.length) {
                    //...the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                  }
                  // Otherwise, display the correct tab:
                  showTab(currentTab);
                }
                
                function validateForm() {
                  // This function deals with validation of the form fields
                  var x, y, i, valid = true;
                  x = document.getElementsByClassName("tab");
                  y = x[currentTab].getElementsByTagName("input");
                  // A loop that checks every input field in the current tab:
                  for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                      // add an "invalid" class to the field:
                      y[i].className += " invalid";
                      // and set the current valid status to false:
                      valid = false;
                    }
                  }
                  // If the valid status is true, mark the step as finished and valid:
                  if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                  }
                  return valid; // return the valid status
                }
                
                function fixStepIndicator(n) {
                  // This function removes the "active" class of all steps...
                  var i, x = document.getElementsByClassName("step");
                  for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                  }
                  //... and adds the "active" class to the current step:
                  x[n].className += " active";
                }
                </script>




            </div>
           
          </div>
        </div>
      </div>

    
    </footer>
    <!-- partial -->
  </div>
@endsection