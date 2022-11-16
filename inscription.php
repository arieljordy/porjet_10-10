<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'inscription Dix sur Dix</title>
    <link rel="icon" href="images_&_logo_du_site/logo_jaune.png">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="inscription.css">
    <script src="inscription.js" defer></script>
</head>
<body>
    <section style="background: url('images_&_logo_du_site/logo_jaune.png') center no-repeat;
    background-size:contain;width:100%;height:100vh">
<?php
$err=htmlspecialchars($_GET["err"]);
$message = htmlspecialchars($_GET["message"]);
if($err==="double"){
    echo '
    <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
  <b>Accès refusé:</b> L\'adresse '.htmlspecialchars($_GET["email"]).' existe déjà sur ce site et ne peut pas être dupliquer!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
}else if($err==="nom"){
    echo '
    <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
  <b>Accès refusé:</b> Le nom ne doit pas contenir des caractères spéciaux ou encore des espaces en début de chaîne!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
}else if($err==="password"){
    echo '
    <div class="alert alert-dismissible fade show mx-5" role="alert" style="background-color:#ffde59">
  <b>Accès refusé:</b> Les mots de passe sont différents!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
}
?>
        <div class="container-fluid text-start">
            <a href="https://dixsurdix.000webhostapp.com/" style="font-size: 2rem;" title="retour à l'acceuil"><i class="bi bi-arrow-90deg-left"></i></a>
            <div class="row align-items-center">
<?php
if($message != "code"){
?>
<form class="row g-3" action="traitement_inscription.php" method="post">
    <div class="col-md-6">
      <label for="nom" class="form-label"><b>Nom d'utilisateur:</b></label>
      <input type="text" class="form-control is-invalid" name="nom" id="nom" placeholder="Nom prénom" maxlength="20" required>
      <div class="valid-feedback">
        Cela semble correcte!
      </div>
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label"><b>Email:</b></label>
      <input type="email" class="form-control is-invalid" name="email" id="email" placeholder="exemple@gmail.com" maxlength="50" aria-describedby="validationServer03Feedback" required>
      <div class="valid-feedback">
        Cela semble correcte!
      </div>     
    </div>
      <div class="col-12 position-relative">
        <label for="mdp" class="form-label"><b>votre mot de passe entre [8-25] caractères:</b></label>
        <div class="input-group has-validation">        
          <input type="password" class="form-control" name="mdp" id="mdp" minlength="8" maxlength="25" placeholder="Au moins 8 caractères" required>
          <span class="input-group-text" style="width:45px"><i class="" id="eye"></i></span>
        </div>
      </div>
      <div class="col-12 position-relative">
        <label for="mdp_retype" class="form-label"><b>Confirmer le mot de passe:</b></label>
        <div class="input-group has-validation">        
          <input type="password" class="form-control" name="mdp_retype" id="mdp2" minlength="8" maxlength="25" placeholder="Confirmer le mot de passe" required>
        </div>
      </div>
      <!-- <div class="row"> -->
        <div class="col-6" style="text-align:center">
            <button class="btn btn-success w-50%" type="submit">S'inscrire</button>
        </div>
          <div class="col-6" style="text-align:center">
              <button class="btn btn-danger w-50%" onclick="eyeOff()" type="reset">effacer</button>
            </div>
      <!-- </div>  -->
  </form>
<?php
}else{
    if(!empty($_SESSION["infos"])){
?>
<form class="row g-3" action="traitement_inscription.php" method="post">
    <div class="col-12">
        <h4 style="text-align:justify">Un code de sécurité a été envoyé à l'adresse <?php echo $_SESSION["infos"]["email"];?> veuillez consulter votre courrier électronique ou vos spam.</h4>
        <br>
      <label for="code" class="form-label"><b>Saisir le code:</b></label>
      <input type="number" class="form-control is-valid" name="code" placeholder="XXXXXXX" maxlength="10" required>
      <span style="color:red"><?php if(htmlspecialchars($_GET["code"])==="incorrect"){
            echo 'Code incorrect, réessayer';
            };?>
      </span>
      <!--<div class="valid-feedback">-->
      <!--  Cela semble correcte!-->
      <!--</div>-->
    </div>
        <div class="col-6" style="text-align:center">
            <button class="btn btn-success w-50%" type="submit">Confirmer</button>
        </div>
          <div class="col-6" style="text-align:center">
              <button class="btn btn-danger w-50%" onclick="eyeOff()" type="reset">effacer</button>
        </div>
</form>
<?php
    }else{
        header("location:https://dixsurdix.000webhostapp.com/");
    }
}
?>

<p></p><br><br>
            </div><br><br>
        </div><br><br>
    </section><br><br>
     <!--lien cdn du popper en javaScript   -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>
