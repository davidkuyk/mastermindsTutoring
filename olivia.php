<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Olivia</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/olivia-tutor-birmingham-al.jpg" alt="olivia tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Junior at UAB majoring in Biology and minoring in Psychology. University Honors Program.</p><br>
				<p class="tutorpage"><b>Experience:</b> She has tutoring experience with almost every age group in a large variety of subjects.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-algebra. Algebra 1. Algebra 2. Precalculus. Calculus. / Biology. Chemistry. / ACT Prep. Test Prep (non-ACT). Homework Help. / English.</p><br>
				<p class="tutorpage"><b>Style:</b> She listens to the student to find and improve problem areas. Her interest in tutoring stems from the confidence that knowledge and success can give students.</p><br>
				<p class="tutorpage"><b>$40/hour</b></p><br>

				<span class="tutorpage">See if Olivia can meet at your desired meeting place:</span>
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
    var zips = "35233,35203,35287,35285,35283,35282,35266,35261,35260,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35259,35255,35219,35201,35202,35220,35231,35232,35236,35237,35246,35249,35253,35205,35234,35204,35222,35238,35254,35209,35229,35213,35207,35208,35223,35212,35211";
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