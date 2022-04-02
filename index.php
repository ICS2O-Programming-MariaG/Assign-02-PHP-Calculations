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
    <!-- Code for Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Converting USD to CAD - Maria's Second Assignment</title>
  </head>
  <body>
    <!-- More code for Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout">
      <!-- Adding web page header using Google's MDL -->
      <header class="mdl-layout__header mdl-layout__header--scroll">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Converting from US Dollars to Canadian Dollars with User Input</span>
        </div>
      </header>
      <!-- Div for style -->
      <div id="grey">
        <!-- Printing text to the screen with PHP -->
        <?php echo "<h3>General Formulas:</h3>"; ?>
        <img src="./images/formulas.png" alt="Formulas">
      </div>
      <!-- Another div for style -->
      <div id="red">
        <?php 
          echo "<h3>Introduction:</h3>";
          echo "<p>Welcome! Use this web page to budget for your trip to Canada! Input your information below, and we will convert your USD to their equivalent in CAD. We will also calculate how much money you have budgeted for each day of your trip based on your overall total.</p>";
          echo "<h3>Your Input:</h3>";
          echo "<p>Please enter the amount of money you have budgeted for your trip below, as well as how long you plan to visit Canada.</p>"
        ?>
        <!-- Form for user input -->
        <form action="./calculate.php" method="post" target="result">
          <label for="amount-budgeted-usd">How much money have you budgeted for the trip? (In American dollars)</label><br>
          <!-- First MDL textfield -->
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="float" pattern="-?[0-9]*(\.[0-9]+)?" id="money-usd" name="money-usd">
            <label class="mdl-textfield__label" for="Amount-money-usd">Your money...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br>
          <label for="time-spent">How many days will you be staying in Canada?</label><br>
          <!-- Second MDL textfield -->
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="float" id="days-in-ca" name="days-in-ca">
            <label class="mdl-textfield__label" for="Amount-money-cad">Number of days...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br>
          <input type="submit" value="Calculate">
        </form>
      </div>
      <!-- Final div for style -->
      <div id="yellow">
        <?php echo "<h3>Results of the Calculations:</h3>"; ?>
        <!-- Iframe to display results of calculations -->
        <iframe id="result" name="result">
        </iframe>
      </div>
      <div id="blue">
        <?php 
          echo "<h3>Converting from CAD to USD</h3>";
          echo "<p>Want to convert back from Canadian dollars to US dollars? Click the button below to visit the sister web page for that conversion, calculated using Javascript.</p>";
        ?>
        <!-- Button from MDL with ripple effect. Setting button to work like a link - line of code copied from https://www.w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html -->
        <button onclick="window.location.href='https://assign-02-html-calculations.mariagoemans1.repl.co/';" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Click here!</button>
      </div>
    </div>
  </body>
</html>