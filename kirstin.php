<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Kirstin</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/kirstin-tutor-birmingham-al.jpg" alt="kirstin tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Graduated from UAB with a Masters in Clinical Laboratory Science. She also has a B.S. in Biology and a minor in Psychology from the University of Alabama.</p><br>
				<p class="tutorpage"><b>Experience:</b> She spent a year as a high school science and ACT prep teacher. She has multiple years of tutoring experience.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Pre-Algebra. Algebra 1. Algebra 2. Precalculus. / Biology. AP Biology. / ACT Prep. Test Prep (non-ACT). Homework Help.</p><br>
				<p class="tutorpage"><b>Style:</b> She enjoys helping students master concepts they didn't think they were capable of!</p><br>
				<p class="tutorpage"><b>$50/hour</b></p><br>

				<span class="tutorpage">See if Kirstin can meet at your desired meeting place:</span>
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
    var zips = "35243,35242,35223,35216,35229,35238,35213,35209,35205,35222,35233,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35260,35255,35259,35253,35266,35298,35261,35297,35296,35295,35294,35293,35292,35291,35290,35288,35287,35285,35283,35282,35203,35226,35210,35212,35211,35234,35244,35206,35204,35142,35254,35043,35124,35094,35208,35147,35221,35015,35207,35218,35228,35217,35064,35185,35020,35176,35068,35235,35021,35214,35061,35224,35215,35119,35144,35060";
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