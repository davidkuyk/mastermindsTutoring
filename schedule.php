<!--PHP TO MAKE SURE FORM DOESN'T RESUBMIT ON EACH PAGE REFRESH-->
<?php
// if the submit button hasn't been pressed, then the page displays the form
$action=$_REQUEST['action'];
if ($action=="")
    {
    ?>

<?php
    }
else 

// EMAIL FETCH gathers the data from the form
    {
    $tutor=$_REQUEST['tutor'];

    $schoolsubject12=$_REQUEST['subject12'];
    $meetingplace12=$_REQUEST['meetingplace12'];
    $duration12=$_REQUEST['duration12'];
    $date12=$_REQUEST['date12'];
    $time12=$_REQUEST['time12'];
    $alternative12=$_REQUEST['alternative12'];
    $open12=$_REQUEST['open12'];
    $message12=$_REQUEST['message12'];
    $user12=$_REQUEST['user12'];

    $schoolsubject1=$_REQUEST['subject1'];
    $meetingplace1=$_REQUEST['meetingplace1'];
    $duration1=$_REQUEST['duration1'];
    $date1=$_REQUEST['date1'];
    $time1=$_REQUEST['time1'];
    $alternative1=$_REQUEST['alternative1'];
    $open1=$_REQUEST['open1'];
    $message1=$_REQUEST['message1'];
    $user1=$_REQUEST['user1'];

    $schoolsubject6=$_REQUEST['subject6'];
    $meetingplace6=$_REQUEST['meetingplace6'];
    $duration6=$_REQUEST['duration6'];
    $date6=$_REQUEST['date6'];
    $time6=$_REQUEST['time6'];
    $alternative6=$_REQUEST['alternative6'];
    $open6=$_REQUEST['open6'];
    $message6=$_REQUEST['message6'];
    $user6=$_REQUEST['user6'];

    $schoolsubject7=$_REQUEST['subject7'];
    $meetingplace7=$_REQUEST['meetingplace7'];
    $duration7=$_REQUEST['duration7'];
    $date7=$_REQUEST['date7'];
    $time7=$_REQUEST['time7'];
    $alternative7=$_REQUEST['alternative7'];
    $open7=$_REQUEST['open7'];
    $message7=$_REQUEST['message7'];
    $user7=$_REQUEST['user7'];

    $schoolsubject5=$_REQUEST['subject5'];
    $meetingplace5=$_REQUEST['meetingplace5'];
    $duration5=$_REQUEST['duration5'];
    $date5=$_REQUEST['date5'];
    $time5=$_REQUEST['time5'];
    $alternative5=$_REQUEST['alternative5'];
    $open5=$_REQUEST['open5'];
    $message5=$_REQUEST['message5'];
    $user5=$_REQUEST['user5'];

    $schoolsubject21=$_REQUEST['subject21'];
    $meetingplace21=$_REQUEST['meetingplace21'];
    $duration21=$_REQUEST['duration21'];
    $date21=$_REQUEST['date21'];
    $time21=$_REQUEST['time21'];
    $alternative21=$_REQUEST['alternative21'];
    $open21=$_REQUEST['open21'];
    $message21=$_REQUEST['message21'];
    $user21=$_REQUEST['user21'];

    $schoolsubject3=$_REQUEST['subject3'];
    $meetingplace3=$_REQUEST['meetingplace3'];
    $duration3=$_REQUEST['duration3'];
    $date3=$_REQUEST['date3'];
    $time3=$_REQUEST['time3'];
    $alternative3=$_REQUEST['alternative3'];
    $open3=$_REQUEST['open3'];
    $message3=$_REQUEST['message3'];
    $user3=$_REQUEST['user3'];

    $schoolsubject4=$_REQUEST['subject4'];
    $meetingplace4=$_REQUEST['meetingplace4'];
    $duration4=$_REQUEST['duration4'];
    $date4=$_REQUEST['date4'];
    $time4=$_REQUEST['time4'];
    $alternative4=$_REQUEST['alternative4'];
    $open4=$_REQUEST['open4'];
    $message4=$_REQUEST['message4'];
    $user4=$_REQUEST['user4'];

    $schoolsubject10=$_REQUEST['subject10'];
    $meetingplace10=$_REQUEST['meetingplace10'];
    $duration10=$_REQUEST['duration10'];
    $date10=$_REQUEST['date10'];
    $time10=$_REQUEST['time10'];
    $alternative10=$_REQUEST['alternative10'];
    $open10=$_REQUEST['open10'];
    $message10=$_REQUEST['message10'];
    $user10=$_REQUEST['user10'];

    $schoolsubject13=$_REQUEST['subject13'];
    $meetingplace13=$_REQUEST['meetingplace13'];
    $duration13=$_REQUEST['duration13'];
    $date13=$_REQUEST['date13'];
    $time13=$_REQUEST['time13'];
    $alternative13=$_REQUEST['alternative13'];
    $open13=$_REQUEST['open13'];
    $message13=$_REQUEST['message13'];
    $user13=$_REQUEST['user13'];

    $schoolsubject9=$_REQUEST['subject9'];
    $meetingplace9=$_REQUEST['meetingplace9'];
    $duration9=$_REQUEST['duration9'];
    $date9=$_REQUEST['date9'];
    $time9=$_REQUEST['time9'];
    $alternative9=$_REQUEST['alternative9'];
    $open9=$_REQUEST['open9'];
    $message9=$_REQUEST['message9'];
    $user9=$_REQUEST['user9'];

    $schoolsubject30=$_REQUEST['subject30'];
    $meetingplace30=$_REQUEST['meetingplace30'];
    $duration30=$_REQUEST['duration30'];
    $date30=$_REQUEST['date30'];
    $time30=$_REQUEST['time30'];
    $alternative30=$_REQUEST['alternative30'];
    $open30=$_REQUEST['open30'];
    $message30=$_REQUEST['message30'];
    $user30=$_REQUEST['user30'];

    $new_student_full_name=$_REQUEST['new_student_full_name'];
    $gender=$_REQUEST['gender'];
    $school=$_REQUEST['school'];
    $graduation_year=$_REQUEST['graduation_year'];
    $parent_name=$_REQUEST['parent_name'];
    $home_address_line_1=$_REQUEST['home_address_line_1'];
    $home_address_line_2=$_REQUEST['home_address_line_2'];
    $zip_code=$_REQUEST['zip_code'];
    $phone=$_REQUEST['phone'];
    $texts=$_REQUEST['texts'];
    $alternate_phone=$_REQUEST['alternate_phone'];
    $student_phone=$_REQUEST['student_phone'];
    $email=$_REQUEST['email'];
    $email2=$_REQUEST['email2'];
    $source=$_REQUEST['source'];
    $referred=$_REQUEST['referred'];
    $new_acknowledgment=$_REQUEST['new_acknowledgment'];

    $returning_student_full_name=$_REQUEST['returning_student_full_name'];
    $returning_acknowledgment=$_REQUEST['returning_acknowledgment'];

// if user didn't choose tutor, then it displays error message
    if (($tutor==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }

// EMAIL CREATE else it creates the email
    else{   
        $headers = array(
          'From: "Masterminds Tutoring" <info@mastermindstutoring.com>' ,
          'Reply-To: "Masterminds Tutoring" <info@mastermindstutoring.com>' ,
          'X-Mailer: PHP/' . phpversion() ,
          'MIME-Version: 1.0' ,
          'Content-type: text/html; charset=iso-8859-1'
        );
        $from='from: Masterminds Tutoring <info@mastermindstutoring.com>\r\nreturn-path: info@mastermindstutoring.com';  
        $subject="Session Requested: " .$date1.''.$date12.''.$date21.''.$date3.''.$date4.''.$date5.''.$date6.''.$date7.''.$date13.''.$date9.''.$date10.''.$date30.'';
// EMAIL SENT TO ME AND THE PARENT
        $htmlContent1 =
'Thank you for requesting a session with Masterminds Tutoring! We are checking with the tutor now to see if they are available during a time you selected. We will email you soon with their response. Below are the details you selected.

Date: '.$date1.''.$date12.''.$date21.''.$date3.''.$date4.''.$date5.''.$date6.''.$date7.''.$date13.''.$date9.''.$date10.''.$date30.'
Time: '.$time1.''.$time12.''.$time21.''.$time3.''.$time4.''.$time5.''.$time6.''.$time7.''.$time13.''.$time9.''.$time10.''.$time30.'
Alternatives: '.$alternative1.''.$alternative12.''.$alternative21.''.$alternative3.''.$alternative4.''.$alternative5.''.$alternative6.''.$alternative7.''.$alternative13.''.$alternative9.''.$alternative10.''.$alternative30.'
Tutor: '.$tutor.'
Student: '.$new_student_full_name.''.$returning_student_full_name.'
Subject: '.$schoolsubject1.''.$schoolsubject12.''.$schoolsubject21.''.$schoolsubject3.''.$schoolsubject4.''.$schoolsubject5.''.$schoolsubject6.''.$schoolsubject7.''.$schoolsubject13.''.$schoolsubject9.''.$schoolsubject10.''.$schoolsubject30.'
Duration: '.$duration1.''.$duration12.''.$duration21.''.$duration3.''.$duration4.''.$duration5.''.$duration6.''.$duration7.''.$duration13.''.$duration9.''.$duration10.''.$duration30.'
Meeting Place: '.$meetingplace1.''.$meetingplace12.''.$meetingplace21.''.$meetingplace3.''.$meetingplace4.''.$meetingplace5.''.$meetingplace6.''.$meetingplace7.''.$meetingplace13.''.$meetingplace9.''.$meetingplace10.''.$meetingplace30.'
Open? '.$open1.''.$open12.''.$open21.''.$open3.''.$open4.''.$open5.''.$open6.''.$open7.''.$open13.''.$open9.''.$open10.''.$open30.'
Message: '.$message1.''.$message12.''.$message21.''.$message3.''.$message4.''.$message5.''.$message6.''.$message7.''.$message13.''.$message9.''.$message10.''.$message30.'
Gender: '.$gender.'
Graduation year: '.$graduation_year.'
Parent Name: '.$parent_name.'
Home Address: '.$home_address_line_1.'
Home Address Line 2: '.$home_address_line_2.'
Zip Code: '.$zip_code.'
Phone: '.$phone.'
Texts: '.$texts.'
Alternate Phone: '.$alternate_phone.'
Student Phone: '.$student_phone.'
Email: '.$email.'
School: '.$school.'
How did you hear about us: '.$source.'
Referred By: '.$referred.'
Acknowledgment of Policies: '.$new_acknowledgment.''.$returning_acknowledgment.'

David Kuyk
Owner/Director, Masterminds Tutoring
mastermindstutoring.com';

// sends the email
        mail($email, $subject, $htmlContent1, $from, $header);
        mail($email2, $subject, $htmlContent1, $from, $header);
        mail("info@mastermindstutoring.com", $subject, $htmlContent1, $from, $header);
// redirects the user to the success page
        header('Location: https://mastermindstutoring.com/success.php');
        }
    }
?>

<!--loads the jquery library to run the following scripts-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


<!--display divs based on selected tutor dropdown item-->
<script type="text/javascript">
$(document).ready(function(){
    $("#tutor").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

<!--NORMAL HEADER STUFF-->
<?php include 'php/header.php';?>
<style type="text/css">#schedulenow {display: none !important;}</style>

<!--NORMAL WRAPPER STUFF-->
<div class="wrapper">
    <div class="page-header">
        <h1 class="page-title">Request a Tutoring Session in Birmingham, AL</h1>
    </div>
    <div class="content">
        <div class="main-column">

<!--START OF FORM-->
  <form  class="schedule" action="" method="POST" enctype="multipart/form-data">
      
    <input type="hidden" name="action" value="SUBMIT">

    <p><i><span class="req">*</span> = Required Info</i></p>

    <p><i><b>Questions? Problems?</b> Want to schedule <b>reoccurring</b> sessions, <b>reschedule</b> a session, or <b>cancel</b> a session? Email info@mastermindstutoring.com</b></i></p>

    <span class="req">*</span>    <select id="tutor" name="tutor" required="">
      <option selected disabled>Select Tutor</option>
      <option value="no-preference">No Preference</option>
      <option value="anna">Anna</option>
      <option value="carson">Carson</option>
      <option value="fahad">Fahad</option>
      <option value="faith">Faith</option>
      <option value="heather">Heather</option>
      <!--<option value="kim">Kim</option>-->
      <option value="kirstin">Kirstin</option>
      <option value="lindsay">Lindsay</option>
      <option value="manuela">Manuela</option>
      <option value="olivia">Olivia</option>
      <option value="stanley">Stanley</option>
    </select>
    <br>

<!--NO PREFERENCE 1-->
      <div class="no-preference box">
        <br>

        <p><i>After you submit this form, we'll check with all of our tutors who help with the class you select and then email you some options.</i></p>

        <span class="req">*</span>    <select name="subject1">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra-one">Algebra 1</option>
            <option value="algebra-two">Algebra 2</option>
            <option value="geometry">Geometry</option>
            <option value="pre-calculus">Pre-Calculus</option>
            <option value="calculus">Calculus</option>
            <option value="ap-cal-ab">AP Calculus AB</option>
            <option value="ap-cal-bc">AP Calculus BC</option>
            <option value="statistics">Statistics</option>
            <option value="ap-statistics">AP Statistics</option>
          </optgroup>
          <optgroup label="Science">
              <option value="physical-science">Physical Science</option>
              <option value="biology">Biology</option>
              <option value="ap-biology">AP Biology</option>
              <option value="chemistry">Chemistry</option>
              <option value="ap-chemistry">AP Chemistry</option>
              <option value="physics">Physics</option>
              <option value="ap-physics-1">AP Physics 1: Algebra-Based</option>
              <option value="ap-physics-2">AP Physics 2: Algebra-Based</option>
              <option value="ap-physics-c1">AP Physics C: Electricity & Magnetism</option>
              <option value="ap-physics-c2">AP Physics C: Mechanics</option>
              <option value="ap-environmental-science">AP Environmental Science</option>
          </optgroup>
          <optgroup label="Test Prep">
              <option value="act-prep">ACT Prep</option>
              <option value="test-prep">Test Prep (non-ACT)</option>
              <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
              <option value="reading">Reading</option>
              <option value="english">English</option>
              <option value="ap-english-lang">AP English Language and Composition</option>
              <option value="ap-english-lit">AP English Literature and Composition</option>
          </optgroup>
          <optgroup label="Social Science">
              <option value="history">History</option>
              <option value="ap-us-history">AP U.S. History</option>
              <option value="ap-euro-history">AP European History</option>
              <option value="ap-world-history">AP World History</option>
              <option value="government-economics">Government/Economics</option>
              <option value="ap-us-government">AP U.S. Government & Politics</option>
              <option value="ap-comp-government">AP Comparative Government & Politics</option>
              <option value="ap-macro">AP Macroeconomics</option>
              <option value="ap-micro">AP Microeconomics</option>
              <option value="ap-psych">AP Psychology</option>
              <option value="ap-compsci-a">AP Computer Science A</option>
          </optgroup>
           <optgroup label="Foreign Languages">
               <option value="german">German</option> 
               <option value="spanish">Spanish</option>
               <option value="french">French</option>
               <option value="ap-spanish">AP Spanish Language & Culture</option>
          </optgroup>
          <optgroup label="Other">
               <option value="ap-research">AP Research</option> 
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace1">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside one of our tutor's service areas)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

                <span class="tutorpage">See if one of our tutors can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodeall" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesall"><h2>Yes, we can meet there!</h2></div>
          <div class="noall"><h2>No, we can't meet there.</h2></div>
      </div>

<script>
  $('.noall').hide();
  $('.yesall').hide();
$(document).ready(function () {
  $('.zipcodeall').on('input', function () {
    var zips = "35226,35142,35216,35211,35209,35229,35221,35244,35205,35228,35243,35208,35233,35020,35254,35064,35238,35203,35218,35204,35021,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35223,35061,35222,35213,35234,35124,35242,35224,35022,35127,35207,35212,35060,35214,35043,35144,35206,35210,35080,35068,35217,35114,35007,35137,35118,35181,35005,35023,35015,35036,35119,35094,35117,35147,35111,35215,35235,35185,35051,35073,35176,35071 35216,35229,35243,35209,35205,35238,35223,35233,35213,35211,35226,35222,35203,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35266,35261,35201,35298,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35242,35142,35204,35254,35234,35244,35208,35221,35212 35243,35242,35223,35216,35229,35238,35213,35209,35205,35222,35233,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35260,35255,35259,35253,35266,35298,35261,35297,35296,35295,35294,35293,35292,35291,35290,35288,35287,35285,35283,35282,35203,35226,35210,35212,35211,35234,35244,35206,35204,35142,35254,35043,35124,35094,35208,35147,35221,35015,35207,35218,35228,35217,35064,35185,35020,35176,35068,35235,35021,35214,35061,35224,35215,35119,35144,35060 35233,35203,35287,35285,35283,35282,35266,35261,35260,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35259,35255,35219,35201,35202,35220,35231,35232,35236,35237,35246,35249,35253,35205,35234,35204,35222,35238,35254,35209,35229,35213,35207,35208,35223,35212,35211 35242,35243,35216,35043,35124,35244,35229,35223,35226,35209,35238,35213,35205,35142,35147,35211,35222,35233,35185,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35203,35210,35212,35094,35144,35234,35221,35204,35254,35206,35007,35208,35051,35137,35228,35020,35218,35176,35015,35064,35021,35207,35186,35022,35078,35080,35061,35217,35114,35224,35068,35127,35235,35214,35060,35215,35178,35119,35040,35004,35173,35181,35044,35036,35117,35005,35115,35118,35052,35023,35048,35143,35111,35032,35128,35187,35116,35054,35071,35126,35123,35112,35073 35242,35043,35185,35147,35243,35124,35216,35051,35186,35223,35244,35094,35078,35176,35229,35213,35238,35209,35226,35210,35205,35007,35222,35144,35137,35142,35233,35212,35178,35211,35298,35297,35296,35295,35294,35293,35292,35291,35249,35246,35237,35236,35232,35231,35220,35202,35201,35219,35253,35255,35259,35290,35288,35287,35285,35283,35282,35260,35261,35266,35206,35203,35015 35206,35210,35015,35212,35235,35217,35213,35215,35222,35223,35238,35234,35119,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35203,35094,35233,35068,35205,35207,35173,35243,35204,35229,35209,35254,35048,35126,35123,35116,35181,35004,35214,35216,35208,35242,35117,35218,35211,35176,35036,35071,35147,35060,35112,35221,35226,35224,35064,35228,35091,35142,35052,35244,35061,35127,35005,35073,35185,35043,35139,35120,35180,35133,35020,35124,35021,35172,35128 35213,35223,35212,35222,35238,35206,35210,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35205,35233,35234,35203,35243,35229,35209,35015,35217,35204,35207,35216,35254,35094,35242,35235,35068,35211,35215,35208,35119,35218,35226,35214,35221,35142,35228,35147,35181,35064,35173,35060,35244,35224,35176,35117,35036,35061,35043,35004,35124,35048,35127,35116,35020,35126,35123,35071,35021,35185,35005,35112,35073,35118,35022,35091,35052,35139,35144,35178 35209,35211,35229,35205,35233,35208,35254,35221,35204,35203,35216,35298,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35261,35260,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35226,35238,35142,35218,35228,35243,35064,35222,35234 35205,35233,35203,35231,35220,35219,35202,35201,35283,35285,35232,35236,35266,35261,35260,35259,35255,35253,35282,35246,35237,35287,35294,35295,35297,35293,35292,35291,35298,35290,35288,35296,35249,35238,35209,35229,35204,35222,35234,35254,35213,35223,35208,35211,35207,35212,35243,35218,35216,35221,35206,35228,35064,35226,35214,35142,35068,35217,35224,35210,35060,35061,35127,35242,35181,35244,35119,35020,35021,35015,35036,35117,35215 35244,35142,35226,35022,35020,35021,35221,35080,35211,35228,35124,35216,35144,35114,35064,35209,35061,35229,35208,35243,35137,35007,35218,35205,35127,35254,35233,35204,35224,35242,35238,35203,35283,35282,35266,35261,35260,35259,35255,35253,35295,35287,35296,35294,35292,35291,35290,35297,35293,35298,35288,35249,35246,35201,35202,35219,35220,35231,35232,35236,35237,35285,35043,35111,35223,35222,35213,35234,35023,35060,35207,35214,35212,35118,35074,35115,35005,35206,35051,35210,35068,35440,35187,35217,35040,35181";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.noall').hide();
      $('.yesall').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.noall').show();
      $('.yesall').hide();
    } else {
      // match! 
      $('.yesall').show();
      $('.noall').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration1">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date1" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time1">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative1" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input name="open1" type="radio" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="open1" type="radio" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br><br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message1" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

<!--display divs based on selected new/returning user radio button-->
<script type="text/javascript">
$(document).ready(function(){
    $('input[class="user"]').click(function(){
        var inputValue = $(this).attr("id");
        var targetBox = $("." + inputValue);
        $(".section").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user1" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user1" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--ANNA 12-->
      <div class="anna box">
          <br>

        <span class="req">*</span>    <select name="subject12">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
          </optgroup>
          <optgroup label="Science">
            <option value="biology">Biology</option>
            <option value="ap-biology">AP Biology</option>
            <option value="ap-environmental-science">AP Environmental Science</option>
          </optgroup>
          <optgroup label="Test Prep">
            <option value="act-prep">ACT Prep</option>
            <option value="test-prep">Test Prep (non-ACT)</option>
            <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
            <option value="english">English</option>
            <option value="ap-english-lang">AP English Language and Composition</option>
            <option value="ap-english-lit">AP English Literature and Composition</option>
          </optgroup>
          <optgroup label="Social Science">
              <option value="ap-psych">AP Psychology</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace12">
          <option selected disabled>Select Meeting Place</option>
          <option value="skype">Skype</option>
          <option value="zoom">Zoom</option>
        </select>
        
        <br><br>

        <span class="tutorpage">See if Anna can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodeanna" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <div class="yesanna"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="noanna"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <!-- <div class="yes"><h2>Yes, she can meet there!</h2></div>
          <div class="no"><h2>No, she can't meet there.</h2></div>-->
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $('.noanna').hide();
  $('.yesanna').hide();
$(document).ready(function () {
  $('.zipcodeanna').on('input', function () {
    var zips = "35216,35229,35243,35209,35205,35238,35223,35233,35213,35211,35226,35222,35203,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35266,35261,35201,35298,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35242,35142,35204,35254,35234,35244,35208,35221,35212";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.noanna').hide();
      $('.yesanna').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.noanna').show();
      $('.yesanna').hide();
    } else {
      // match! 
      $('.yesanna').show();
      $('.noanna').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration12">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date12" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time12">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative12" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open12" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open12" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message12" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user12" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user12" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--CARSON 6-->
      <div class="carson box">
          <br>

        <span class="req">*</span>    <select name="subject6">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra-one">Algebra 1</option>
            <option value="algebra-two">Algebra 2</option>
            <option value="pre-calculus">Pre-Calculus</option>
            <option value="calculus">Calculus</option>
            <option value="statistics">Statistics</option>
          </optgroup>
          <optgroup label="Science">
              <option value="physical-science">Physical Science</option>
              <option value="biology">Biology</option>
              <option value="ap-biology">AP Biology</option>
              <option value="chemistry">Chemistry</option>
              <option value="ap-chemistry">AP Chemistry</option>
              <option value="physics">Physics</option>
              <option value="ap-physics-1">AP Physics 1: Algebra-Based</option>
              <option value="ap-physics-2">AP Physics 2: Algebra-Based</option>
          </optgroup>
          <optgroup label="Test Prep">
              <option value="test-prep">Test Prep (non-ACT)</option>
              <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
              <option value="english">English</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace6">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside the tutor's service area)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>
        
        <br><br>

        <span class="tutorpage">See if Carson can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodecarson" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yescarson"><h2>Yes, she can meet there!</h2></div>
          <div class="nocarson"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.nocarson').hide();
  $('.yescarson').hide();
$(document).ready(function () {
  $('.zipcodecarson').on('input', function () {
    var zips = "35205,35233,35203,35231,35220,35219,35202,35201,35283,35285,35232,35236,35266,35261,35260,35259,35255,35253,35282,35246,35237,35287,35294,35295,35297,35293,35292,35291,35298,35290,35288,35296,35249,35238,35209,35229,35204,35222,35234,35254,35213,35223,35208,35211,35207,35212,35243,35218,35216,35221,35206,35228,35064,35226,35214,35142,35068,35217,35224,35210,35060,35061,35127,35242,35181,35244,35119,35020,35021,35015,35036,35117,35215";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nocarson').hide();
      $('.yescarson').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nocarson').show();
      $('.yescarson').hide();
    } else {
      // match! 
      $('.yescarson').show();
      $('.nocarson').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration6">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date6" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time6">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative6" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open6" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open6" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message6" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user6" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user6" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--FAHAD 7-->
      <div class="fahad box">
          <br>

        <span class="req">*</span>    <select name="subject7">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra-one">Algebra 1</option>
            <option value="algebra-two">Algebra 2</option>
            <option value="pre-calculus">Pre-Calculus</option>
            <option value="calculus">Calculus</option>
            <option value="ap-cal-ab">AP Calculus AB</option>
            <option value="ap-cal-bc">AP Calculus BC</option>
          </optgroup>
          <optgroup label="Science">
              <option value="chemistry">Chemistry</option>
              <option value="ap-chemistry">AP Chemistry</option>
              <option value="physics">Physics</option>
              <option value="ap-physics-1">AP Physics 1: Algebra-Based</option>
              <option value="ap-physics-2">AP Physics 2: Algebra-Based</option>
              <option value="ap-physics-c2">AP Physics C: Mechanics</option>
          </optgroup>
          <optgroup label="Test Prep">
              <option value="test-prep">Test Prep (non-ACT)</option>
              <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
              <option value="english">English</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace7">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside one of our tutor's service areas)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="uab mervyn sterne library">UAB Mervyn Sterne Library</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

                <span class="tutorpage">See if Fahad can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodefahad" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesfahad"><h2>Yes, he can meet there!</h2></div>
          <div class="nofahad"><h2>No, he can't meet there.</h2></div>
      </div>

<script>
  $('.nofahad').hide();
  $('.yesfahad').hide();
$(document).ready(function () {
  $('.zipcodefahad').on('input', function () {
    var zips = "35244,35142,35226,35022,35020,35021,35221,35080,35211,35228,35124,35216,35144,35114,35064,35209,35061,35229,35208,35243,35137,35007,35218,35205,35127,35254,35233,35204,35224,35242,35238,35203,35283,35282,35266,35261,35260,35259,35255,35253,35295,35287,35296,35294,35292,35291,35290,35297,35293,35298,35288,35249,35246,35201,35202,35219,35220,35231,35232,35236,35237,35285,35043,35111,35223,35222,35213,35234,35023,35060,35207,35214,35212,35118,35074,35115,35005,35206,35051,35210,35068,35440,35187,35217,35040,35181";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nofahad').hide();
      $('.yesfahad').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nofahad').show();
      $('.yesfahad').hide();
    } else {
      // match! 
      $('.yesfahad').show();
      $('.nofahad').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration7">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date7" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time7">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative7" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open7" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open7" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message7" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user7" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user7" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--FAITH 5-->
      <div class="faith box">
          <br>

        <span class="req">*</span>    <select name="subject5">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra one">Algebra 1</option>
            <option value="algebra two">Algebra 2</option>
            <option value="pre-calculus">Pre-Calculus</option>
          </optgroup>
          <optgroup label="Science">
            <option value="physical science">Physical Science</option>
            <option value="biology">Biology</option>
            <option value="ap-biology">AP Biology</option>
            <option value="chemistry">Chemistry</option>
            <option value="ap-environmental-science">AP Environmental Science</option>
          </optgroup>
          <optgroup label="Test Prep">
            <option value="test-prep">Test Prep (non-ACT)</option>
            <option value="homework help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
            <option value="english">English</option>
            <option value="ap-english-lang">AP English Language and Composition</option>
            <option value="ap-english-lit">AP English Literature and Composition</option>
          </optgroup>
          <optgroup label="Social Science">
            <option value="history">History</option>
            <option value="ap-us-history">AP U.S. History</option>
            <option value="ap-world-history">AP World History</option>
            <option value="government/economics">Government/Economics</option>
            <option value="ap-us-government">AP U.S. Government & Politics</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace5">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside the tutor's service area)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>
        
        <br><br>

        <span class="tutorpage">See if Faith can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodefaith" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesfaith"><h2>Yes, she can meet there!</h2></div>
          <div class="nofaith"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.nofaith').hide();
  $('.yesfaith').hide();
$(document).ready(function () {
  $('.zipcodefaith').on('input', function () {
    var zips = "35213,35223,35212,35222,35238,35206,35210,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35205,35233,35234,35203,35243,35229,35209,35015,35217,35204,35207,35216,35254,35094,35242,35235,35068,35211,35215,35208,35119,35218,35226,35214,35221,35142,35228,35147,35181,35064,35173,35060,35244,35224,35176,35117,35036,35061,35043,35004,35124,35048,35127,35116,35020,35126,35123,35071,35021,35185,35005,35112,35073,35118,35022,35091,35052,35139,35144,35178";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nofaith').hide();
      $('.yesfaith').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nofaith').show();
      $('.yesfaith').hide();
    } else {
      // match! 
      $('.yesfaith').show();
      $('.nofaith').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration5">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date5" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time5">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative5" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open5" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open5" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message5" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user5" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user5" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--HEATHER 21-->
      <div class="heather box">
          <br>

        <span class="req">*</span>    <select name="subject21">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
          </optgroup>
          <optgroup label="Test Prep">
            <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
            <option value="reading">Reading</option>
            <option value="english">English</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace21">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside the tutor's service area)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

        <span class="tutorpage">See if Heather can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodeheather" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesheather"><h2>Yes, she can meet there!</h2></div>
          <div class="noheather"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.noheather').hide();
  $('.yesheather').hide();
$(document).ready(function () {
  $('.zipcodeheather').on('input', function () {
    var zips = "35242,35243,35216,35043,35124,35244,35229,35223,35226,35209,35238,35213,35205,35142,35147,35211,35222,35233,35185,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35203,35210,35212,35094,35144,35234,35221,35204,35254,35206,35007,35208,35051,35137,35228,35020,35218,35176,35015,35064,35021,35207,35186,35022,35078,35080,35061,35217,35114,35224,35068,35127,35235,35214,35060,35215,35178,35119,35040,35004,35173,35181,35044,35036,35117,35005,35115,35118,35052,35023,35048,35143,35111,35032,35128,35187,35116,35054,35071,35126,35123,35112,35073";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.noheather').hide();
      $('.yesheather').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.noheather').show();
      $('.yesheather').hide();
    } else {
      // match! 
      $('.yesheather').show();
      $('.noheather').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration21">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date21" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time21">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative21" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open21" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open21" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message21" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user21" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user21" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--KIM 3-->
      <div class="kim box">
          <br>

        <span class="req">*</span>    <select name="subject3">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra one">Algebra 1</option>
            <option value="algebra two">Algebra 2</option>
            <option value="geometry">Geometry</option>
          </optgroup>
          <optgroup label="Test Prep">
            <option value="act-prep">ACT Prep</option>
            <option value="test-prep">Test Prep (non-ACT)</option>
            <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
            <option value="english">English</option>
            <option value="ap-english-lang">AP English Language and Composition</option>
            <option value="ap-english-lit">AP English Literature and Composition</option>
          </optgroup>
          <optgroup label="Social Science">
            <option value="history">History</option>
            <option value="ap-us-history">AP U.S. History</option>
            <option value="ap-euro-history">AP European History</option>
            <option value="ap-world-history">AP World History</option>
            <option value="government/economics">Government/Economics</option>
            <option value="ap-us-government">AP U.S. Government & Politics</option>
            <option value="ap-comp-government">AP Comparative Government & Politics</option>
            <option value="ap-geo">AP Human Geography</option>
          </optgroup>
          <optgroup label="Foreign Languages">
            <option value="german">German</option>
            <option value="ap-german">AP German Language & Culture</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace3">
          <option selected disabled>Select Meeting Place</option>
          <option value="skype">Skype</option>
          <option value="zoom">Zoom</option>
        </select>

        <br><br>

        <span class="tutorpage">See if Kim can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodekim" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yeskim"><h2>Yes, she can meet there!</h2></div>
          <div class="nokim"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.nokim').hide();
  $('.yeskim').hide();
$(document).ready(function () {
  $('.zipcodekim').on('input', function () {
    var zips = "35206,35210,35015,35212,35235,35217,35213,35215,35222,35223,35238,35234,35119,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35203,35094,35233,35068,35205,35207,35173,35243,35204,35229,35209,35254,35048,35126,35123,35116,35181,35004,35214,35216,35208,35242,35117,35218,35211,35176,35036,35071,35147,35060,35112,35221,35226,35224,35064,35228,35091,35142,35052,35244,35061,35127,35005,35073,35185,35043,35139,35120,35180,35133,35020,35124,35021,35172,35128";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nokim').hide();
      $('.yeskim').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nokim').show();
      $('.yeskim').hide();
    } else {
      // match! 
      $('.yeskim').show();
      $('.nokim').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration3">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date3" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time3">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative3" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open3" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open3" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message3" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user3" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user3" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--KIRSTIN 4-->
      <div class="kirstin box">
          <br>

        <span class="req">*</span>    <select name="subject4">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra one">Algebra 1</option>
            <option value="algebra two">Algebra 2</option>
            <option value="pre-calculus">Pre-Calculus</option>
          </optgroup>
          <optgroup label="Science">
            <option value="biology">Biology</option>
            <option value="ap-biology">AP Biology</option>
          </optgroup>
          <optgroup label="Test Prep">
            <option value="act-prep">ACT Prep</option>
            <option value="test-prep">Test Prep (non-ACT)</option>
            <option value="homework-help">Homework Help</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace4">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside the tutor's service area)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

        <span class="tutorpage">See if Kirstin can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodekirstin" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yeskirstin"><h2>Yes, she can meet there!</h2></div>
          <div class="nokirstin"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.nokirstin').hide();
  $('.yeskirstin').hide();
$(document).ready(function () {
  $('.zipcodekirstin').on('input', function () {
    var zips = "35243,35242,35223,35216,35229,35238,35213,35209,35205,35222,35233,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35260,35255,35259,35253,35266,35298,35261,35297,35296,35295,35294,35293,35292,35291,35290,35288,35287,35285,35283,35282,35203,35226,35210,35212,35211,35234,35244,35206,35204,35142,35254,35043,35124,35094,35208,35147,35221,35015,35207,35218,35228,35217,35064,35185,35020,35176,35068,35235,35021,35214,35061,35224,35215,35119,35144,35060";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nokirstin').hide();
      $('.yeskirstin').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nokirstin').show();
      $('.yeskirstin').hide();
    } else {
      // match! 
      $('.yeskirstin').show();
      $('.nokirstin').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration4">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date4" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time4">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative4" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open4" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open4" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message4" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user4" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user4" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--LINDSAY 30-->
      <div class="lindsay box">
          <br>

        <span class="req">*</span>    <select name="subject30">
          <option selected disabled>Select Class</option>
          <optgroup label="Test Prep">
            <option value="act-prep">ACT Prep</option>
            <option value="test-prep">Test Prep (non-ACT)</option>
            <option value="homework-help">Homework Help</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace30">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside one of our tutor's service areas)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

        <span class="tutorpage">See if Lindsay can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodelindsay" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yeslindsay"><h2>Yes, she can meet there!</h2></div>
          <div class="nolindsay"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.nolindsay').hide();
  $('.yeslindsay').hide();
$(document).ready(function () {
  $('.zipcodelindsay').on('input', function () {
    var zips = "35226,35142,35216,35211,35209,35229,35221,35244,35205,35228,35243,35208,35233,35020,35254,35064,35238,35203,35218,35204,35021,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35260,35261,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35223,35061,35222,35213,35234,35124,35242,35224,35022,35127,35207,35212,35060,35214,35043,35144,35206,35210,35080,35068,35217,35114,35007,35137,35118,35181,35005,35023,35015,35036,35119,35094,35117,35147,35111,35215,35235,35185,35051,35073,35176,35071";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nolindsay').hide();
      $('.yeslindsay').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nolindsay').show();
      $('.yeslindsay').hide();
    } else {
      // match! 
      $('.yeslindsay').show();
      $('.nolindsay').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration30">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date30" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time30">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative30" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open30" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open30" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message30" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user30" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user30" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--MANUELA 10-->
      <div class="manuela box">
          <br>

        <span class="req">*</span>    <select name="subject10">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra-one">Algebra 1</option>
            <option value="algebra-two">Algebra 2</option>
            <option value="statistics">Statistics</option>
            <option value="ap-statistics">AP Statistics</option>
          </optgroup>
          <optgroup label="Science">
              <option value="physical-science">Physical Science</option>
              <option value="biology">Biology</option>
              <option value="ap-biology">AP Biology</option>
              <option value="chemistry">Chemistry</option>
              <option value="ap-chemistry">AP Chemistry</option>
              <option value="physics">Physics</option>
              <option value="ap-physics-1">AP Physics 1: Algebra-Based</option>
              <option value="ap-physics-2">AP Physics 2: Algebra-Based</option>
              <option value="ap-environmental-science">AP Environmental Science</option>
          </optgroup>
          <optgroup label="Test Prep">
              <option value="act-prep">ACT Prep</option>
              <option value="test-prep">Test Prep (non-ACT)</option>
              <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
              <option value="reading">Reading</option>
              <option value="english">English</option>
              <option value="ap-english-lang">AP English Language and Composition</option>
              <option value="ap-english-lit">AP English Literature and Composition</option>
          </optgroup>
          <optgroup label="Social Science">
              <option value="ap-psych">AP Psychology</option>
          </optgroup>
           <optgroup label="Foreign Languages">
               <option value="spanish">Spanish</option>
               <option value="ap-spanish">AP Spanish Language & Culture</option>
          </optgroup>
          <optgroup label="Other">
               <option value="ap-research">AP Research</option> 
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace10">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="in-home">In-Home (address must be inside the tutor's service area)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

        <span class="tutorpage">See if Manuela can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodemanuela" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesmanuela"><h2>Yes, she can meet there!</h2></div>
          <div class="nomanuela"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.nomanuela').hide();
  $('.yesmanuela').hide();
$(document).ready(function () {
  $('.zipcodemanuela').on('input', function () {
    var zips = "35209,35211,35229,35205,35233,35208,35254,35221,35204,35203,35216,35298,35266,35282,35283,35285,35287,35288,35290,35291,35292,35293,35294,35295,35296,35297,35261,35260,35201,35202,35219,35220,35231,35232,35236,35237,35246,35249,35253,35255,35259,35226,35238,35142,35218,35228,35243,35064,35222,35234,35242";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nomanuela').hide();
      $('.yesmanuela').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nomanuela').show();
      $('.yesmanuela').hide();
    } else {
      // match! 
      $('.yesmanuela').show();
      $('.nomanuela').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration10">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date10" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time10">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative10" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open10" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open10" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message10" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user10" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user10" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--OLIVIA 13-->
      <div class="olivia box">
          <br>

        <span class="req">*</span>    <select name="subject13">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra one">Algebra 1</option>
            <option value="algebra two">Algebra 2</option>
            <option value="pre-calculus">Pre-Calculus</option>
            <option value="calculus">Calculus</option>
          </optgroup>
          <optgroup label="Science">
            <option value="biology">Biology</option>
            <option value="chemistry">Chemistry</option>
          </optgroup>
          <optgroup label="Test Prep">
            <option value="act-prep">ACT Prep</option>
            <option value="test-prep">Test Prep (non-ACT)</option>
            <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
            <option value="english">English</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace13">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="in-home">In-Home (address must be inside the tutor's service area)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

                <span class="tutorpage">See if Olivia can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodeolivia" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesolivia"><h2>Yes, she can meet there!</h2></div>
          <div class="noolivia"><h2>No, she can't meet there.</h2></div>
      </div>

<script>
  $('.noolivia').hide();
  $('.yesolivia').hide();
$(document).ready(function () {
  $('.zipcodeolivia').on('input', function () {
    var zips = "35233,35203,35287,35285,35283,35282,35266,35261,35260,35288,35290,35291,35292,35293,35294,35295,35296,35297,35298,35259,35255,35219,35201,35202,35220,35231,35232,35236,35237,35246,35249,35253,35205,35234,35204,35222,35238,35254,35209,35229,35213,35207,35208,35223,35212,35211";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.noolivia').hide();
      $('.yesolivia').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.noolivia').show();
      $('.yesolivia').hide();
    } else {
      // match! 
      $('.yesolivia').show();
      $('.noolivia').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration13">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date13" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time13">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative13" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open13" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open13" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message13" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user13" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user13" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--STANLEY 9-->
      <div class="stanley box">
          <br>

        <span class="req">*</span>    <select name="subject9">
          <option selected disabled>Select Class</option>
          <optgroup label="Math">
            <option value="elementary-math">Elementary Math</option>
            <option value="pre-algebra">Pre-Algebra</option>
            <option value="algebra-one">Algebra 1</option>
            <option value="algebra-two">Algebra 2</option>
            <option value="geometry">Geometry</option>
            <option value="pre-calculus">Pre-Calculus</option>
            <option value="calculus">Calculus</option>
            <option value="statistics">Statistics</option>
          </optgroup>
          <optgroup label="Science">
              <option value="chemistry">Chemistry</option>
              <option value="ap-chemistry">AP Chemistry</option>
              <option value="physics">Physics</option>
          </optgroup>
          <optgroup label="Test Prep">
              <option value="act-prep">ACT Prep</option>
              <option value="test-prep">Test Prep (non-ACT)</option>
              <option value="homework-help">Homework Help</option>
          </optgroup>
          <optgroup label="English">
              <option value="reading">Reading</option>
              <option value="english">English</option>
              <option value="ap-english-lang">AP English Language and Composition</option>
              <option value="ap-english-lit">AP English Literature and Composition</option>
          </optgroup>
          <optgroup label="Social Science">
              <option value="government-economics">Government/Economics</option>
              <option value="ap-macro">AP Macroeconomics</option>
              <option value="ap-micro">AP Microeconomics</option>
          </optgroup>
           <optgroup label="Foreign Languages">
               <option value="french">French</option>
          </optgroup>
        </select>
        <br><br>

        <span class="req">*</span>    <select name="meetingplace9">
          <option selected disabled>Select Meeting Place</option>
          <option value="brookwood village o'henry's coffee">Brookwood Village O'Henry's Coffee</option>
          <option value="cahaba heights starbucks">Cahaba Heights Starbucks</option>
          <option value="emmet o'neal library">Emmet O'Neal Library</option>
          <option value="homewood library">Homewood Library</option>
          <option value="hoover library">Hoover Library</option>
          <option value="hwy. 280 books-a-million">Hwy. 280 Books-a-Million</option>
          <option value="hwy. 280 starbucks (eastbound)">Hwy. 280 Starbucks (Eastbound)</option>
          <option value="hwy. 280 starbucks (westbound)">Hwy. 280 Starbucks (Westbound)</option>
          <option value="in-home">In-Home (address must be inside one of our tutor's service areas)</option>
          <option value="mountain brook church street coffee and books">Mountain Brook Church Street Coffee and Books</option>
          <option value="mountain brook starbucks">Mountain Brook Starbucks</option>
          <option value="north shelby library">North Shelby Library</option>
          <option value="samford university library">Samford University Library</option>
          <option value="skype">Skype</option>
          <option value="summit barnes and noble coffee shop">Summit Barnes and Noble Coffee Shop</option>
          <option value="vestavia hills public library">Vestavia Hills Public Library</option>
          <option value="vestavia starbucks">Vestavia Starbucks</option>
          <option value="zoom">Zoom</option>
          <option value="other">Other (write address in text box later in this form)</option>
        </select>

        <br><br>

                <span class="tutorpage">See if Stanley can meet at your desired meeting place:</span>
        <span class="tutorselect"><input type="text" class="zipcodestanley" name="zipcode" placeholder="Select a ZIP CODE"></span>

        <div class="flexcontainer3">
          <!-- <div class="yescarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>
          <div class="nocarson"><h2>Anna is currently meeting via Skype/Zoom only.</h2></div>-->
          <div class="yesstanley"><h2>Yes, he can meet there!</h2></div>
          <div class="nostanley"><h2>No, he can't meet there.</h2></div>
      </div>

<script>
  $('.nostanley').hide();
  $('.yesstanley').hide();
$(document).ready(function () {
  $('.zipcodestanley').on('input', function () {
    var zips = "35242,35043,35185,35147,35243,35124,35216,35051,35186,35223,35244,35094,35078,35176,35229,35213,35238,35209,35226,35210,35205,35007,35222,35144,35137,35142,35233,35212,35178,35211,35298,35297,35296,35295,35294,35293,35292,35291,35249,35246,35237,35236,35232,35231,35220,35202,35201,35219,35253,35255,35259,35290,35288,35287,35285,35283,35282,35260,35261,35266,35206,35203,35015";
    var input = $(this).val();
    if(input.length !== 5) {
      $('.nostanley').hide();
      $('.yesstanley').hide();
    } else if (zips.indexOf(input) == -1){
      // there is a mismatch, hence show the error message
      $('.nostanley').show();
      $('.yesstanley').hide();
    } else {
      // match! 
      $('.yesstanley').show();
      $('.nostanley').hide();
    }
  });
});
            </script>

        <span class="req">*</span>    <select name="duration9">
          <option selected disabled>Select Duration</option>
          <option value="1 hour">1 Hour</option>
          <option value="1.5 hours">1.5 Hours</option>
          <option value="2 hours">2 Hours</option>
        </select>
         <br><br>

        <span class="req">*</span><span><b>Select Date</b> <input type="date" name="date9" placeholder="mm/dd/yyyy"> (<i>Bookings made after 9pm the day before the session are NOT guaranteed.</i>)</span>
        <br><br>

        <span class="req">*</span>    <select name="time9">
          <option selected disabled>Select Start Time</option>
          <option value="9:00am">9:00AM</option>
          <option value="9:30am">9:30AM</option>
          <option value="10:00am">10:00AM</option>
          <option value="10:30am">10:30AM</option>
          <option value="11:00am">11:00AM</option>
          <option value="11:30am">11:30AM</option>
          <option value="12:00pm">12:00PM</option>
          <option value="12:30pm">12:30PM</option>
          <option value="1:00pm">1:00PM</option>
          <option value="1:30pm">1:30PM</option>
          <option value="2:00pm">2:00PM</option>
          <option value="2:30pm">2:30PM</option>
          <option value="3:00pm">3:00PM</option>
          <option value="3:30pm">3:30PM</option>
          <option value="4:00pm">4:00PM</option>
          <option value="4:30pm">4:30PM</option>
          <option value="5:00pm">5:00PM</option>
          <option value="5:30pm">5:30PM</option>
          <option value="6:00pm">6:00PM</option>
          <option value="6:30pm">6:30PM</option>
          <option value="7:00pm">7:00PM</option>
          <option value="7:30pm">7:30PM</option>
          <option value="8:00pm">8:00PM</option>
        </select>
        <br><br>

        <p><span class="req">*</span><b>Please list a few alternative times/dates that would work for your student:</b></p>
            <textarea name="alternative9" rows="3" cols="30" placeholder="Example: Tuesdays 3-9pm or Wednesdays 4-8pm would also work."></textarea><br>

        <p><span class="req">*</span><b>Is your selected meeting place open during the time you chose (check Google)?</b></p>
        <input type="radio" name="open9" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="open9" value="doesn't apply to me"> <span>Doesn't Apply to Me</span><br>
        <br>

        <p><span class="req">*</span><b>What specific topic(s) does your student need help with?</b><i>The more details you share, the better the tutor will be able to help. If you don't have specific info now, please email us before the session. Include any info about your student that you think is important.</i></p>
            <textarea name="message9" rows="3" cols="30" placeholder="Example: Stoichiometry, molarity & dilution calculations for AP Physics. He has a homework assignment due this Friday. My son gets good grades on tests, but doesn't complete his homework. Please check his class assignments and make sure he's caught up. He has problems with distractions, so please work with him on staying focused."></textarea><br>

        <p><span class="req">*</span><input id="new" class="user" type="radio" name="user9" value="new user"> <span><b>New User</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<input id="returning" class="user" type="radio" name="user9" value="returning user"> <span><b>Returning User</b></span></p>
      </div>

<!--NEW STUDENT-->
      <div class="new section">
        <span class="req">*</span>    <input name="new_student_full_name" type="text" value="" size="30" placeholder="Student's Full Name"/><br><br>
        <span class="req">*</span>    <input type="radio" name="gender" value="M"> <span>Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="F"> <span>Female</span><br><br>
        <span class="req">*</span>    <input name="school" type="text" value="" size="30" placeholder="School"/><br><br>
        <span class="req">*</span>    <input name="graduation_year" type="number" value="" size="4" placeholder="Graduation Year"/><br><br>
        <span class="req">*</span>    <input name="parent_name" type="text" value="" size="30" placeholder="Parent Guardian's Full Name"/><br><br>
        <span class="req">*</span>    <input name="home_address_line_1" type="text" value="" size="30" placeholder="Home Address"/><br><br>
        &nbsp;&nbsp;<input name="home_address_line_2" type="text" value="" size="30" placeholder="Home Address Line 2"/><br><br>
        <span class="req">*</span>    <input name="zip_code" type="number" value="" size="15" placeholder="Zip Code"/><br><br>
        <span class="req">*</span>    <input name="phone" type="tel" value="" size="15" placeholder="Phone"/><br><br>
        <span class="req">*</span>    <span><b>Can you receive texts to the above phone number?</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="texts" value="yes"> <span>Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="texts" value="no"> <span>No</span><br><br>
        &nbsp;&nbsp;<input name="alternate_phone" type="tel" value="" size="15" placeholder="Alternate Phone"/><br><br>
        &nbsp;&nbsp;<input name="student_phone" type="tel" value="" size="15" placeholder="Student's Phone"/><br><br>
        <span class="req">*</span>    <input name="email" type="email" value="" size="30" placeholder="Parent/Guardian's Email"/><br><br>
      <span class="req">*</span>    <select name="source">
          <option selected disabled>How Did You Hear About Us?</option>
          <option value="google ad">Google Ad</option>
          <option value="web search">Web Search</option>
          <option value="school counselor">School Counselor</option>
          <option value="word of mouth">Word of Mouth</option>
          <option value="facebook">Facebook</option>
          <option value="nextdoor">Nextdoor</option>
      </select><br><br>

        &nbsp;&nbsp;<input name="referred" type="text" value="" size="30" placeholder="Referred By"/><br><br><br>

        <!--POLICIES-->
        <p><b>Policy Reminders (Please Read!): Payment is Due at Least an Hour before Every Session. Same-Day Scheduling is Not Guaranteed. We Need a 4-Hour Notice for Rescheduling/Cancellations. We Can't Extend the Session Time if the Student is Late. No-Shows are Charged. An Adult Must Be Present in the Home Throughout Tutoring. </b>(<a href="/tutoring" target="_blank">Details</a>)</p><br>

<!--shows the hidden submit button when checkbox is checked -->
<script type="text/javascript">
$(document).ready(function () {
  $('.submit').hide();
  $('.checkbox').change(function () {
    if (this.checked) {
      $('.submit').show();
    }
    else {
      $('.submit').hide();
    }
  });
});
</script>

        <span class="req">*</span>    <input class="checkbox" type="checkbox" name="new_acknowledgment" value="yes"><span>  By checking this box, I acknowledge that I've read the above policies, I understand them, and I agree to abide by them. <i>(Don't forget to write the session details in your calendar and set reminders!)</i></span><br><br>

<!--SUBMIT-->
      <br>
    <input class="submit" type="submit" value="SUBMIT"/>
      </div>

<!--RETURNING STUDENT-->
      <div class="returning section">
        <span class="req">*</span>    <input name="returning_student_full_name" type="text" value="" size="30" placeholder="Student's Full Name"/><br><br>
        <span class="req">*</span>    <input name="email2" type="email" value="" size="30" placeholder="Parent/Guardian's Email"/><br><br>

<!--POLICIES-->
        <p><b>Policy Reminders (Please Read!): Payment is Due at Least an Hour before Every Session. Same-Day Scheduling is Not Guaranteed. We Need a 4-Hour Notice for Rescheduling/Cancellations. We Can't Extend the Session Time if the Student is Late. No-Shows are Charged. An Adult Must Be Present in the Home Throughout Tutoring. </b>(<a href="/tutoring" target="_blank">Details</a>)</p><br>

        <span class="req">*</span><input class="checkbox" type="checkbox" name="returning_acknowledgment" value="yes"><span>  By checking this box, I acknowledge that I've read these policies, I understand them, and I agree to abide by them. <i>(Don't forget to write the session details in your calendar and set reminders!)</i></span><br><br>

<!--SUBMIT-->
      <br>
    <p><input class="submit" type="submit" value="SUBMIT"/></p>
      </div>


    </form>

<!--END OF FORM-->

        </div>
    </div>
</div>

<?php include 'php/footer.php';?>