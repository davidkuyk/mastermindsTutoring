<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Lindsay</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/lindsay-tutor-birmingham-al.jpg" alt="lindsay tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Graduated from the University of Alabama with a B.S. in Elementary Education. She also received her Master's degree in Elementary Education from the University of West Alabama.</p><br>
				<p class="tutorpage"><b>Experience:</b> She currently teaches 6th grade (all subjects) in Jefferson County. She has 9 years of teaching experience and 6 years of tutoring experience.</p><br>
				<p class="tutorpage"><b>Subjects:</b> ACT Prep. Test Prep (non-ACT). Homework Help.</p><br>
				<p class="tutorpage"><b>Style:</b> She enjoys getting to know her students' interests and hobbies outside of school in order to motivate them to do their best on the ACT.</p><br>
				<p class="tutorpage"><b>$55/hour</b></p><br>

				<span class="tutorpage">See if Lindsay can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcode" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer2">
          <!-- <div class="yes"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="no"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yes"><h2>Yes, she can meet there!</h2></div>
          <div class="no"><h2>No, she can't meet there.</h2></div>
      </div>    
    </div>
</div>

<?php include 'php/footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $('.no').hide();
  $('.yes').hide();
$(document).ready(function () {
  $('.zipcode').on('input', function () {
    var zips = "35226,35142,35216,35211,35209,35229,35221,35244,35205,35228,35243,35208,35233,35020,35254,35064,35238,35203,35218,35204,35021,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35223,35061,35222,35213,35234,35124,35242,35224,35022,35127,35207,35212,35060,35214,35043,35144,35206,35210,35080,35068,35217,35114,35007,35137,35118,35181,35005,35023,35015,35036,35119,35094,35117,35147,35111,35215,35235,35185,35051,35073,35176,35071";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.no').hide();
      $('.yes').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.no').show();
      $('.yes').hide();
    } else {
      // match! 
      $('.yes').show();
      $('.no').hide();
    }
  });
});
            </script>