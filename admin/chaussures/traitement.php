<?php
session_start();
require("config.php");
if(isset($_FILES["image"]) && isset($_FILES["image"]["error"])==0 && isset($_POST["nom"]) && isset($_POST["prix"]) && isset($_POST["quantite"])){
    if ($_FILES["image"]["size"] <= 3000000){
        $fileInfo = pathinfo($_FILES["image"]["name"]);
        $extension = $fileInfo["extension"];
        $allowedExtensions = ["jpg", "jpeg", "gif", "png"];
        if (in_array($extension, $allowedExtensions)){
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . basename($_FILES["image"]["name"]));
            // echo "L'envoi a bien été effectué !";  
        }
    $nom = strtolower(htmlspecialchars($_POST["nom"]));
    $prix = strtolower(htmlspecialchars($_POST["prix"]));
    $quantite = strtolower(htmlspecialchars($_POST["quantite"]));
    $description = strtolower(htmlspecialchars($_POST["description"]));
    }
}
?>