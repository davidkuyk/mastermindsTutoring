<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Stanley</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/stanley-tutor-birmingham-al.jpg" alt="stanley tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Senior at the University of Chicago majoring in Economics. A National Merit Scholar Finalist, with scores in the 99th percentile on the ACT and SAT.</p><br>
				<p class="tutorpage"><b>Experience:</b>  He has tutored one-on-one and in classroom setting for more than five years. He has primarily taught STEM subjects with a special focus in college readiness and high-level test prep.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-algebra. Algebra 1. Algebra 2. Geometry. Precalulus. Calculus. Statistics. / Chemistry. AP Chemistry. Physics. / ACT Prep. Test Prep (non-ACT). Homework Help. / Reading. English. AP English Language and Composition. AP English Literature and Composition. / Government. Economics. AP Macroeconomics. AP Microeconomics. / French.</p><br>
				<p class="tutorpage"><b>Style:</b> Taking lessons from classroom instruction and quiz bowl coaching, his approach is engaging and thorough to help students master subjects deeply while also learning good study habits, and test-taking skills.</p><br>
				<p class="tutorpage"><b>$40/hour</b></p><br>

				<span class="tutorpage">See if Stanley can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcode" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer2">
          <!-- <div class="yes"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="no"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yes"><h2>Yes, he can meet there!</h2></div>
          <div class="no"><h2>No, he can't meet there.</h2></div>
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
    var zips = "35242,35043,35185,35147,35243,35124,35216,35051,35186,35223,35244,35094,35078,35176,35229,35213,35238,35209,35226,35210,35205,35007,35222,35144,35137,35142,35233,35212,35178,35211,35298,35297,35296,35295,35294,35293,35292,35291,35249,35246,35237,35236,35232,35231,35220,35202,35201,35219,35253,35255,35259,35290,35288,35287,35285,35283,35282,35260,35261,35266,35206,35203,35015";
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