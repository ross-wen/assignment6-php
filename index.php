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
        <br>
        <form  action="handler.php" method=post>
            <label for="iterations">Number of Iterations</label><br>
            <input type="text" id="iterations" name="iterations"><br>
            <input type="submit" value="Submit">
        </form>
        </main>
  
    </div>
  <body>
</html>

