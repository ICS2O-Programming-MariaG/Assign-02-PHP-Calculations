<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calculating dollar conversion with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Converting USD to CAD - Maria's Second Assignment</title>
  </head>
  <body>
    <!-- Printing text to the screen with PHP -->
    <?php 
      echo "<h1>Converting between Canadian and US Dollars with User Input</h1>";
      echo "<h3>General Formulas:</h3>";
    ?>
    <img src="./images/formulas.png" alt="Formulas">
    <?php 
      echo "<h3>Introduction:</h3>";
      echo "<p>Welcome! Use this web page to budget for your trip to Canada! Input your information below, and we will convert your USD to their equivalent in CAD. We will also calculate how much money you have budgeted for each day of your trip based on your overall total.</p>";
      echo "<h3>Your Input:</h3>";
      echo "<p>Please enter the amount of money you have budgeted for your trip below, as well as how long you plan to visit Canada.</p>"
    ?>
    <!-- Form for user input -->
    <form action="./calculate.php" method="post" target="result">
      <label for="amount-budgeted-usd">How much money have you budgeted for the trip? (In American dollars)</label>
      <input type="number" id="money-usd" placeholder="Your money..." name="money-usd"><br><br>
      <label for="time-spent">How many days will you be staying in the United States?</label>
      <input type="number" id="days-in-ca" placeholder="Number of days..." name="days-in-ca"><br><br>
      <input type="submit" value="Calculate">
    </form>
    <h3>Results of the Calculations:</h3>
    <!-- Iframe to display results of calculations -->
    <iframe id="result" name="result">
    </iframe>
  </body>
</html>