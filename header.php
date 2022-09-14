<header>
        <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
            
            <div class="container-fluid">
                
                <a class="navbar-brand" href="#"><img src="images_&_logo_du_site/logo_jaune.png" alt="10/10" width="100"></a>
                
              <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://youtube.com/" target="_blank"  style="color: white">ACCEUIL</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: white">
                     BOUTIQUE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">téléphones</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#chaussures">Chaussures</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#vêtements">vêtements</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"  style="color: white">À PROPOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"  style="color: white">CONTACTS</a>
                  </li>                  
                </ul>
                <div class="col"><marquee><h2 style="color:white">10/10 SHOP</h2></marquee></div>
                <!-- <form class="d-flex">
                  <input class="form-control me-1" type="search" placeholder="votre recherche" aria-label="Search">
                  <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                </form> -->
                <a class="btn me-5 " type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-placement="bottom" title="s'identifier">
                    <i class="bi bi-person-fill" style="font-size: 200%;color:red"></i>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h3 id="offcanvasRightLabel">S'identifier</h3>
                      <button type="button" class="btn-close text-reset" id="fermer" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="col-12">
                            <form class="row gy-4 form-floating" action="submit_contact.php" method="post">
                                <div class="col-12">
                                    <label for="email" class="form-label"> <b> votre adresse e-mail:</b>
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="exemple@gmail.com" maxlength="50" required>
                                </div>
                                
                              
                              <div class="col-12" id="conteneur">
                                <label for="password" class="form-label"> <b>votre mot de passe 20 caractères au maximum</b> 
                                </label>
                                <input type="password" name="password" id="mdp" class="form-control" minlength="8" maxlength="20">
                                <i class="bi bi-eye-fill" id="eye"></i>
                              </div>
                              <div class="col-6">
                                <input type="submit" class="btn btn-success w-100" name="soumettre" value="connexion">
                              </div>
                              <div class="col-6">
                                <input type="reset" class="btn btn-danger w-100"value="tout effacer">
                              </div>
                              <p style="text-align:justify;">En passant votre commande, <a href="">les Conditions générales de vente de dix sur dix.</a> vous acceptez  Veuillez consulter <a href="">notre Notice Protection de vos informations personnelles,</a> notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</p>
                              <i class="bi bi-caret-right-fill"><a href=""style="text-decoration:none;">Avez-vous besoin d’aide ?</a></i>
                              <hr>
                              <a class="nav-link disabled" href="espace_client.php" tabindex="-1" aria-disabled="true">Nouveau chez dix sur dix ?</a>
                              <a type="button" class="btn btn-outline-primary">Créer votre compte dix sur dix gratuitement</a>

                            </form>
                        </div>       
                    </div>
                </div>
                <br>
                <a class="btn me-1 position-relative" type="button" aria-current="page" data-bs-toggle="offcanvas" aria-controls="offcanvasRight" data-bs-placement="bottom" data-bs-target="#panier" title="mon panier"><i class="bi bi-cart4" style="font-size: 200%;color:white">       
                </i><span class="badge position-absolute top-0 start-100 translate-middle bg-secondary">0</span>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="panier" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h3 id="offcanvasRightLabel">Mon panier</h3>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    ...
                  </div>
                </div>             
              </div>
            </div>
          </nav>
    </header>
