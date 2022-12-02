<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2>Witamy</h2><br>
    Rejstracja:<br>
    <form  action="./script/register.php" method="post">
      <input type="text" name="login" placeholder="Email"><br>
      <input type="text" name="loginrep" placeholder="Powtórz Email"><br><br>
      <input type="text" name="pass"  placeholder="Hasło"><br> <!--dodac type password potem -->
      <input type="text" name="passrep" placeholder="Powtórz Hasło"><br><br>
      <input type="submit" value="Zatwierdź"><br>
    </form>

    Masz konto? <a href="index.php">Zaloguj się</a>
  </body>
</html>
