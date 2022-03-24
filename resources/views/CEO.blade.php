<!DOCTYPE html>
<html>
<title>CEO</title>
@includeIf('partials.W3CSS')
<body class="w3-light-grey" style="background-image: url('{{URL::asset('assets/img/about-bg.jpg') }}');">
  <x-navbar/>
<div class="w3-content w3-margin-top" style="max-width:1400px;">
  
  <div class="w3-row-padding">
    
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://res.cloudinary.com/petern/image/upload/v1647948683/MyAvatar_epmcqw.png" 
            style="width:45%; border-radius: 50%; display: block; margin-left: auto; margin-right: auto;" alt="Avatar">
            <h2 style="text-align: center;">Nguyễn Tấn Phúc</h2>
        </div>
        <p style="padding:10px">A senior IT student at Ho Chi Minh Hutech University of Technology 
          seeking an opportunity to get an internship to learn more about new technologies,
          utilize my skills and strengths and gain more experience working in the field 
          to help with my career in the future.
        </p>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Intern</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Ho Chi Minh, Vietnam</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>nguyentanphuc03092000hiie@gmail.com</p>
          <p><i class="fa fa-facebook fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="https://www.facebook.com/monkyo2000">https://www.facebook.com/monkyo2000</a></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>0976943065</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Java, C#, HTML, CSS, Javascript</p>
          <p>MySQL, MSSQL Server</p>
          <p>Selenium</p>
          <p>Word, Excel, Powerpoint</p>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <p>Vietnamese</p>
          <br>
        </div>
      </div><br>
    </div>

    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Ho Chi Minh Hutech University of Technology</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2018 - Present</h6>
          <p>GPA: 3.58/4</p>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Course: Java Project</b></h5>
          <h5 class="w3-opacity"><b>Geometry Calculator</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2021 - Jun 2021</span></h6>
          <p>Tasks:<br>
            - Designed the UI for the project <br>
            - Implemented all the possible formulas related to each shape available in the project for users to calculate based on their available data <br>
            - Wrote a report for the final project <br>
            <br>
            Skill Gained: <br>
            - Helps improve Java coding skill</p>
        </div>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Course: IT Major Project</b></h5>
          <h5 class="w3-opacity"><b>LittleLibrary - Library Management System</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Sep 2021 - Dec 2021</span></h6>
          <p>Tasks:<br>
            - Designed the database for the project using MySQL <br>
            - Designed the UI for the project <br>
            - Using Java to develop the features like login, book searching/editing/adding/removing, customer/staff management, etc. <br>
            - Wrote a report for the final project <br>
            
             Skill Gained: <br>
            - Helps improve Java coding skill, database designing, and report writing</p>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
