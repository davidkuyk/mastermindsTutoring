<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Faith</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/faith-tutor-birmingham-al.jpeg" alt="faith tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Senior at UAB majoring in Biomedical Sciences.</p><br>
				<p class="tutorpage"><b>Experience:</b> She has experience tutoring K-12 at WinShape Foster Homes, HeyTutor Experience, and is currently an UAB Supplemental Instructor for anatomy.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-Algebra. Algebra 1. Algebra 2. / Physical Science. Biology. AP Biology. Chemistry. AP Environmental Science. / Test Prep (non-ACT). Homework Help. / English. AP English Language and Composition. AP English Literature and Composition. / History. AP U.S. History. AP World History. Government/Economics. AP U.S. Government & Politics.</p><br>
				<p class="tutorpage"><b>Style:</b> Although she is working on a science degree, she also enjoys tutoring liberal arts subjects such as English and history. She likes to work on foundations and then build into the fundamentals of the subject. She also like to determine how the student learns best to provide them the best experience.</p><br>
				<p class="tutorpage"><b>$40/hour</b></p><br>

				<span class="tutorpage">See if Faith can meet at your desired meeting place:</span>
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
    var zips = "35213,35223,35212,35222,35238,35206,35210,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35205,35233,35234,35203,35243,35229,35209,35015,35217,35204,35207,35216,35254,35094,35242,35235,35068,35211,35215,35208,35119,35218,35226,35214,35221,35142,35228,35147,35181,35064,35173,35060,35244,35224,35176,35117,35036,35061,35043,35004,35124,35048,35127,35116,35020,35126,35123,35071,35021,35185,35005,35112,35073,35118,35022,35091,35052,35139,35144,35178";
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