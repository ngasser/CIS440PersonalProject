<?php
  //create variable names
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $name = $_POST['name'];

  // check that all the data was received
  if(($q1=='') || ($q2=='') || ($q3=='') || ($q4=='') || ($q5=='') || ($q6=='') || ($name=='')) {
    echo "<h1>
          <p align=\"center\">
          <img src=\"rosette.gif\" alt=\"\" />
          Sorry:
          <img src=\"rosette.gif\" alt=\"\" /></p></h1>
          <p>You need to fill in your name and answer all questions.</p>";
  } else {
    //add up the scores
    $score = 0;
    if ($q1 == 2) {
      // the correct answer for q1 is 2
      $score++;
    }
    if($q2 == 3) {
      // the correct answer for q2 is 3
      $score++;
    }
    if($q3 == 1) {
      // the correct answer for q3 is 1
      $score++;
    }
	if($q4 == 2) {
      // the correct answer for q4 is 2
      $score++;
    }
	if($q5 == 1) {
      // the correct answer for q5 is 1
      $score++;
    }
	if($q6 == 3) {
      // the correct answer for q5 is 3
      $score++;
    }

    //convert score to a percentage
    $score = $score / 6 * 100;

    if($score < 65) {
      // this person failed
      echo "<h1>
          <p align=\"center\">
          <img src=\"rosette.gif\" alt=\"\" />
          Sorry:
          <img src=\"rosette.gif\" alt=\"\" /></p></h1>
          <p>You need to score at least 50% to pass the exam.</p>";
    }  else {
      // create a string containing the score to one decimal place
      $score = number_format($score, 1);
      echo "<h1 align=\"center\">
            <img src=\"rosette.gif\" alt=\"\" />
            Congratulations!
            <img src=\"rosette.gif\" alt=\"\" /></h1>

            <p>Well done ".$name.", with a score of ".$score."%,
            you have passed the exam.</p>";

      // provide links to scripts that generate the certificates
      echo "<p>Please click here to download your certificate as
             a Microsoft Word (RTF) file.</p>
            <form action=\"rtf.php\" method=\"post\">
            <div align=\"center\">
            <input type=\"image\" src=\"certificate.gif\" border=\"0\">
            </div>
            <input type=\"hidden\" name=\"score\" value=\"".$score."\"/>
            <input type=\"hidden\" name=\"name\" value=\"".$name."\"/>
            </form>

            <p>Please click here to download your certificate as
            a Portable Document Format (PDF) file.</p>
            <form action=\"pdf.php\" method=\"post\">
            <div align=\"center\">
            <input type=\"image\" src=\"certificate.gif\" border=\"0\">
            </div>
            <input type=\"hidden\" name=\"score\" value=\"".$score."\"/>
            <input type=\"hidden\" name=\"name\" value=\"".$name."\"/>
            </form>

            <p>Please click here to download your certificate as
            a Portable Document Format (PDF) file generated with PDFLib.</p>
            <form action=\"pdflib.php\" method=\"post\">
            <div align=\"center\">
            <input type=\"image\" src=\"certificate.gif\" border=\"0\">
            </div>
            <input type=\"hidden\" name=\"score\" value=\"".$score."\"/>
            <input type=\"hidden\" name=\"name\" value=\"".$name."\"/>
            </form>";
     }
  }
?>
