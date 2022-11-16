<?php
session_start();
if(gettype($_SESSION["utilisateur"]["nom"])!="string"){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
    <link rel="icon" href="images_&_logo_du_site/logo_jaune.png">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="espace_client.css">
    <script src="inscription.js" defer></script>
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
                    <a class="nav-link active" aria-current="page" href="espace_client.php" style="color:white;">ACCEUIL</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                     BOUTIQUE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">téléphones</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="espace_client.php#chaussures">Chaussures</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="espace_client.php#vetements">Vêtements</a></li>
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
                <div class="col"><marquee><h2 style="color:#ffde59"><img src="images_&_logo_du_site/logo_jaune.png" width="50" alt="Dix sur Dix shop"> SHOP</h2></marquee></div>
                <a class="btn me-5 " type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-placement="bottom" title="<?php echo $_SESSION["utilisateur"]["nom"]; ?>">
                    <i class="bi bi-person-fill" style="font-size: 200%;color:white"></i>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h3 id="offcanvasRightLabel" class="text-capitalize"><?php if(isset($_COOKIE["nom"])){
                      echo "Bonjour, ".$_COOKIE["nom"];
                      }else{
                        echo "Bonjour, ".$_SESSION["utilisateur"]["nom"];
                      } ?></h3>
                      <button type="button" class="btn-close text-reset" id="fermer" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <hr>
                    <div class="offcanvas-body">
                         <ol style="list-style-type:none">
                            <li><a href=""><i class="bi bi-person-fill"></i></a><a href="">Mon Profil</a></li><br>
                            <li><a href="modification.php"><i class="bi bi-gear-fill"></i></a><a href="modification.php">Paramètres</a></li><br>
                            <li><a href=""><i class="bi bi-card-checklist"></i></a><a href="">Ma Carte de fidélité</a></li><br>
                            <li><a href=""><i class="bi bi-envelope-fill"></i></a><a href="">Méssages(<?php echo 0; ?>)</a></li><br>
                            <li><a href=""><i class="bi bi-bell-fill"></i></a><a href="">Notifications(<?php echo 0; ?>)</a></li><br>
                            <li><a href="deconnexion.php"><i class="bi bi-power"></i></a><a href="deconnexion.php">Déconnexion</a></li>
                         </ol>      
                    </div>
                </div>
                <br>
                <a href="panier.php" class="btn me-1 position-relative" title="mon panier"><i class="bi bi-cart4" style="font-size: 200%;color:white">       
                </i><span class="badge position-absolute top-0 start-100 translate-middle bg-secondary"><?php echo 10; ?></span>
                </a>
              </div>
            </div>
          </nav>
    </header><br><br><br>
    <main><br><br>
<?php
if(htmlspecialchars($_GET["err"]) === "email"){
        echo '
            <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
                <b>Accès refusé:</b> L\'adresse email '.htmlspecialchars($_GET["email"]).' existe déjà et ne peut pas être dupliquer, veuillez réessayer.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
}

if(htmlspecialchars($_GET["err"])==="nom"){
    echo '
    <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
  <b>Accès refusé:</b> Le nom ne doit pas contenir des caractères spéciaux ou encore des espaces en début de chaîne!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
}

if(htmlspecialchars($_GET["validation"])==="email"){
    echo '
        <div class="alert alert-info alert-dismissible fade show mx-5" role="alert">
            <b>En attente:</b> Un mail de vérification a été envoyé à l\'adresse '.$_SESSION["email"].' veuillez consulter votre courrier électronique ou vos spam
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ';
}

if(htmlspecialchars($_GET["lien"])==="click"){
    echo'
        <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
            <b>accès refusé:</b> Ce lien a déjà été cliqué et par conséquent l\'email ne peut être modifié avec le même lien!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ';
}

if(htmlspecialchars($_GET["err"])==="password"){
    echo'
        <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
            <b>mot de passe non modifié:</b> Les mots de passe sont différents!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ';
}

?>
    <div class="container-fluid"><br>
        <div class="row" style="background: url('images_&_logo_du_site/logo_jaune.png') center no-repeat;
            background-size:contain;width:100">
            <form class="row g-3" action="traitement_modification.php" method="post">
                <h3>Votre e-mail</h3>
                <div class="col-md-4">
                    <label for="vue_email" class="form-label"><b>Adresse e-mail actuelle:</b></label>
                    <input type="text" readonly class="form-control is-valid d-flex" name="vue_email" value="<?php echo $_SESSION["utilisateur"]["email"];
                    ?>" maxlength="50" style="cursor:not-allowed">
                </div>
                <div class="col-md-4">
                    <label for="nouvel_email" class="form-label"><b>Nouvel e-mail:</b></label>
                    <input type="email" class="form-control d-flex" name="nouvel_email" placeholder="exemple@gmail.com" maxlength="50" aria-describedby="validationServer03Feedback" required>
                    <div class="valid-feedback">
                        Cela semble correcte!
                    </div>     
                </div>
                <div class="col-md-4 py-4">
                        <input class="btn btn-warning d-flex" type="submit" name="modifier" value="Modifier">
                </div>
            </form>
            <form class="row g-3" action="traitement_modification.php" method="post" class="row g-3">
                <h3>Votre Nom</h3>
                <div class="col-md-4">
                    <label for="vue_nom" class="form-label"><b>Votre Nom:</b></label>
                    <input type="text" readonly class="form-control is-valid d-flex" name="vue_nom" value="<?php echo $_SESSION["utilisateur"]["nom"];
                    ?>" maxlength="50" style="cursor:not-allowed">
                </div>
                <div class="col-md-4">
                    <label for="nouveau_nom" class="form-label"><b>Nouveau nom:</b></label>
                    <input type="text" class="form-control d-flex" name="nouveau_nom" placeholder="John Doe" maxlength="50" aria-describedby="validationServer03Feedback" required>
                    <div class="valid-feedback">
                        Cela semble correcte!
                    </div>     
                </div>
                <div class="col-md-4 py-4">
                        <input class="btn btn-warning d-flex" type="submit" name="modifier" value="Modifier">
                </div>
            </form>
            <form action="traitement_modification.php" method="post" class="row g-3">
                <h3>Votre Mot de passe</h3>
                <div class="col-md-4">
                    <label for="nouveau_mdp" class="form-label"><b>Nouveau mot de passe:</b></label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" minlength="8" maxlength="25" name="nouveau_mdp" id="mdp" placeholder="Au moins 8 caractères" required><span class="input-group-text" style="width:45px"><i class="" id="eye"></i></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="nouveau_mdp_retype" class="form-label"><b>Réécrire nouveau mot de passe :</b></label>
                    <input type="password" class="form-control" minlength="8" maxlength="25" name="nouveau_mdp_retype" id="mdp2" placeholder="Confirmer le mot de passe" required>
                </div>
                <div class="col-md-4 py-4">
                        <button class="btn btn-warning d-flex" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </div><br>
    <!-- <a href="" style="color:red;font-weight:bolder">Supprimer mon Compte</a> -->
    <form action="traitement_modification.php" method="post">
        <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Supprimer mon Compte
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment Supprimer votre Compte?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    En supprimant ce compte vous perdez toutes informations liées au site, <br>
                    Veuillez lire ceci attentivement
                    Vous êtes sur le point de nous demander de fermer de manière définitive votre compte Dix sur Dix et de supprimer vos données. Une fois votre compte fermé, tous les produits et services auxquels vous accédez par le biais de votre compte ne seront plus disponibles, sur n'importe quel site de vente Dix sur Dix à l'échelle mondiale. Par exemple, votre compte sera également fermé sur <span style="color:red">DixsurDix.com</span>  et sur tous les autres sites mondiaux sur lesquels vous accédez aux services et produits proposés avec les mêmes informations d'identification.

                    Si vous avez chargé votre propre contenu dans l'un de nos services (par exemple, des photos ou des vidéos sur <span style="color:red">Dix sur Dix</span> Photos), vous pouvez le télécharger avant de fermer votre compte.

                    Si vous donnez suite à cette demande, vous ne pourrez pas accéder aux produits et services associés à votre compte fermé, notamment :
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <input type="submit" class="btn btn-danger" value="Oui" name="supprimer">
                </div>
            </div>
        </div>
        </div>
    </form><br><br>
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
							<li><i class="bi bi-caret-right"></i><a href="l"style="color:white">About</a></li>
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