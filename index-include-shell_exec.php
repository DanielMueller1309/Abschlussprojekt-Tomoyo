<html>
  <body>
  <h1>Welcome</h1>
 
  <p>Dies ist eine Testwebsite zur Veranschaulichung einer PHP Code Injektion.</p>
  <p>Nachfolgende footer wird, durch ein schlecht progammiertes include mit Variable aufgerufen</p>
  <?php
    if(isset($_GET['seite'])) {
      $seite = $_GET['seite'];
    }
    else {
    $seite = "footer.php";
    }
    include($seite);
  ?>
  </body>
</html>

