<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Heather</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/heather-tutor-birmingham-al.jpg" alt="heather tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Graduated from the University of Texas at Austin with a Bachelor of Science and a minor in English. Master of Education from the University of Montevallo. 6 hours of post-graduate coursework in Gifted Education from Samford University.</p><br>
				<p class="tutorpage"><b>Experience:</b> She has been teaching kindergarten through 6th grade for over 15 years and has received training in Words their Way, Making Meaning, the Lucy Calkins method of writing, and Investigations.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-Algebra. / Homework Help. / Reading. English.</p><br>
				<p class="tutorpage"><b>Style:</b> She has a passion for helping students reach their potential, build their confidence, and have fun in the process.</p><br>
				<p class="tutorpage"><b>$55/hour</b></p><br>

				<span class="tutorpage">See if Heather can meet at your desired meeting place:</span>
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
    var zips = "35242,35243,35216,35043,35124,35244,35229,35223,35226,35209,35238,35213,35205,35142,35147,35211,35222,35233,35185,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35203,35210,35212,35094,35144,35234,35221,35204,35254,35206,35007,35208,35051,35137,35228,35020,35218,35176,35015,35064,35021,35207,35186,35022,35078,35080,35061,35217,35114,35224,35068,35127,35235,35214,35060,35215,35178,35119,35040,35004,35173,35181,35044,35036,35117,35005,35115,35118,35052,35023,35048,35143,35111,35032,35128,35187,35116,35054,35071,35126,35123,35112,35073";
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