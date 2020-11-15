<?php

require_once 'WageCalculator.php';
require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Wage Calculator</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <script src="./main.js"></script>
 </head>
 <body>
    <div class="container mt-3">

      <form method="GET">

        <div class="form-group">
          <label for="selection">Choose between calculating hourly or monthly wage:</label>
          <select class="form-control" id="selection" name="option" onchange="chooseTitle()">
            <option value="hourly">Hourly Wage</option>
            <option value="monthly">Monthly Wage</option>
          </select>
        </div>

        <div class="form-group">
            <label for="amount_input" id="amount_box"></label>
            <input type="text" name="amount" class="form-control" id="amount_input" placeholder="Enter a numeric amount, eg. 100">
        </div>

        <div class="form-group">
            <label for="result_title" name="option"><?php echo chooseTitle(); ?></label>
            <input type="text" name="result" class="form-control" value="<?php echo calculateResult(); ?>" disabled>
        </div>

        <button type="submit" method="POST" class="btn btn-primary">Calculate</button>

      </form>

    </div>
  </body>
  <script>chooseTitle()</script>
</html>
