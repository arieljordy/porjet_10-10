<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indentification</title>
    <link rel="icon" href="../images_&_logo_du_site/logo_jaune.png">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../index.css">
    <script src="../index.js" defer></script>
</head>
<body>
    <section style="background: url('../images_&_logo_du_site/logo_jaune.png') center no-repeat;
    background-size:contain;width:100%;height:100vh">
        <a href="https://dixsurdix.000webhostapp.com/" style="font-size: 2rem;" title="retour à l'acceuil"><i class="bi bi-arrow-90deg-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col col-md-2"></div>
                <div class="col-12 col-md-8">
                    <form class="row gy-4 form-floating" id="formulaire_connexion" action="traitement_login.php" method="post">
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
                              <p style="color:red">Votre adresse email ou mot de passe est incorrect.</p>
                              <script defer>alert("Votre adresse email ou mot de passe est incorrect.")</script>
                              <?php
                              }
                              ?>
                              <!--<a href="https://dixsurdix.000webhostapp.com/admin/?password=forgot">mot de passe oublié?</a>-->
                            </form>
                </div>
                <div class="col col-md-2"></div>
            </div>
        </div>
    </section><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>