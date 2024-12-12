<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/menu.css" />
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
    <link rel="stylesheet" href="css/enr.css" />
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
            <div class="lien ">
              <!--display flex gap 1rem comme essaie-->
              <i class="fa-solid fa-house menu-icon"></i>
              <a href="#">Accueil</a>
            </div>
            <div class="lien active">
              <i class="fa-regular fa-calendar"></i>
              <a href="#">Enregistre une dette</a>
            </div>
            <div class="lien">
              <i class="fa-regular fa-clipboard"></i>
              <a href="listerdette.html">Lister les dettes</a>
            </div>
            <div class="lien">
              <i class="fa-light fa-chart-simple"></i>
              <a href="cumul.html">Cumul des dettes</a>
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
              <a href="index.html">Déconnection</a>
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
        <div class="client">
          <div class="info-client">
            <h3>Kiné LAME</h3>
            <div class="amount remaining">Montant restant: 577,45€</div>
            <div class="amount paid">Montant payé: 1220€</div>
            <div class="amount total">Montant total du: 1500,28€</div>
          </div>
        </div>
        <div class="table">
          <div class="table-container1">
            <div class="entete"><h4>Toutes les dettes</h4></div>
            <div class="table-row1">
              <span class="date">12 février 2012</span>
              <span class="amount">20 euros</span>
            </div>
            <div class="table-row1">
              <span class="date">12 Fevrier 2022</span>
              <span class="amount">500 euros</span>
            </div>
            <div class="table-row1">
              <span class="date">12 Fevrier 2022</span>
              <span class="amount">80 euros</span>
            </div>
          </div>
          <div class="diviseur1"></div>
          <div class="my-container">
            <div class="entete">
              <h4>Nouvelle Dette</h4>
            </div>
            <div class="my-form-group">
              <div class="form-group">
                <input type="date" id="date" name="date" placeholder="Date" />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  id="montant"
                  name="montant"
                  placeholder="Montant"
                />
              </div>
            </div>
            <div class="form-group2">
              <div class="produit">
                <select name="produit" id="produit" class="my-select">
                  <option value="">Produits</option>
                  <option value="cafe">Café</option>
                  <option value="the">Thé</option>
                  <!-- Ajoutez d'autres options ici -->
                </select>
              </div>
              <div class="mon-bouton">
                <button type="submit">Ajouer</button>
              </div>
            </div>
            <div class="table-container">
              <!-- Exemple de ligne dans le tableau -->
              <div class="table-row">
                <span>Produits</span>
                <span>Café</span>
                <span>Quantité</span>
                <span>2</span>
              </div>
              <div class="table-row">
                <span>Produits</span>
                <span>Café</span>
                <span>Quantité</span>
                <span>2</span>
              </div>
              <div class="table-row">
                <span>Produits</span>
                <span>Café</span>
                <span>Quantité</span>
                <span>2</span>
              </div>
              <!-- Ajoutez plus de lignes dynamiquement via PHP si besoin -->
            </div>
            <button type="submit" class="btn-submit">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/commun.js"></script>
  </body>
</html>
