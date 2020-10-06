<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Manuela</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/manuela-tutor-birmingham-al.jpg" alt="manuela tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Working on a BS in Genetics and Genomic Sciences and minors in Biology and Chemistry at UAB. Scored in the 97th percentile on the ACT, SAT, and SAT subject tests.</p><br>
				<p class="tutorpage"><b>Experience:</b> She has many years of experience tutoring students at her university and working as an engineering graphic teaching assistant. She has also served as a biochemistry teaching assistant at MIT. Manuela enjoys working for outreach programs where she has helped dozens of students achieve high scores on college entry exams as well as assisting them in developing competitive college applications. She really enjoys working with K-6th grade students and has helped many young students to read and write. Manuela is experienced in assisting students with various developmental needs as well as gifted students looking to get ahead.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-algebra. Algebra 1. Algebra 2. Statistics. AP Statistics. / Physical Science. Biology. AP Biology. Chemistry. AP Chemistry. Physics. AP Physics. AP Environmental Science. / ACT Prep. Test Prep (non-ACT). / Homework Help. / Reading. English. AP English Language and Composition. AP English Literature and Composition. / AP Psychology. / Spanish. AP Spanish Language & Culture.</p><br>
				<p class="tutorpage"><b>Style:</b> She brings years of math and science tutoring experience to each session, and enjoys breaking down the problem to its most basic form so that true comprehension can be mastered.</p><br>
				<p class="tutorpage"><b>$50/hour</b></p><br>

				<span class="tutorpage">See if Manuela can meet at your desired meeting place:</span>
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
    var zips = "35209,35211,35229,35205,35233,35208,35254,35221,35204,35203,35216,35298,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35261,35260,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35226,35238,35142,35218,35228,35243,35064,35222,35234";
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