<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Fahad</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/fahad-tutor-birmingham-al.jpg" alt="fahad tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Sophomore at UAB majoring in Biophysics and minoring in Mathematics/Chemistry. He does part-time research for the Center of Biophysical Sciences and Engineering at UAB.</p><br>
				<p class="tutorpage"><b>Experience:</b> He has experience tutoring STEM-related subjects like mathematics, physics, and chemistry from a middle school to college level. He has experience teaching both locally to his peers and online.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-Algebra. Algebra 1. Algebra 2. Pre-Calculus. Calculus. AP Calculus AB. AP Calculus BC. / Chemistry. AP Chemistry. Physics. AP Physics 1: Algebra-Based. AP Physics 2: Algebra-Based. AP Physics C: Mechanics. / Test Prep (non-ACT). Homework Help. / English.</p><br>
				<p class="tutorpage"><b>Style:</b> He believes in always starting with the big picture and breaking it down into smaller components. Instead of going straight to problem solving, he likes to make the student think critically and actually understand what is going on. He does this to assure that the student gains confidence in the topic, as this will be the building block of further problem solving.</p><br>
				<p class="tutorpage"><b>$50/hour</b></p><br>

				<span class="tutorpage">See if Fahad can meet at your desired meeting place:</span>
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
    var zips = "35244,35142,35226,35022,35020,35021,35221,35080,35211,35228,35124,35216,35144,35114,35064,35209,35061,35229,35208,35243,35137,35007,35218,35205,35127,35254,35233,35204,35224,35242,35238,35203,35283,35282,35266,35261,35260,35259,35255,35253,35295,35287,35296,35294,35292,35291,35290,35297,35293,35298,35288,35249,35246,35201,35202,35219,35220,35231,35232,35236,35237,35285,35043,35111,35223,35222,35213,35234,35023,35060,35207,35214,35212,35118,35074,35115,35005,35206,35051,35210,35068,35440,35187,35217,35040,35181";
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