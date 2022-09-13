<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nasze hobby</title>
    <link rel="stylesheet" href="hobby.css">
  </head>
  <body>
    <div class="banner">
      <h1>FORUM HOBBYSTYCZNE</h1>
    </div>
    <div class="lewy">
        <?php
        $connect=mysqli_connect('localhost','root','','forum');
        foreach ($_POST as $key => $value) {
            echo $key;
            echo " = ";
            echo $value;
            echo "<br>";
            echo "<hr>";}
        echo "Konto ",$_POST["nick"]," zostało zarejstrowane na forum hobbystycznym";




// ?>

    </div>
    <div class="prawy">
      <h3>TEMATYKA FORUM</h3>
      <ul>
        <li>Hodowla zwierząt
          <ul>
            <li>Psy</li>
            <li>Koty</li>
          </ul>
        </li>
        <li>Muzyka</li>
        <li>gry komputerowe</li>
      </ul>

    </div>

  </body>
</html>