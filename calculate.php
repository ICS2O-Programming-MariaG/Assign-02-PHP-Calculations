<?php
  //Setting a constant for the conversion rate
  define(CONVERSION_RATE, 0.8);
  //Declaring other variables, using floatval to convert the string values to floats and number_format to round off values after two decimal places
  $amountUsd = floatval($_POST["money-usd"]);
  $days = floatval($_POST["days-in-ca"]);
  $amountCad = $amountUsd / CONVERSION_RATE;
  $dailyBudget = number_format($amountCad / $days, 2);
  $amountCadRounded = number_format($amountCad, 2);
  //Displaying results in web page
  echo "The total amount of money you will have for your trip in CAD is $$amountCadRounded. The amount of money budgeted for each day of the trip is $$dailyBudget.";
?>