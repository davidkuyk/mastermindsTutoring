<?php include 'php/header.php';?>

<div class="wrapper">
  <div class="page-header">
    <h1 class="page-title">Anna</h1>
  </div>
  <div class="content">
    <div class="main-column">
        <img class="tutorpage" src="images/anna-tutor-birmingham-al.png" alt="anna tutor in birmingham" />

        <p class="tutorpage"><b>Education:</b> Sophomore at UAB majoring in Neuroscience. University Honors Program. Global Leadership Honors Program.</p><br>
				<p class="tutorpage"><b>Experience:</b> She got a 33 on the ACT and served as a tutor for underperforming students at her high school.</p><br>
				<p class="tutorpage"><b>Subjects:</b> Elementary Math. Pre-algebra. / Biology. AP Biology. AP Environmental Science. / ACT Prep. Test Prep (non-ACT). Homework Help. / English. AP English Language and Composition. AP English Literature and Composition. / AP Psychology.</p><br>
				<p class="tutorpage"><b>Style:</b> She uses a direct, individualized tutoring style to help students strengthen their test-taking skills.</p><br>
				<p class="tutorpage"><b>$35/hour</b></p><br>

				<span class="tutorpage">See if Anna can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcode" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer2">
          <div class="yes"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="no"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <!-- <div class="yes"><h2>Yes, she can meet there!</h2></div>
          <div class="no"><h2>No, she can't meet there.</h2></div>-->
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