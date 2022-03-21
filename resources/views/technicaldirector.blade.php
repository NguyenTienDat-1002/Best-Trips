<!DOCTYPE html>
<html>
<head>
  @includeIf('partials.W3CSS')
</head>
<body class="w3-light-grey " style="background-image: url('{{URL::asset('assets/img/about-bg.jpg') }}');">
<!-- Page Container -->
<x-navbar />
<div class="w3-content w3-margin-top" style="max-width:1400px;" >

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="{{ URL::asset('/img/about/TECHNICALDIRECTOR.JPG') }}" style="width:100%" alt="Avatar">
          <div class="w3-display-bottom left w3-container w3-text-black">
            <h2>Nguyen Tien Dat</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Back-End Developer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>643/8 Xo Viet Nghe Tinh, Binh Thanh District, HCM City</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>nguyentiendat10022000hiie@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>0937650276</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Learning</p>
          <div class="w3-round-xlarge">
            <div class="row">
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" checked></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
            </div>
          </div>
          <p>Problem solving</p>
          <div class="w3-round-xlarge">
            <div class="row">
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" checked></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
            </div>
          </div>
          <p>Teamwork</p>
          <div class="w3-round-xlarge">
            <div class="row">
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" checked></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
            </div>
          </div>
          <p>Communication</p>
          <div class="w3-round-xlarge">
            <div class="row">
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" checked></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
            </div>
          </div>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-round-xlarge">
            <div class="row">
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" checked></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
              <div class="col"><input class="w3-radio" type="radio" disabled></div>
            </div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>PHP Developer / Best Trips </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>March 10<sup>th</sup> 2022 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>PHP Developer / Job Search Website</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Java Developer / Caculator</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Ho Chi Minh University of technology (HUTECH) </b> </h5> 
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018 - <span class="w3-tag w3-teal w3-round ">Current</span></h6>
          <p>GPA: 3.72/4</p><br>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i></i>Activities</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>

      </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

</body>
</html>
