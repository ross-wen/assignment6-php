<!DOCTYPE HTML>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Assignment 6 - PHP" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="Ross Wen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="manifest" href="./site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Gregory-Leibniz Series</title>
  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
          <div class="mdl-layout__header-row">
              <span class="mdl-layout-title">Gregory-Leibniz Series</span>
          </div>
      </header>
      <main class="mdl-layout__content" style="margin-left:75px;">
      <?php
        $iteration = $_POST["iterations"];
        $valid = True;

        if (not(is_numeric($iteration) || $iteration > 0 || $iteration == round($iteration))) {  
          $valid = False;
          echo "Please Input Valid Number. Only positive integers are allowed.";  
        }
  
      ?> 
      <?php
      $num = (int)$_POST["iterations"];
      $deno = -1;
      $pi = 0;
      if ($valid == True) {
        for ($i = 0; $i < $num; $i++) {
          $deno = $deno + 2;
          if ($i % 2 == 0) {
              $pi = $pi + 4/$deno;
          } else {
              $pi = $pi - 4/$deno;
          }
        }
        echo "<br>";
        echo "$num iterations of the Gregory-Leibniz Series is:";
        echo $pi;
      }
        

      ?>
        <br>
        <a href="index.php">Main Page</a>
      </main>
    </div>
  </body>
</html>