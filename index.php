<!DOCTYPE html>
<html lang="FR-fr">
<!---Daouda BA / Promo 2 Sonatel Academy-->
<!---PROJET de création d'un Calculatrice avec HTML/CSS/PHP-->

<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Calculatrice</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <!---Importation de Google Fonts pour les fonts-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

  <h2>Calculatrice</h2>

  <div class="container">
    <form action="index.php" method="post">
      <label for="nbr1">Nombre 1</label>
      <input type="text" id="nbr1" name="nombre1" placeholder="Entrer un chiffre..">

      <label for="nbr2">Nombre 2</label>
      <input type="text" id="nbr2" name="nombre2" placeholder="Entrer un chiffre..">

      <label for="operateur">Opérateur</label>
      <select id="operateur" name="operateur" value="Choisissez un opérateur">
        <option value="addition">Addition</option>
        <option value="soustraction">Soustraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
        <option value="modulo">Modulo</option>
      </select>
  
      <input type="submit" name="validation" value="CALCULER">
    </form>

    <div class="copy"><p>Copyright 💡 | Daooda-BA 💻 | 2019</p></div>

    <?php
        $num1 =  $_POST['nombre1'];
        $num2 =  $_POST['nombre2'];

        if(isset($_POST['validation'])){
        if ( is_numeric ($num1) && is_numeric ($num2)) {
          switch($_POST['operateur'])
          {
              case "addition":
                  $add = $num1 + $num2;
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Le résultat est: ".$add."</h3>";
                  break;
              case "soustraction":
                  $sou = $num1 - $num2;
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Le résultat est: ".$sou."</h3>";
                  break;
              case "multiplication":
                  $mul = $num1 * $num2;
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Le résultat est: ".$mul."</h3>";
                  break;
              case "division":
                  $div = $num1 / $num2;
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Le résultat est: ".$div."</h3>";
                  break;
              case "modulo":
                  $mod = $num1 % $num2;
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Le résultat est: ".$mod."</h3>";
                  break;
          }
       }
       elseif( is_string ($num1) && is_string ($num2) ){
          echo "<hr style='margin-top:8%;'><h3 style='color:red; font-size: 35px; margin-left:4%;'>Veuillez saisir un chiffre SVP !</h3>";
       }
      }
    ?>

  </div>

</body>
</html>