
<?php
function supprime_char($str){
    $res = str_replace(array("²","&",'"',"#","'","{","(","|","_","\\","^","@","]","[",")","°","}","+","=",",","?",";",".",":","/","!","§","$","¤","£","*","µ","%","<",">","0","1","2","3","4","5","6","7","8","9","¿","¡","ʺ","˅","`","^","¨","¥","©","˭","¢͚͟͡͠","™","ʿ","ˀ","ˁ","ˉ","®",0,1,2,3,4,5,6,7,8,9,true,false,"true","false"), '', $str);
    return $res;
};


function mdp_incorrect(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col"></div>
          <div class="col">
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mx-5" role="alert">
              <i class="bi bi-exclamation-triangle-fill" style="font-size:3rem"></i>
              <div class="mx-3">
              <b>votre mot de passe est incorrect <i class="bi bi-emoji-frown-fill"></i></b>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
<!--lien cdn du popper en javaScript   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
};

function spinner(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="spinner-border" style="color:#232222;width:200px;height:200px" role="status">
  <span class="visually-hidden"></span>
</div>
<!--lien cdn du popper en javaScript   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
};
function mdp_differentt(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css de bootstrap  5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- les icones de bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col"></div>
          <div class="col">
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mx-5" role="alert">
              <i class="bi bi-exclamation-triangle-fill" style="font-size:3rem"></i>
              <div class="mx-3">
              <b>Désolé vos mots de passe sont différents!<i class="bi bi-emoji-frown-fill"></i></b>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
<!--lien cdn du popper en javaScript   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
};
?>

