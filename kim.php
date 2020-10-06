<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Kim</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/kim-tutor-birmingham-al.jpg" alt="kim tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> B.A. in Humanities and History from Brigham Young University. Master's Degree in History Education from the University of West Alabama. Certified teacher in math, German, and history.</p><br>
				<p class="tutorpage"><b>Experience:</b> She currently teaches math and German at Jefferson County International Baccalaureate Middle School.  She previously worked at a Montessori middle/high school where she taught math up through Algebra II, German, Humanities, History, Economics, and Government.  She has 8 years of teaching experience at the middle and high school levels.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-Algebra. Algebra 1. Algebra 2. Geometry. / ACT Prep. Test Prep (non-ACT). Homework Help. / English. AP English Language and Composition. AP English Literature and Composition. / History. AP U.S. History. AP European History. AP World History. Government/Economics. AP U.S. Government & Politics. AP Comparative Government & Politics. AP Human Geography. / German. AP German Language & Culture.</p><br>
				<p class="tutorpage"><b>Style:</b> She really loves working with students one-on-one because that is the best way she's found to help students build confidence in their abilities.  Since her teaching background is fairly broad, she also enjoys tying together a variety of subjects and helping students make connections that they can use in other classes.</p><br>
				<p class="tutorpage"><b>$50/hour</b></p><br>

				<span class="tutorpage">See if Kim can meet at your desired meeting place:</span>
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
    var zips = "";
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