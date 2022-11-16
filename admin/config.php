<?php
try {
    $bdd = new PDO("mysql:https://databases-auth.000webhost.com/sql.php?server=1&db=id19737583_dix_sur_dix&table=administrateurs&pos=0;dbname=id19737583_dix_sur_dix;charset=utf8;","id19737583_dixsurdix","D\Aa26Y(_j_n/B@5");
} catch (Exeption $e) {
 die("erreur ".$e->getMessage());   
}
?>