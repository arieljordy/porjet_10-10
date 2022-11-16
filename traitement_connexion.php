<?php
session_start();
require("config.php");
function generateRandomString(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 25; $i++){
        $randomString .= $characters[rand(0, $charactersLength)];
    };
    return $randomString;
};
// include_once("fonctions.php");

if(isset($_POST["email"]) && isset($_POST["mdp"])){
    $email = filter_var(strip_tags(strtolower($_POST["email"])),FILTER_VALIDATE_EMAIL);
    $mdp = strip_tags($_POST["mdp"]);
    $mdp = hash('sha256',$mdp);
    $requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = :email");
    $requete->execute([
        "email"=>$email
    ]);
    $resultat = $requete->fetch();
    if($resultat["email"]===$email && $mdp===$resultat["password"]){ 
        $_SESSION["utilisateur"] =
            [
                "nom" => $resultat["nom"],
                "email" =>$resultat["email"],
                "mdp" =>$mdp,
            ];
        header("location:espace_client.php");
    }else{
        header("location:index.php?err=already");
    }
}else if(htmlspecialchars($_GET["password"])==="forgot"){
    if(isset($_POST["email"])){
        $email = filter_var(strip_tags(strtolower($_POST["email"])),FILTER_VALIDATE_EMAIL);
        $requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $requete->execute([
            "email"=>$email
        ]);
        $resultat = $requete->fetch();
        if($resultat["email"]===$email){
            $_SESSION["data"]=
                [
                    "email"=>$resultat["email"],
                    "nom"=>$resultat["nom"],
                ];
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
                            $message.=$resultat["nom"];
                            $message.=',</p>
                            <p>Il semble que vous ayez besoin d\'un nouveau mot de passe. Cliquez sur le lien ci-dessous pour confirmer votre demande. 
                            </p>
                            <a style="text-align:center" href="https://dixsurdix.000webhostapp.com/traitement_connexion.php?update=password">Confirmer ma demande</a>
                        </div>
                        <br>
                        <div>
                            <p>
                            Si vous n\'avez pas demandé de changement de mot de passe, ignorez simplement ce message et poursuivez votre navigation. 
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
                            Vous avez reçu ce mail car vous voulez rénitialiser votre mot de passe <a href="https://dixsurdix.000webhostapp.com/" target="_blank" style="text-decoration: none;">Dix sur Dix</a><br>
                            &copy; <script>document.write(new Date().getFullYear());</script> Dix sur Dix | Tous droits réservés
                        </p>
                    </body>
                    </html>';
                $to=$resultat["email"];
                $header="MIME-Version: 1.0\r\n";
                $header.='From:"dixsurdix.com"<dixsurdix@info.com>'."\n";
                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';
                mail($to,"Votre demande de nouveau mot de passe",$message,$header);
                header("location:https://dixsurdix.000webhostapp.com/");
        }else{
            header("location:https://dixsurdix.000webhostapp.com/");
        }
    }
}else if(htmlspecialchars($_GET["update"])==="password"){
    if(!empty($_SESSION["data"])){
        $mot_de_passe=generateRandomString();
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
                $message.=$_SESSION["data"]["nom"];
                $message.=',</p>
                <p>
                    Votre mot de passe DixsurDix a bien été modifié
                </p>
                <p>
                    Vos identifiants de connexion sont désormais : 
                </p>
            </div>
            <br>
            <div>
                <ul>
                    <li>Email: '.$_SESSION["data"]["email"].'</li>
                    <li>Mot de passe: '.$mot_de_passe.'</li>
                </ul>
                <p>
                    Nous vous recommandons si vous le voulez bien de modifier votre mot de passe dans les paramètres.
                </p>
                <p>
                   À bientôt <br>
                   L\'équipe Dix sur Dix 
                </p>
            </div>
            <hr>
        </body>
        </html>';
        $to=$_SESSION["data"]["email"];
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"dixsurdix.com"<dixsurdix@info.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        mail($to,"Vos nouveaux identifiants sur DixsurDix",$message,$header);
        $mot_de_passe = hash("sha256",$mot_de_passe);
        $requete = $bdd->prepare("UPDATE utilisateurs SET password=:password WHERE email =:email");
        $requete->execute([
            "password" => $mot_de_passe,
            "email" => $_SESSION["data"]["email"],
        ]);
        unset($_SESSION["data"]);
        header("Location:https://dixsurdix.000webhostapp.com/"); 
    }else{
        header("Location:https://dixsurdix.000webhostapp.com/?lien=click");  
    }
}else{
    header("Location:https://dixsurdix.000webhostapp.com/");
}
?>