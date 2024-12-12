<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/notif.css" />
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
              <a href="cumul.html">Cumul des dettes</a>
            </div>
            <div class="lien active">
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
        <div class="my-title">
          <h2 class="section-title">
            Listes des clients dont le délai de paiement est échu
          </h2>
        </div>
        <table>
          <thead>
            <tr>
              <th><input type="checkbox" /></th>
              <th>NOM</th>
              <th>PRENOM</th>
              <th>TEL</th>
              <th>Location</th>
              <th>Montant</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Fatou</td>
              <td>Kassé</td>
              <td>771234567</td>
              <td>Sénégal</td>
              <td>50000</td>
              <td><button class="btn-send">Envoyer</button></td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Amina</td>
              <td>SY</td>
              <td>771234567</td>
              <td>Burkina Faso</td>
              <td>50000</td>
              <td><button class="btn-send">Envoyer</button></td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Faty</td>
              <td>Osseyni</td>
              <td>771234567</td>
              <td>Congo</td>
              <td>50000</td>
              <td><button class="btn-send">Envoyer</button></td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Soda</td>
              <td>Seye</td>
              <td>771234567</td>
              <td>Sénégal</td>
              <td>50000</td>
              <td><button class="btn-send">Envoyer</button></td>
            </tr>
          </tbody>
        </table>
        <div>
          <button type="submit" class="my_button">Envoyer</button>
        </div>
      </div>
    </div>
  </body>
</html>
