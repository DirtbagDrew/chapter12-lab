#!/usr/local/php5/bin/php-cgi
<?php
$genres=array("Abstract", "Baroque", "Gothic", "Renaissance");
$subjects=array("Animals", "Landscape", "People");
?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>

<main>
<form class="form"  id="mainForm" method="post" action="art-process.php">
   <fieldset class="form__panel">
      <legend class="form__heading">Edit Art Work Details</legend>
        <p class="form__row">
           <label for="title">Title</label><br/>
           <input type="text" name="title" id="title" class="form__input form__input--large"/>
       </p>
       <p class="form__row">
           <label for="description">Description</label><br/>
           <input type="text" name="description" id="description" class="form__input form__input--large">
       </p>
       <p class="form__row">
           <label for="genre">Genre</label><br/>
           <select name="genre" id="genre" class="form__input form__select">
              <option>Choose genre</option>
              <?php
                for ($x = 0; $x < sizeof($genres); $x++) {
                  echo "<option value=\"";
                  echo $genres[$x];
                  echo "\">";
                  echo $genres[$x];
                  echo "</option>";
                }
              ?>
           </select>

       </p>
       <p class="form__row">
           <label for="subject">Subject</label><br/>
           <select name="subject" id="subject" class="form__input form__select">
              <option>Choose subject</option>
              <?php
                for ($x = 0; $x < sizeof($subjects); $x++) {
                  echo "<option value=\"";
                  echo $subjects[$x];
                  echo "\">";
                  echo $subjects[$x];
                  echo "</option>";
                }
              ?>

           </select>
       </p>
       <p class="form__row">
           <label for="medium">Medium</label><br/>
           <input type="text" name="medium" id="medium" class="form__input form__input--medium" />
       </p>
       <p class="form__row">
           <label for="year">Year</label><br/>
           <input type="text" name="year" id="year" class="form__input form__input--small" />
       </p>
       <p class="form__row">
           <label for="museum">Museum</label><br/>
           <input type="text" name="museum" id="museum" class="form__input form__input--medium"/>
       </p>

       <div class="form__box">
          <input type="submit" name="submit" value="submit" class="form__btn"> <input type="reset" name="reset" value="Clear Form" class="form__btn">
       </div>
   </fieldset>
</form>
</main>
<?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
</body>
</html>
