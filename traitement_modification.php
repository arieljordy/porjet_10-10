<?php
session_start();
require("config.php");

// cette fonction est globlale

function supprime_char($str){
    $name = str_replace(array("--","- "," -","  ","²","&",'"',"#","'","{","(","|","_","\\","^","@","]","[",")","°","}","+","=",",","?",";",".",":","/","!","§","$","¤","£","*","µ","%","<",">","0","1","2","3","4","5","6","7","8","9","¿","¡","ʺ","˅","`","^","¨","¥","©","˭","¢͚͟͡͠","™","ʿ","ˀ","ˁ","ˉ","®",0,1,2,3,4,5,6,7,8,9,true,false,"true","false"), '', $str);
    return $name;
};

// fin de la fonction qui supprime les caractères étranges

if(isset($_POST["nouvel_email"])){
    $email = filter_var(strip_tags($_POST["nouvel_email"],FILTER_VALIDATE_EMAIL));
    $_SESSION["email"] = $email;
    $requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE email=:email");
    $requete->execute([
        "email"=>$email
    ]);
    $resultat = $requete->fetch();
    if($resultat["email"]===$email){
        header("location:modification.php?err=email&email={$resultat['email']}");
    }else{
        $req=$bdd->prepare("SELECT * FROM utilisateurs WHERE email =:user_email");
        $req->execute(["user_email"=>$_SESSION["utilisateur"]["email"]]);
        $res=$req->fetch();
        $_SESSION["id"] = $res["id_utilisateur"];
        $message='
                    <html>
                    <body>
                        <div>
                            <div>
                                <img src="http://dixsurdix.000webhostapp.com/images_&_logo_du_site/logo_jaune.png" alt="logo Dix sur Dix" width="100">
                            </div>
                            <br>
                            <hr>
                            <p>Bonjour ';
                            $message.=$_SESSION["utilisateur"]["nom"];
                            $message.=',</p>
                            <p>Vous avez demandé à changer d\'adresse email sur DixsurDix. Pour confirmer ce changement, veuillez cliquer sur le lien ci-dessous :</p>
                            <a href="https://dixsurdix.000webhostapp.com/traitement_modification.php?update=email">Cliquez ici pour confirmer</a>
                        </div>
                        <br>
                        <div>
                            <p>
                            Si vous n\'avez pas demandé de changement d\'adresse email, ignorez simplement ce message. 
                            </p>
                            <p>
                                P.S rappelez-vous chez <a href="https://dixsurdix.000webhostapp.com/" target="_blank" style="text-decoration:none">Dix sur Dix</a> le slogant est <b>La Bonne Qualité au Prix de vos rêves.</b> <br>
                            </p>
                            <p>
                               À bientôt <br>
                               L\'équipe Dix sur Dix 
                            </p>
                        </div>
                        <hr>
                        <p>
                            Vous avez reçu ce mail car vous voulez changer d\'adresse email <a href="https://dixsurdix.000webhostapp.com/" target="_blank" style="text-decoration: none;">Dix sur Dix</a><br>
                            &copy; <script>document.write(new Date().getFullYear());</script> Dix sur Dix | Tous droits réservés
                        </p>
                    </body>
                    </html>';
                $to=$email;
                $header="MIME-Version: 1.0\r\n";
                $header.='From:"dixsurdix.com"<dixsurdix@info.com>'."\n";
                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';
                mail($to,"Validation de votre nouvelle adresse email",$message,$header);
                header("location:modification.php?validation=email");
    }
}else if(htmlspecialchars($_GET["update"])==="email"){
        if(!empty($_SESSION["email"])){
            $_SESSION["utilisateur"] = [
                "nom" => $_SESSION["utilisateur"]["nom"],
                "email" => $_SESSION["email"],
            ];
            $requete = $bdd->prepare("UPDATE utilisateurs SET email=:email WHERE id_utilisateur =:id");
            $requete->execute([
                "email" => $_SESSION["email"],
                "id" => $_SESSION["id"],
            ]);
            unset($_SESSION["email"]);
            unset($_SESSION["id"]);
            header("Location:modification.php");
        }else{
          header("Location:modification.php?lien=click");  
        } 
}

if(isset($_POST["nouveau_nom"])){
    $nom = supprime_char(strip_tags($_POST["nouveau_nom"]));
    if(strlen($nom)===0){
        header("Location:modification.php");
    }else{
        $array_nom = str_split($nom);
        if($array_nom[0] ===" " || $array_nom[0]==="-" || $nom != htmlspecialchars($_POST["nouveau_nom"])){
            header("Location:modification.php?err=nom");
        }else{
            $requete = $bdd->prepare("UPDATE utilisateurs SET nom=:nom WHERE email=:email");
            $requete->execute([
                "email"=>$_SESSION["utilisateur"]["email"],
                "nom"=>$nom,
            ]);
            $_SESSION["utilisateur"] = [
                "nom" =>$nom,
                "email"=>$_SESSION["utilisateur"]["email"],
            ];
            header("Location:modification.php");     
        }
 
    }

}

if(isset($_POST["nouveau_mdp"]) && isset($_POST["nouveau_mdp_retype"])){
    $mdp = strip_tags($_POST["nouveau_mdp"]);
    $mdp_confirm = strip_tags($_POST["nouveau_mdp_retype"]);
    if($mdp===$mdp_confirm){
        $mdp = $mdp_confirm;
        $mdp = hash("sha256",$mdp);
        $requete = $bdd->prepare("UPDATE utilisateurs SET password=:password WHERE email=:ancien_email");
        $requete->execute([
            "password"=>$mdp,
            "ancien_email"=>$_SESSION["utilisateur"]["email"],
        ]);
        header("Location:modification.php");
    }else{
        header("location:modification.php?err=password");
    }
}

if(isset($_POST["supprimer"])){
    $sup = $bdd->prepare("DELETE FROM utilisateurs WHERE email =:email");
    $sup->execute([
        "email"=>$_SESSION["utilisateur"]["email"],
    ]);
    session_destroy();
    header("Location:index.php");
}
?>