<?php
echo '<link rel="stylesheet" href=".\master.css">';
class Database
{
  static $conn;
  static  function connDatabase()
  {
    if (is_null(self::$conn)) {
      self::$conn = new mysqli('localhost','root','','orm');
    }
    return self::$conn;
  }
}



class Owner extends Database
{
  private $id;
  private $imie;
  private $nazwisko;
  private $PESEL;
  private $data;

  static function all()
  {
    require 'table-templates.php';
    $conn= Database::connDatabase();
    $sql ="SELECT * FROM `owners`";
    $result = $conn ->query($sql);
    echo $table_template_owner;
      foreach ($result as $id_obiektu => $obiekt_tablicy) {
        echo "<tr>";
        foreach ($obiekt_tablicy as $key => $value) {
          echo "<td>".$value."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
  static function cars($ID_owner)
  {
    require 'table-templates.php';
    $conn= Database::connDatabase();
    $sql ="SELECT * FROM `cars` WHERE id_owner='$ID_owner'";
    $result = $conn ->query($sql);
    echo $table_template_car;
      foreach ($result as $id_obiektu => $obiekt_tablicy) {
        echo "<tr>";
        foreach ($obiekt_tablicy as $key => $value) {
          echo "<td>".$value."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
    static function comps($ID_owner)
    {
      require 'table-templates.php';
      $conn= Database::connDatabase();
      $sql ="SELECT * FROM `compns` WHERE id_owner='$ID_owner'";
      $result = $conn ->query($sql);
      echo $table_template_company;
        foreach ($result as $id_obiektu => $obiekt_tablicy) {
          echo "<tr>";
          foreach ($obiekt_tablicy as $key => $value) {
            echo "<td>".$value."</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
      }
  }


class Company extends Database
    {
    private $id;
    private $id_owner;
    private $compname;
    private $NIP;
    private $adres;

    static function all()
    {
      require 'table-templates.php';
      $conn= Database::connDatabase();
      $sql ="SELECT * FROM `compns`";
      $result = $conn ->query($sql);
      echo $table_template_company;
        foreach ($result as $id_obiektu => $obiekt_tablicy) {
          echo "<tr>";

          foreach ($obiekt_tablicy as $key => $value) {
            echo "<td>".$value."</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
}
    static function cars($ID_comp)
    {
    require 'table-templates.php';
    $conn= Database::connDatabase();
    $sql ="SELECT * FROM `cars` WHERE id_comp='$ID_comp'";
    $result = $conn ->query($sql);
    echo $table_template_car;
      foreach ($result as $id_obiektu => $obiekt_tablicy) {
        echo "<tr>";
        foreach ($obiekt_tablicy as $key => $value) {
          echo "<td>".$value."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }

    static function owner($ID_owner)
    {
    require 'table-templates.php';
    $conn= Database::connDatabase();
    $sql ="SELECT * FROM `owners` WHERE id='$ID_owner'";
    $result = $conn ->query($sql);
    echo $table_template_company;
      foreach ($result as $id_obiektu => $obiekt_tablicy) {
        echo "<tr>";
        foreach ($obiekt_tablicy as $key => $value) {
          echo "<td>".$value."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }



}

class Cars extends Database
{
    private $id;
    private $id_owner;
    private $id_comp;
    private $marka;
    private $model;
    private $VIN;
    private $tablice;

    static function all()
    {
      require 'table-templates.php';
      $conn= Database::connDatabase();
      $sql ="SELECT * FROM `cars`";
      $result = $conn ->query($sql);
      echo $table_template_car;
        foreach ($result as $id_obiektu => $obiekt_tablicy) {
          echo "<tr>";

          foreach ($obiekt_tablicy as $key => $value) {
            echo "<td>".$value."</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
}
    static function comp($ID_comp)
    {
    require 'table-templates.php';
    $conn= Database::connDatabase();
    $sql ="SELECT * FROM `compns` WHERE id='$ID_comp'";
    $result = $conn ->query($sql);
    echo $table_template_company;
      foreach ($result as $id_obiektu => $obiekt_tablicy) {
        echo "<tr>";
        foreach ($obiekt_tablicy as $key => $value) {
          echo "<td>".$value."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }


    static function owner($ID_owner)
    {
    require 'table-templates.php';
    $conn= Database::connDatabase();
    $sql ="SELECT * FROM `owners` WHERE id='$ID_owner'";
    $result = $conn ->query($sql);
    echo $table_template_owner;
      foreach ($result as $id_obiektu => $obiekt_tablicy) {
        echo "<tr>";
        foreach ($obiekt_tablicy as $key => $value) {
          echo "<td>".$value."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }

}
echo "Owner <br>";
Owner::all();
echo "Owner-cars <br>";
Owner::cars(4);
echo "Owner-comps <br>";
Owner::comps(4);

echo "<br><br><br><br>";

echo "Company <br>";
Company::all();
echo "Company-cars <br>";
Company::cars(2);
echo "Company-owner <br>";
Company::owner(2);

echo "<br><br><br><br>";

echo "Car <br>";
Cars::all();
echo "Car-comp <br>";
Cars::comp(2);
echo "Car-owner <br>";
Cars::owner(2);


 ?>
