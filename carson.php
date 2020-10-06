<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Carson</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/carson-tutor-birmingham-al.jpg" alt="carson tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Senior at UAB majoring in biology with a double minor in chemistry and business administration.</p><br>
				<p class="tutorpage"><b>Experience:</b> She has tutored several of her peers for college classes.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-algebra. Algebra 1. Algebra 2. Pre-calculus. Calculus. Statistics. / Physical Science. Biology. AP Biology. Chemistry. AP Chemistry. Physics. AP Physics 1: Algebra-Based. AP Physics 2: Algebra-Based. / Test Prep (non-ACT). Homework Help. / English. AP English Language and Composition. AP English Literature and Composition.</p><br>
				<p class="tutorpage"><b>Style:</b> She breaks down big concepts into smaller, simpler steps so that the student is able to gain a complete understanding.</p><br>
				<p class="tutorpage"><b>$38/hour</b></p><br>

				<span class="tutorpage">See if Carson can meet at your desired meeting place:</span>
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
    var zips = "35205,35233,35203,35231,35220,35219,35202,35201,35283,35285,35232,35236,35266,35261,35260,35259,35255,35253,35282,35246,35237,35287,35294,35295,35297,35293,35292,35291,35298,35290,35288,35296,35249,35238,35209,35229,35204,35222,35234,35254,35213,35223,35208,35211,35207,35212,35243,35218,35216,35221,35206,35228,35064,35226,35214,35142,35068,35217,35224,35210,35060,35061,35127,35242,35181,35244,35119,35020,35021,35015,35036,35117,35215";
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