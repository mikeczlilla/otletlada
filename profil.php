<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2-es csoport";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<!doctype html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="profil.css">
</head>

<body>
  <div class="card" id="cardMain">
    <div class="card-body" id="cardB1">
      <h1>Profil</h1>
      <form action="./php/regiszt.php" method="post">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">Adatok</li>
          <li class="list-group-item"><b>Név: </b>
            <input type="text" style="width: 150px;" value="<?php
                                                            echo $_SESSION["vezeteknev"];
                                                            ?>">
            <input type="text" style="width: 150px;" value="<?php
                                                            echo $_SESSION["keresztnev"];

                                                            ?>">
          </li>
          <li class="list-group-item"><b>Felhasználónév: </b>
            <input type="text" style="width: 150px;" value="<?php
                                                            echo $_SESSION["username"];
                                                            ?>">
          </li>
          <li class="list-group-item"><b>Email cím: </b>
            <input type="email" style="width: 270px;" value="<?php
                                                              echo $_SESSION["email"];
                                                              ?>">
          </li>
          <li class="list-group-item"><b>Telefonszám: </b>
            <input type="tel" style="width: 150px;" value="<?php
                                                            echo $_SESSION["tszam"];
                                                            ?>">

          </li>
          <li class="list-group-item"><b>Lakcím: </b>
            <input type="text" style="width: 50px;" value="<?php
                                                            echo $_SESSION["iranyitoszam"];
                                                            ?>">
            <input type="text" style="width: 200px;" value="<?php
                                                            echo $_SESSION["varos"];
                                                            ?>">
            <input type="text" style="width: 250px;" value="<?php
                                                            echo $_SESSION["utca"];
                                                            ?>">
            <input type="text" style="width: 50px;" value="<?php
                                                            echo $_SESSION["haz_szam"] . ".";
                                                            ?>">
          </li>
          <li class="list-group-item"><b>Születési idő: </b>
            <input type="date" style="width: 150px;" value="<?php
                                                            echo $_SESSION["szdatum"];
                                                            ?>">

          </li>
        </ul>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Kilépés
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Biztos ki akar lépni?</h1>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                <button type="submit" formaction="index.html" class="btn btn-primary">Kilépés</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>