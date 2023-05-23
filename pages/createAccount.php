<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/createAccount.css" />

  <title>École Hexagone - Créer un compte</title>
</head>

<body>
  <?php
  ini_set('error_prepend_string',"<div style='color:red; background-color: yellow'>")  ;
  ini_set('error_append_string',"</div>");
  
  /* $firstName = "Chris";
  echo "<h3>Bienvenue ! :)</h3>";
  echo $firstName . "\n";
  echo "test"; */
  echo $firstName;

  $peugeot206 = [
    "brand" => "Peugeot",
    "model" => "206",
    "color" => "bleue",
    "cv" => "14"
  ];

  /* echo "<pre>";
  print_r($peugeot206);
  echo "</pre>";

  echo "Ma {$peugeot206["brand"]} {$peugeot206["model"]} est {$peugeot206["color"]}.<br>";
  echo "Ma " . $peugeot206["brand"] . " " . $peugeot206["model"] . " est " . $peugeot206["color"] . ".<br>";

  foreach ($peugeot206 as $information) {
    echo "$information <br>";
  } */
  

  $result = "";
  foreach ($peugeot206 as $information) {
    $result .= $information . " ";
  }
  echo $result;

  ?>

  <!-- "Bordures" dégradées de couleur -->
  <div class="border-gradient">
    <div class="content">
      <table class="informations">
        <tr>
          <th colspan="2">Noms</th>
          <th>Âge</th>
        </tr>
        <tr>
          <td>Chris</td>
          <td>Chevalier</td>
          <td>30</td>
        </tr>
      </table>
    </div>
  </div>

  <div class="form-container">
    <h2>Créer un compte utilisateur</h2>
    <form method="POST">
      <label for="firstName" class="text-danger fw-bold my-5">Prénom</label>
      <br />
      <input type="text" name="firstName" id="firstName" placeholder="Votre prénom" class="form-control" />
      <br />
      <label for="lastName">Nom</label> <br />
      <input type="text" name="lastName" id="lastName" placeholder="Votre nom de famille" class="form-control" /><br />

      <label for="age">Âge</label> <br />
      <input type="number" name="age" id="age" min="15" max="100" style="width: 140px" placeholder="Votre âge" class="form-control" />
      <br />

      <label for="password">Mot de passe</label> <br />
      <input type="password" name="password" id="password" placeholder="Votre mot de passe" class="form-control" />
      <br />

      <label for="type">Type d'utilisateur</label> <br />
      <input type="radio" name="type" id="student" />
      <label for="student">Étudiant</label> <br />
      <input type="radio" name="type" id="trainer" />
      <label for="trainer">Formateur</label><br />
      <input type="radio" name="type" id="admin" />
      <label for="admin">Administrateur</label><br />

      <label for="hobbies">Passions</label> <br />
      <select class="form-control" name="hobbies" id="hobbies">
        <option value="sport">Sport</option>
        <option value="video-games">Jeux vidéo</option>
        <option value="art">Art</option>
      </select>
      <br />
      <br />

      <input type="submit" value="Créer" class="btn btn-primary" />
    </form>
  </div>
</body>

</html>