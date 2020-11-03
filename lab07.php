<?php
  $oldguess = isset($_GET['guess']) ? $_GET['guess'] : '';

  if( ! isset($_GET['guess'])){
    echo ("Missing guess parameter");
  } else if( strlen($_GET['guess']) < 1 ){
    echo ("Your guess is too short");
  } else if( ! is_numeric($_GET['guess'])){
    echo ("Your guess is not a number");
  } else if( $_GET['guess'] < 42 ){
    echo ("Your guess is too low");
  } else if( $_GET['guess'] > 42 ){
    echo ("Your guess is too high");
  } else {
    echo ("Congratulations = You are right");
  }

?>

<p>Guessing game...</p>

<form method = "get">
  <p><label for = "guess">Input Guess</label>
    <input type = "text" name = "guess" size = "40" id = "guess" value = "<?= htmlentities($oldguess) ?>" />
  </p>
  <input type = "submit"/>
</form>

<pre>
  $_GET:
  <?php
    echo htmlentities(print_r($_GET, true));
   ?>

</pre>
