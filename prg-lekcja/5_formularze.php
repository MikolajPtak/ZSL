<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>początek strony</h1>
    <h3>Dane użytkownika</h3>
    <form>
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="color" name="color" placeholder=" Podaj twój ulubiony kolor"><br><br>
      <input type="submit" value="Zatwierdź dane">
    </form>
     <?php
     if (!empty($_GET['name'] && !empty($_GET['surname'] ))) { //isset($_GET['name'] sprawdza czy zmienna ma wartość
         echo <<< E
         Imię i Nazwisko: $_GET[name] $_GET[surname]
         E;  //http://localhost/ZSL/prg-lekcja/5_formularze.php?name=kk&surname= zwraca imię kk
     }else {
       echo "wypełnij wszystkie pola";
     }
    echo <<< K
    <style="background-color color=($_GET[color])">
    K;
     ?>
    <h1>Koniec strony</h1>
</body>
</html>
