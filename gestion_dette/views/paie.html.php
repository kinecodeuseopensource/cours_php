<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/paie.css" />
    <link rel="stylesheet" href="../css/menu.css" />
    <link rel="stylesheet" href="../css/commun.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="main">
      <div class="left">
        <!--padding qui fera que tout les élèment de la barre bleue ait le même padding-->
        <div class="menu-top">
          <!--display flex-->
          <div class="profile">
            <!--width 46% avec padding-->
            <img src="../images/smiler avec lunette.png" alt="" />
          </div>
          <div class="who">
            <!--width 46% avec padding-->
            <h5>Product Manager</h5>
            <h4>Kiné Lame</h4>
          </div>
        </div>
        <div class="division"></div>
        <!--diviseur :tait blanc -->
        <div class="menu-milieu">
          <div class="main-milieu">
            <h6>MAIN</h6>
          </div>
          <div class="navbar">
            <div class="lien">
              <!--display flex gap 1rem comme essaie-->
              <i class="fa-solid fa-house menu-icon"></i>
              <a href="#">Accueil</a>
            </div>
            <div class="lien">
              <i class="fa-regular fa-calendar"></i>
              <a href="enregistrerdette.html">Enregistre une dette</a>
            </div>
            <div class="lien">
              <i class="fa-regular fa-clipboard"></i>
              <a href="listerdette.html">Lister les dettes</a>
            </div>
            <div class="lien">
              <i class="fa-light fa-chart-simple"></i>
              <a href="cumul.html active">Cumul des dettes</a>
            </div>
            <div class="lien">
              <i class="fa-solid fa-bell"></i>
              <a href="notif.html">Notifications</a>
            </div>
          </div>
        </div>
        <div class="division"></div>
        <div class="menu-bottom">
          <div class="navbar">
            <h6>Settings</h6>
            <div class="lien settings1">
              <i class="fa-solid fa-gear"></i>
              <a href="#">Settings</a>
            </div>
            <div class="lien">
              <i class="fa-regular fa-circle-question"></i>
              <a href="#">Help</a>
            </div>
            <div class="lien sortie">
              <i class="fa-regular fa-circle-left"></i>
              <a href="#">Déconnection</a>
            </div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="recherche">
          <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
          <input type="text" placeholder="Rechercher un numero" />
        </div>
        <div class="haut"> <!--display flex pour que les colonnes soient alignés-->
          <div class="colone1"><!--gap pour avoir le même espace-->
            <div class="ligne1"><!--display flex-->
              <label for="date">DATE</label>
              <input type="date" name="date" id="date" />
            </div>
            <div class="ligne1">
                <label for="montant">MONTANT</label>
                <input type="number" name="montant" id="montant" />
              </div>
          </div>
          <div class="colone1">
            <div class="ligne1">
              <label for="verse">Montant versé</label>
              <input type="number" name="verse" id="verse" />
            </div>
            <div class="ligne1">
                <label for="restant">Montant restant</label>
                <input type="number" name="restant" id="restant" />
              </div>
          </div>
        </div>
        <div class="bas">
            <!-- Section des paiements -->
            <div class="paiements">
              <h2>PAIEMENTS</h2>
              <table>
                <thead>
                  <tr>
                    <th>DATE</th>
                    <th>Mont versé</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>11/12/24</td>
                    <td>5000</td>
                  </tr>
                  <!-- Ajouter d'autres lignes si nécessaire -->
                </tbody>
              </table>
            </div>
        
            <!-- Section d'enregistrement -->
            <div class="enregistrement">
              <h2>ENREGISTREMENT</h2>
              <form method="POST" action="process.php">
                <label for="montant">MONTANT</label>
                <input type="number" id="montant" name="montant" placeholder="Entrer le montant" required>
                <div class="buttons">
                  <button type="reset">ANNULER</button>
                  <button type="submit">OK</button>
                </div>
              </form>
            </div>
          </div>
        
      </div>
    </div>
  </body>
</html>
