<?php
session_start();
require("config.php");

// cette variable et globale

function supprime_char($str){
    $res = str_replace(array("--","- "," -","  ","²","&",'"',"#","'","{","(","|","_","\\","^","@","]","[",")","°","}","+","=",",","?",";",".",":","/","!","§","$","¤","£","*","µ","%","<",">","0","1","2","3","4","5","6","7","8","9","¿","¡","ʺ","˅","`","^","¨","¥","©","˭","¢͚͟͡͠","™","ʿ","ˀ","ˁ","ˉ","®",0,1,2,3,4,5,6,7,8,9,true,false,"true","false"), '', $str);
    return $res;
};

// elle supprime les caractères étranges

if(
    isset($_POST["nom"]) && isset($_POST["email"]) &&
    isset($_POST["mdp"]) && isset($_POST["mdp_retype"])
){
    $nom = strip_tags($_POST["nom"]);
    $nom = supprime_char($nom);
    $email = filter_var(strip_tags($_POST["email"]),FILTER_VALIDATE_EMAIL);
    $mdp = strip_tags($_POST["mdp"]);
    $mdp_retype = strip_tags($_POST["mdp_retype"]);
    $array_nom = str_split($nom);
    if($array_nom[0] ===" " || $array_nom[0]==="-" || $nom != strip_tags($_POST["nom"])){
        header("Location:inscription.php?err=nom");
    }else{
        $requete=$bdd->prepare("SELECT * FROM utilisateurs WHERE email=:email");
        $requete->execute([
            "email"=>$email
        ]);
        $infos=$requete->fetch();
        if($infos["email"]===$email){
            header("location:inscription.php?err=double&email={$infos['email']}");
        }
        $email_existant = $infos["email"];
        if($email_existant != $email){
            if(strlen($mdp) <= 25 && strlen($mdp) >=8 && $mdp===$mdp_retype){
                $mdp = hash('sha256',$mdp);
                $code=mt_rand(0,9);
                $code.=mt_rand(0,9);
                $code.=mt_rand(0,9);
                $code.=mt_rand(0,9);
                $code.=mt_rand(0,9);
                $code.=mt_rand(0,9);
                $code.=mt_rand(0,9);
                $message='
                    <html>
                    <body>
                        <div>
                            <div>
                                <img src="http://dixsurdix.000webhostapp.com/images_&_logo_du_site/logo_jaune.png" alt="logo Dix sur Dix" width="100">
                            </div>
                            <br>
                            <hr>
                            <p>Bravo ';
                            $message.=$nom;
                            $message.=',</p>
                            <p>Vous êtes sur le point de rejoindre <a href="https://dixsurdix.000webhostapp.com/" target="_blank" style="text-decoration: none;">Dix sur Dix</a><br>le meilleur site de vente au Gabon.</p>
                            <p>Il suffit de saisir le code de sécurité ci-dessous afin de confirmer votre inscription et de commencer vos achats maintenant</p>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <h1>Le code de sécurité est : ';
                            $message.=$code;
                            $message.='</h1>
                        </div>
                        <br>
                        <div>
                            <p>
                            Notre équipe vous souhaite la Bienvenue.
                            </p>
                            <p>
                                P.S rappelez-vous chez <a href="https://dixsurdix.000webhostapp.com/" target="_blank" style="text-decoration:none">Dix sur Dix</a> le slogant est <b>La Bonne Qualité au Prix de vos rêves.</b> <br>
                            </p>
                            <p>
                                Les informations concernant les ventes veuillez lire <a href="https://dixsurdix.000webhostapp.com/" style="text-decoration:none">les Conditions générales de vente de Dix sur Dix</a><br>
                                et <a href="https://dixsurdix.000webhostapp.com/" style="text-decoration:none" target="_blank">notre Notice Protection de vos informations personnelles</a>
                            </p>
                        </div>
                        <hr>
                        <p>
                            Vous avez reçu ce mail car vous voulez confirmer votre Compte <a href="https://dixsurdix.000webhostapp.com/" target="_blank" style="text-decoration: none;">Dix sur Dix</a><br>
                            &copy; <script>document.write(new Date().getFullYear());</script> Dix sur Dix | Tous droits réservés
                        </p>
                    </body>
                    </html>';
                $to=$email;
                $header="MIME-Version: 1.0\r\n";
                $header.='From:"dixsurdix.com"<dixsurdix@info.com>'."\n";
                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';
                mail($to,"Nouveau Membre",$message,$header);
                $_SESSION["infos"] =
                    [
                        "code"=>$code,
                        "nom"=>$nom,
                        "email"=>$email,
                        "password"=>$mdp,
                    ];
                header("location:inscription.php?message=code");
            }else{
                header("location:inscription.php?err=password");
            }
        }
    }
}else{
    if(isset($_POST["code"])){
        if(htmlspecialchars($_POST["code"])===$_SESSION["infos"]["code"]){
                $user=$bdd->prepare("INSERT INTO utilisateurs(nom,email,password) VALUES(:nom,:email,:password)");
                $user->execute([
                    "nom"=>$_SESSION["infos"]["nom"],
                    "email"=>$_SESSION["infos"]["email"],
                    "password"=>$_SESSION["infos"]["password"],
                ]);
                $_SESSION["utilisateur"] =
                [
                    "nom"=>$_SESSION["infos"]["nom"],
                    "email"=>$_SESSION["infos"]["email"],
                    "password"=>$_SESSION["infos"]["password"],
                ];
                unset($_SESSION["infos"]);
                header("location:espace_client.php?success=ok");
        }else{
            header("location:inscription.php?message=code&code=incorrect");
        }
    }else{
        header("location:inscription.php?message=code");
    }

}


?> 