<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'acceuil Dix sur Dix</title>
    <link rel="icon" href="images_&_logo_du_site/logo_jaune.png">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="espace_client.css">
    <script src="index.js" defer></script>
</head>
<body>   
    <header id="header">
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #232222;">
            
            <div class="container-fluid">
                
                <a class="navbar-brand" href=""><img src="images_&_logo_du_site/logo_jaune.png" alt="10/10" width="100"></a>
                
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
                      <li><a class="dropdown-item" href="#chaussures">Chaussures</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#vetements">Vêtements</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white;">À PROPOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:white;" href="inscription.php">S'INSCRIRE</a>
                  </li>
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"  style="color: white">-->
                  <!--    Déconnecté-->
                  <!--  </a>-->
                  <!--</li>                  -->
                </ul>
                <div class="col"><marquee><h2 style="color:#ffde59"><img src="images_&_logo_du_site/logo_jaune.png" width="50" alt="Dix sur Dix shop"> SHOP</h2></marquee></div>
                <a class="btn me-5 " type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-placement="bottom" title="s'identifier">
                    <i class="bi bi-person-fill" style="font-size: 200%;color:white"></i>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h3 id="offcanvasRightLabel">S'identifier</h3>
                      <button type="button" class="btn-close text-reset" id="fermer" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      
                      <?php
                        if(htmlspecialchars($_GET["password"]) === "forgot"){
                        ?>
                        <form class="row gy-4 form-floating" id="formulaire_connexion" action="traitement_connexion.php?password=forgot" method="post">
                            <div class="col-12">
                                <label for="email" class="form-label"> <b> votre adresse e-mail:</b>
                                </label>
                                <input type="email" name="email" id="email" class="form-control is-invalid" placeholder="exemple@gmail.com" maxlength="50" required>
                                <div class="valid-feedback">
                                  Cela semble correcte!
                                </div> 
                            </div>
                            <div class="col-6">
                                <input type="submit" class="btn btn-success w-100" name="soumettre" id="soumettre" value="continuer">
                             </div>
                             <div class="col-6">
                                <input type="reset" class="btn btn-danger w-100" onclick="eyeOff()"  value="effacer">
                             </div>
                             <p>Vous recevrez un nouveau mot de passe par mail à cette adresse qu'il vous faudra saisir.</p>
                        </form>
                        <?php
                        }else{
                        ?>
                      <div class="spinner-border d-none" id="spinner" style="color:#232222;width:200px;height:200px;margin:20%" role="status">
                        <span class="visually-hidden"></span>
                      </div>

                        <div class="col-12">
                            <form class="row gy-4 form-floating" id="formulaire_connexion" action="traitement_connexion.php" method="post">
                                <div class="col-12">
                                    <label for="email" class="form-label"> <b> votre adresse e-mail:</b>
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control is-invalid" placeholder="exemple@gmail.com" maxlength="50" required>
                                    <div class="valid-feedback">
                                      Cela semble correcte!
                                    </div> 
                                </div>
                                <div class="col-12 position-relative">
                                  <label for="mdp" class="form-label"><b>votre mot de passe entre [8-25] caractères:</b></label>
                                  <div class="input-group has-validation">        
                                    <input type="password" class="form-control" name="mdp" id="mdp" minlength="8" maxlength="25" required>
                                    <span class="input-group-text" style="width:45px"><i class=""  id="eye"></i></span>
                                  </div>
                                </div>
                              <div class="col-6">
                                <input type="submit" class="btn btn-success w-100" name="soumettre" id="soumettre" value="connexion">
                              </div>
                              <div class="col-6">
                                <input type="reset" class="btn btn-danger w-100" onclick="eyeOff()"  value="effacer">
                              </div>
                                <?php
                                $err=htmlspecialchars($_GET["err"]);
                                ?>
                              <?php
                              if($err=="already"){
                              ?>
                              <p style="color:red"><?php echo "votre adresse email ou mot de passe est incorrect."; ?></p>
                              <?php
                              }
                              ?>
                              <a href="https://dixsurdix.000webhostapp.com/?password=forgot">mot de passe oublié?</a>
                              
                              <p style="text-align:justify;">En passant votre commande, vous acceptez <a href="">les Conditions générales de vente de Dix sur Dix.</a>  Veuillez consulter <a href="">notre Notice Protection de vos informations personnelles,</a> notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</p>
                              <i class="bi bi-caret-right-fill"><a href="" style="text-decoration:none;cursor:help">Avez-vous besoin d’aide ?</a></i>
                              <hr>
                              <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Nouveau chez Dix sur Dix ?</a>
                              <a type="button" class="btn btn-outline-primary" href="inscription.php" id="inscription">Créer votre compte Dix sur Dix gratuitement</a>
                            </form>
                        </div>
                    <?php
                        }
                      ?> 
                    </div>
                </div>
                <br>
                <a href="panier.php" class="btn me-1 position-relative" title="mon panier"><i class="bi bi-cart4" style="font-size: 200%;color:white">       
                </i><span class="badge position-absolute top-0 start-100 translate-middle bg-secondary" id="article">10</span>
                </a>
                <!--<div class="offcanvas offcanvas-end" tabindex="-1" id="panier" aria-labelledby="offcanvasRightLabel">-->
                <!--  <div class="offcanvas-header">-->
                <!--    <h3 id="offcanvasRightLabel">Mon panier</h3>-->
                <!--    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
                <!--  </div>-->
                <!--  <div class="offcanvas-body">-->
                <!--    <table class="table">-->
                <!--      <thead>-->
                <!--          <div style="margin-left:5%;">-->
                <!--            <span><b>#</b></span>-->
                <!--            <span class="mx-4"><b>Article</b></span>-->
                <!--            <span class="mx-4"><b>Prix</b></span>-->
                <!--            <span class="mx-4"></span>-->
                <!--          </div>-->
                <!--        <hr>-->
                <!--      </thead>-->
                <!--      <tbody id="table">-->
                <!--      </tbody>-->
                <!--      </table>-->
                <!--  </div>-->
                <!--</div>             -->
              </div>
            </div>
          </nav>
    </header>
    <br><br><br>
    <main><br><br>
    <?php
if($err=="already"){
    echo '
    <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
  <b>Accès refusé:</b> votre adresse email ou mot de passe est incorrect, veuillez réessayer.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
}
if(htmlspecialchars($_GET["lien"])==="click"){
    echo '
    <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
  <b>Accès refusé:</b> Ce lien est déjà hors service car vous avez reçu vos nouveaux identifiants de connexion.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
}
?>
        <section style="background: url('images_&_logo_du_site/fond.jpg') center no-repeat;
            background-size:contain;width:100">
          <div class="container-fluid text-start"><br><br>
            <div class="row align-items-center" >
              <div class="col">
                <h3 class="fw-bolder" id="h3_defilant"></h3>
                <p class="fw-bolder" id="paragraphe_defilant"></p>
              </div>
              <div class="col">
                <img src="images_&_logo_du_site/logo_jaune.png" alt="logo 10/10" width="100%">
              </div>
                <div class="col">
                </div>
            </div>
          </div>
        </section><br><br>
        <section id="chaussures">
            <div class="container-fluid">
              <div class="row gx-0">
                  <div class="col-12 col-md-6">
                    <a href=""><img src="images_&_logo_du_site/chaussure_homme.png" alt="catégorie homme" class="w-100" id="chaussure_homme"></a>
                  </div>
                  <div class="col-12 col-md-6">
                    <a href=""><img src="images_&_logo_du_site/chaussure_femme.png" alt="catégorie femme" class="w-100"  id="chaussure_femme"></a>
                  </div>
              </div>
            </div>
        </section><br><br>
        <section id="vetements">
            <div class="container-fluid">
              <div class="row gx-0">
                  <div class="col-12 col-md-6">
                    <a href=""><img src="images_&_logo_du_site/vetement_homme.jpg" alt="catégorie homme" class="w-100" id="vetement_homme"></a>
                  </div>
                  <div class="col-12 col-md-6">
                    <a href=""><img src="images_&_logo_du_site/vetement_femme.jpg" alt="catégorie femme" class="w-100"  id="vetement_femme"></a>
                  </div>
              </div>
            </div>
        </section>
        
    </main>
<!-- footer -->
	<footer class="container-fluid">
	<div style="background-color: #232222;">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title" style="color:white">À propos</h2>
						<p style="color:white">Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div>
						<h2 class="widget-title" style="color:white">Contact</h2>
						<ul style="color:white;list-style-type:none">
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>DixsurDix@info.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title" style="color:white">Pages</h2>
						<ul style="color:white;list-style-type:none">
							<li><i class="bi bi-caret-right"></i><a href="espace_client.php"style="color:white">Home</a></li>
							<li><i class="bi bi-caret-right"></i><a href=""style="color:white">About</a></li>
							<li><i class="bi bi-caret-right"></i><a href=""style="color:white">Shop</a></li>
							<li><i class="bi bi-caret-right"></i><a href=""style="color:white">News</a></li>
							<li><i class="bi bi-caret-right"></i><a href=""style="color:white">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title" style="color:white">Nous écrire</h2>
						<p style="color:white">Votre avis est toujours important pour nous.</p>
						<form action="" class="form-control d-flex">
							<textarea class="form-control" placeholder="un commentaire" rows="3"></textarea>
							<button type="submit" class="btn" style="font-size:2rem"><i class="bi bi-telegram"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!--</div>-->
	<hr>
	          <div class="row align-items-center">
              <div class="col"></div>
              <div class="col">
                  <img src="images_&_logo_du_site/logo_jaune.png" alt="logo 10/10" width="100">
              </div>
              <div class="col"></div>
          </div><br>
	<!-- copyright -->
	<div style="background-color: #232222;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p style="color:white">&copy; <script>document.write(new Date().getFullYear());</script> Dix sur Dix | Tous droits réservés</p>
				</div>
				<div class="col-lg-6 align-items-end col-md-12">
					<div>
						<ul class="d-flex" style="list-style-type:none">
							<li class=""><a href="https://www.facebook.com/profile.php?id=100086357720551" target="_blank" style="color:white"><i class="bi bi-facebook" style="color:#0984ee;font-size: 1.3rem;"></i></a></li>
							<li class="px-2"><a href="" target="_blank" style="color:white"><i class="fab fa-twitter"></i></a></li>
							<li class="px-2"><a href="" target="_blank" style="color:white"><i class="bi bi-twitter" style="color:#00acee;font-size: 1.3rem;"></i></a></li>
							<li class="px-2"><a href="" target="_blank" style="color:white"><i class="bi bi-linkedin" style="color:#0077b5;font-size: 1.3rem;"></i></a></li>
							<li class="px-2"><a href="" target="_blank" style="color:white"><i class="bi bi-instagram" style="color:#cd486b;font-size: 1.3rem;"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
	<!-- end copyright -->
	<!-- end footer -->
    <!--lien cdn du popper en javaScript   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
