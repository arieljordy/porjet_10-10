<?php
session_start();
if(empty($_SESSION["administrateur"]["nom"])){
    header("Location:index.php");
}else{
    // setcookie(
    //     "nom",
    //     $_SESSION["administrateur"]["nom"],
    //     time() + 365*24*3600
    // );   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'acceuil Dix sur Dix</title>
    <link rel="icon" href="../../images_&_logo_du_site/logo_jaune.png">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../espace_client.css">
    <!--<script src="../espace_client.js" defer></script>-->
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #232222;">
            
            <div class="container-fluid">
                
                <a class="navbar-brand" href=""><img src="../../images_&_logo_du_site/logo_jaune.png" alt="10/10" width="100"></a>
                
              <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-1">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="" style="color:white;">ACCEUIL</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                     BOUTIQUE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Téléphones</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="../acceuil.php#chaussures">Chaussures</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="../acceuil.php#vetements">Vêtements</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:white;" href="">À Propos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"  style="color: white">
                      En ligne
                    </a>
                  </li>                  
                </ul>
                <div class="col"><marquee><h2 style="color:#ffde59"><img src="../../images_&_logo_du_site/logo_jaune.png" width="50" alt="Dix sur Dix shop"> SHOP</h2></marquee></div>
                <a class="btn me-5" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-placement="bottom" title="<?php echo $_SESSION["administrateur"]["nom"]; ?>">
                    <i class="bi bi-person-fill" style="font-size: 200%;color:white"></i>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h3 id="offcanvasRightLabel" class="text-capitalize"><?php if(isset($_COOKIE["nom"])){
                        echo "Bonjour, ".$_COOKIE["nom"];
                      }else{
                        echo "Bonjour, ".$_SESSION["administrateur"]["nom"];
                      }
                      ?></h3>
                      <button type="button" class="btn-close text-reset" id="fermer" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <hr>
                    <div class="offcanvas-body">
                         <ol style="list-style-type:none">
                         <li><a href=""><i class="bi bi-person-fill"></i></a><a href="">Mon Profil</a></li><br>
                          <li><a href="modification.php"><i class="bi bi-gear-fill"></i></a><a href="modification.php">Paramètres</a></li><br>
                          <li><a href=""><i class="bi bi-envelope-fill"></i></a><a href="">Méssages(<?php echo 0; ?>)</a></li><br>
                          <li><a href=""><i class="bi bi-bell-fill"></i></a><a href="">Notifications(<?php echo 0; ?>)</a></li><br>
                          <li><a href="deconnexion.php"><i class="bi bi-power"></i></a><a href="deconnexion.php">Déconnexion</a></li>
                         </ol>      
                    </div>
                </div>
                <br>
              </div>
            </div>
          </nav>
    </header>
    <br><br><br>
    <main>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br>
                    <h3 style="text-align:center">
                        Ajouter uniquement les chaussures Dames.
                    </h3>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajouter">
                        Ajouter
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br>
                    <h3 style="text-align:center">
                        Modifier uniquement les chaussures Dames.
                    </h3>
                    <a class="btn btn-warning" href="" role="button">Modifier</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br>
                    <h3 style="text-align:center">
                        Supprimer une chaussure pour Dame.
                    </h3>
                    <a class="btn btn-danger" href="" role="button">Supprimer</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ajouter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Remplir ce formulaire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="traitement.php" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="image" class="form-label">Choisir l'image en format <b>png, jpeg, jpg ou gif et de taille max 3Mo</b></label>
                      <input class="form-control" type="file" name="image" required>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Saisir le nom</label>                
                        <input type="text" class="form-control" placeholder="nom de l'article" name="nom" maxlength="20" required>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="taille" class="form-label">La taille (obligatoire)</label>                
                        <select class="form-select" name="taille" required>
                            <option></option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                            <option>44</option>
                            <option>45</option>
                            <option>46</option>
                            <option>47</option>
                            <option>48</option>
                            <option>49</option>
                            <option>50</option>
                        </select>                    
                    </div>
                    <br>
                    <label for="prix" class="form-label">Le Prix</label>
                    <div class="input-group mb-3">
                      <input type="number" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2" name="prix" required>
                      <span class="input-group-text" id="basic-addon2">fcfa</span>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="quantite" class="form-label">La quantité</label>
                        <input type="number" class="form-control" placeholder="La quantité" aria-label="Recipient's username" aria-describedby="basic-addon2" name="quantite" required>
                    </div>
                    <label for="description">Description (facultative)</label>
                    <div class="row g-2">
                      <div class="col-md">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="description" name="description" maxlength="150">
                        </div>
                      </div>
                     </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            </div>
                             <div class="col">
                            </div>
                            <div class="col d-flex">
                                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Fermer</button>
                                <input class="btn btn-success" type="submit" value="Valider">
                            </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </main>
    <!--lien cdn du popper en javaScript   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>